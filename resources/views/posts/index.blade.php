<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Список постов</h1>

<ul>
    <li>
        <a href="{{route('posts.show', ['post'=>1])}}">Post1</a>
        <a href="{{route('posts.edit', ['post'=>1])}}">Edit1</a>
        <form action="{{route('posts.destroy', ['post'=>1])}}" method="post">
            @csrf 
            @method('DELETE')
            <button type="sudmit">Удалить</button>
        </form>
    </li>
    <li>
        <a href="{{route('posts.show', ['post'=>2])}}">Post2</a>
        <a href="{{route('posts.edit', ['post'=>2])}}">Edit2</a>
        <form action="{{route('posts.destroy', ['post'=>2])}}" method="post">
            @csrf 
            @method('DELETE')
            <button type="sudmit">Удалить</button>
        </form>
    </li>
    <li>
        <a href="{{route('posts.show', ['post'=>3])}}">Post3</a>
        <a href="{{route('posts.edit', ['post'=>3])}}">Edit3</a>
        <form action="{{route('posts.destroy', ['post'=>3])}}" method="post">
            @csrf 
            @method('DELETE')
            <button type="sudmit">Удалить</button>
        </form>
    </li>
</ul>
    
    
</body>
</html>