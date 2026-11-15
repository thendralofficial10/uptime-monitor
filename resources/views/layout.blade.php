<!DOCTYPE html>
<html>
<head>
    <title>Uptime Monitor</title>
    <style>
        body { font-family: sans-serif; max-width: 800px; margin: 40px auto; }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        td, th { border: 1px solid #ddd; padding: 8px; }
        .success { background: #d4edda; padding: 10px; margin-bottom: 15px; }
        .error { color: red; }
    </style>
</head>
<body>
    <h1>Uptime Monitor</h1>
    @if (session('success'))
        <div class="success">{{ session('success') }}</div>
    @endif
    @yield('content')
</body>
</html>