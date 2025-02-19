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

    <form action="{{ route('posts.update', $post) }}" method="POST">
        @csrf
        @method("PUT")

        <div>
            <label for="title">Title:</label>
            <input value="{{ old('title', $post->title) }}" type="text" id="title" name="title">
            @error('title')
            <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="content">Content:</label> <br>
            <textarea name="content" id="content" cols="30" rows="10">{{ old('content', $post->content) }}</textarea>
            @error('content')
            <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <input type="submit" value="Update post">
        </div>
    </form>
</body>
</html>
