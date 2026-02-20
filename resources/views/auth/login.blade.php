<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | Justine Portfolio</title>
    <link rel="stylesheet" href="/css/portfolio.css">
</head>
<body>
<div class="login-page">
    <div class="login-box">
        <div style="text-align:center;font-size:2.5rem;margin-bottom:1rem">🔐</div>
        <h1 class="login-title gradient-text">Admin Login</h1>
        <p class="login-sub">Sign in to manage your portfolio</p>

        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $e){{ $e }}<br>@endforeach
            </div>
        @endif

        <form action="/login" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" value="{{ old('email', 'admin@portfolio.com') }}" required autofocus>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required placeholder="••••••••">
            </div>
            <div style="display:flex;align-items:center;gap:.5rem;margin-bottom:1.25rem">
                <input type="checkbox" name="remember" id="remember" style="width:auto">
                <label for="remember" style="margin:0;text-transform:none;font-size:.875rem;font-weight:400">Remember me</label>
            </div>
            <button type="submit" class="btn btn-primary" style="width:100%;justify-content:center;padding:.85rem">
                🚀 Sign In
            </button>
        </form>
        <div style="text-align:center;margin-top:1.5rem">
            <a href="/" style="color:var(--text-muted);font-size:.875rem;text-decoration:none;">← Back to Portfolio</a>
        </div>
        <div style="margin-top:1.5rem;padding:1rem;background:rgba(124,58,237,.08);border-radius:8px;border:1px solid var(--border);font-size:.8rem;color:var(--text-muted);text-align:center">
            Default: <strong style="color:var(--accent-light)">admin@portfolio.com</strong> / <strong style="color:var(--accent-light)">password123</strong>
        </div>
    </div>
</div>
</body>
</html>
