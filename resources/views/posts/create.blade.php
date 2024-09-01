<!DOCTYPE html>
<html>
<head>
    <title>Create New Post</title>
</head>
<body>
    <h1>Create New Post</h1>
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" id="title">
        <br>
        <label for="content">Content:</label>
        <textarea name="content" id="content"></textarea>
        <br>
        <button type="submit">Create Post</button>
    </form>
    <a href="{{ route('posts.index') }}">Back to Posts List</a>
</body>
</html>
