<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    kích hoạt tài khoản cho email
    {{ $data }}
    <form action="{{ route('activePass') }}">
        <input type="hidden" name="email" value="{{ $data }}">
        <button type="submit">Kích hoạt tài khoản</button>
    </form>
</body>

</html>
