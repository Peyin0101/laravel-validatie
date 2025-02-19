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
        <a href="{{ route('posts.create') }}">Add new post</a>
    </p>

    <ul>
        @foreach($posts as $post)
        <li>
            {{ $post->title }} -
            <a href="{{ route('posts.show', $post) }}">View post</a>
        </li>
        @endforeach
    </ul>
</body>
</html>
