<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('posts.store')}}" method="post">
        @csrf
        <input type="text" name="name">
        <button type="sudmit">Отправить</button>
    </form>
</body>
</html>