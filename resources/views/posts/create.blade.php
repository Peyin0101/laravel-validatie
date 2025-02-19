<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
</head>
<body>
    <h1>Posts</h1>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf

        <div>
            <label for="title">Title:</label>
            <input value="{{ old('title')}}" type="text" id="title" name="title">
            @error('title')
            <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="content">Content:</label> <br>
            <textarea name="content" id="content" cols="30" rows="10">{{ old('content') }}</textarea>
            @error('content')
            <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <input type="submit" value="Add post">
        </div>
    </form>
</body>
</html>
