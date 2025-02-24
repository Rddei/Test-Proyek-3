<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Laravel Email Notification</title>
</head>
<body>
    <h1>Laravel Kirim Email</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="{{ route('kirim.email') }}" method="POST">
        @csrf
        <button type="submit">Kirim Email ke Alamat Lain</button>
    </form>
</body>
</html>
