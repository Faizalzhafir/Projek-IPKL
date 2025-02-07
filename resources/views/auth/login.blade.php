<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | I-PKL</title>
</head>
<body>
    <h1 align="center">Ini halaman Login</h1>
    <form action="{{ route('login_proses') }}" method="post" align="center" enctype="multipart/form-data">
        @csrf
        <label for="">Email</label>
        <input type="email" name="email" placeholder="Email...">
        <br><br>
        <label for="">Password</label>
        <input type="password" name="password" placeholder="Password...">
        <br><br>
        <button type="submit">Kirim</button>
    </form>
</body>
</html>