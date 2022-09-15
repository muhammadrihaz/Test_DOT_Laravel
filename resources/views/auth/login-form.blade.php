<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form - Halaman Login </title>
    <link rel="stylesheet" href="{{ asset('storage/css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <form action="{{ route('authenticate') }}" method="post">
        @csrf
        <input type="email" name="email" required>
        <input type="password" name="password" required>
        <input type="checkbox" name="remember_me"> remember me
        <button type="submit">Login</button>
    </form>
</body>

</html>
