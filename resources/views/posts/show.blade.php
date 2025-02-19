<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
</head>
<body>
    <h1>Posts</h1>

    <p>
        <a href="{{ route('posts.index') }}">Back to list</a>
    </p>

    <ul>
        <li>
            <a href="{{ route('posts.edit', $post) }}">Edit</a> |
        </li>
        <li>
            <a href="{{ route('posts.delete', $post) }}">Delete</a>
        </li>
    </ul>

    <h2>{{ $post->title }}</h2>
    <p>{{ $post->content }}</p>
</body>
</html>
