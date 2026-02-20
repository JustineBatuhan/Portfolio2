@extends('layouts.admin')

@section('title', 'Skills')
@section('page-title', '🛠️ Skills')
@section('topbar-actions')
    <a href="{{ route('admin.skills.create') }}" class="btn btn-primary btn-sm">➕ Add Skill</a>
@endsection

@section('content')
<div class="card">
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Category</th>
                <th>Level</th>
                <th>Sort</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($skills as $skill)
            <tr>
                <td><strong>{{ $skill->name }}</strong></td>
                <td>
                    @if($skill->category === 'Frontend') <span class="badge badge-cyan">🎨 Frontend</span>
                    @elseif($skill->category === 'Backend') <span class="badge badge-purple">⚙️ Backend</span>
                    @else <span class="badge badge-green">🛠️ Tools</span>
                    @endif
                </td>
                <td>
                    <div style="display:flex;align-items:center;gap:.75rem">
                        <div style="flex:1;height:6px;background:rgba(255,255,255,.1);border-radius:3px;max-width:120px">
                            <div style="height:100%;width:{{ $skill->level }}%;background:linear-gradient(90deg,var(--accent),var(--cyan));border-radius:3px"></div>
                        </div>
                        <span style="font-weight:600;color:var(--accent-light)">{{ $skill->level }}%</span>
                    </div>
                </td>
                <td style="color:var(--text-muted)">{{ $skill->sort_order }}</td>
                <td>
                    <div class="actions">
                        <a href="{{ route('admin.skills.edit', $skill) }}" class="btn btn-outline btn-sm">✏️ Edit</a>
                        <form action="{{ route('admin.skills.destroy', $skill) }}" method="POST" onsubmit="return confirm('Delete this skill?')">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">🗑️</button>
                        </form>
                    </div>
                </td>
            </tr>
            @empty
            <tr><td colspan="5" style="text-align:center;color:var(--text-muted);padding:2rem">No skills yet.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
