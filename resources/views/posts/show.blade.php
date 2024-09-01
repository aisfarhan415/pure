<!DOCTYPE html>
<html>
<head>
    <title>Post Details</title>
</head>
<body>
    <h1>Post Details</h1>
    <p><strong>Title:</strong> {{ $post->title }}</p>
    <p><strong>Content:</strong> {{ $post->content }}</p>
    <p><strong>User:</strong> {{ $post->user->name }}</p>
    <a href="{{ route('posts.index') }}">Back to Posts List</a>
    <a href="{{ route('posts.edit', $post->id) }}">Edit Post</a>
</body>
</html>
