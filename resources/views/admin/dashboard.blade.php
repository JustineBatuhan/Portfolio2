@extends('layouts.admin')

@section('title', 'Dashboard')
@section('page-title', '📊 Dashboard')

@section('content')
<div class="stat-grid">
    <div class="stat-card accent">
        <div class="stat-value gradient-text">{{ $stats['projects'] }}</div>
        <div class="stat-label">Total Projects</div>
    </div>
    <div class="stat-card">
        <div class="stat-value">{{ $stats['skills'] }}</div>
        <div class="stat-label">Skills Listed</div>
    </div>
    <div class="stat-card">
        <div class="stat-value">{{ $stats['messages'] }}</div>
        <div class="stat-label">Total Messages</div>
    </div>
    <div class="stat-card" style="border-color:var(--cyan)">
        <div class="stat-value" style="color:var(--cyan)">{{ $stats['unread'] }}</div>
        <div class="stat-label">Unread Messages</div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h2>✉️ Recent Messages</h2>
        <a href="/admin/messages" class="btn btn-outline btn-sm">View All</a>
    </div>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Date</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @forelse($recentMessages as $msg)
            <tr>
                <td><strong>{{ $msg->name }}</strong></td>
                <td style="color:var(--text-muted)">{{ $msg->email }}</td>
                <td>{{ Str::limit($msg->subject, 40) }}</td>
                <td style="color:var(--text-muted)">{{ $msg->created_at->diffForHumans() }}</td>
                <td>
                    @if($msg->isRead())
                        <span class="badge badge-green">Read</span>
                    @else
                        <span class="unread-dot"></span><span class="badge badge-purple">New</span>
                    @endif
                </td>
            </tr>
            @empty
            <tr><td colspan="5" style="text-align:center;color:var(--text-muted);padding:2rem">No messages yet.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>

<div style="display:grid;grid-template-columns:1fr 1fr;gap:1.25rem;margin-top:1.25rem">
    <div class="card" style="padding:1.5rem">
        <h3 style="margin-bottom:1rem">Quick Actions</h3>
        <div style="display:flex;flex-direction:column;gap:.75rem">
            <a href="/admin/projects/create" class="btn btn-primary">➕ Add New Project</a>
            <a href="/admin/skills/create"   class="btn btn-outline">🛠️ Add New Skill</a>
            <a href="/" target="_blank"       class="btn btn-outline">🌐 View Public Site</a>
        </div>
    </div>
    <div class="card" style="padding:1.5rem">
        <h3 style="margin-bottom:1rem">Portfolio Info</h3>
        <div style="color:var(--text-muted);font-size:.875rem;line-height:1.9">
            <div>👤 <strong style="color:var(--text-primary)">Justine Batuhan</strong></div>
            <div>🎓 Madridejos Community College</div>
            <div>📚 BS Information Technology</div>
            <div>🛠️ Laravel · PHP · MySQL</div>
        </div>
    </div>
</div>
@endsection
