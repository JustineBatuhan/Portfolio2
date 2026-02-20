@extends('layouts.admin')

@section('title', 'Message')
@section('page-title', '📨 Message Detail')

@section('content')
<div class="card" style="max-width:650px">
    <div class="card-header">
        <div>
            <div style="font-size:.75rem;color:var(--text-muted)">From</div>
            <strong>{{ $message->name }}</strong> &lt;{{ $message->email }}&gt;
        </div>
        <span style="color:var(--text-muted);font-size:.85rem">{{ $message->created_at->format('F d, Y h:i A') }}</span>
    </div>
    <div class="card-body">
        <div style="margin-bottom:1.5rem">
            <div style="font-size:.75rem;text-transform:uppercase;letter-spacing:1px;color:var(--text-muted);margin-bottom:.25rem">Subject</div>
            <div style="font-size:1.1rem;font-weight:700">{{ $message->subject }}</div>
        </div>
        <div>
            <div style="font-size:.75rem;text-transform:uppercase;letter-spacing:1px;color:var(--text-muted);margin-bottom:.75rem">Message</div>
            <div style="background:rgba(255,255,255,.04);border:1px solid var(--border);border-radius:8px;padding:1.25rem;line-height:1.8;color:var(--text-primary)">
                {!! nl2br(e($message->body)) !!}
            </div>
        </div>
        <div style="display:flex;gap:1rem;margin-top:1.5rem">
            <a href="mailto:{{ $message->email }}" class="btn btn-primary">📧 Reply via Email</a>
            <a href="{{ route('admin.messages.index') }}" class="btn btn-outline">← Back</a>
            <form action="{{ route('admin.messages.destroy', $message) }}" method="POST" onsubmit="return confirm('Delete?')">
                @csrf @method('DELETE')
                <button type="submit" class="btn btn-danger">🗑️ Delete</button>
            </form>
        </div>
    </div>
</div>
@endsection
