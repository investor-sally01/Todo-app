<!DOCTYPE html>
<html>
<head>
    <title>Edit Task</title>
</head>
<body>
    <h1>Edit Task</h1>

    <form action="/tasks/{{ $task->id }}" method="POST">
        @csrf
        @method('PUT')

        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title" value="{{ $task->title }}" required><br><br>

        <label for="description">Description:</label><br>
        <textarea id="description" name="description" required>{{ $task->description }}</textarea><br><br>

        <button type="submit">Update Task</button>
    </form>

    <br>
    <a href="/tasks">Back to List</a>
</body>
</html>
