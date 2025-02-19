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
        Are you sure you want to delete this post?
    </p>

    <form action="{{ route('posts.destroy', $post) }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="Delete" />
        or
        <a href="{{ route('posts.show', $post) }}">Cancel</a>
    </form>
</body>
</html>
