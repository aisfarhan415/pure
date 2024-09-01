<!DOCTYPE html>
<html>
<head>
    <title>Edit Post</title>
</head>
<body>
    <h1>Edit Post</h1>
    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="{{ $post->title }}">
        <br>
        <label for="content">Content:</label>
        <textarea name="content" id="content">{{ $post->content }}</textarea>
        <br>
        <button type="submit">Update Post</button>
    </form>
    <a href="{{ route('posts.index') }}">Back to Posts List</a>
</body>
</html>
