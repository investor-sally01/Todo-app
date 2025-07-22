<!DOCTYPE html>
<html>
<head>
    <title>Edit Task</title>
</head>
<body>
    <h1>Edit Task</h1>

    <form method="POST" action="/tasks/{{ $task->id }}">
        @csrf
        @method('PUT')
        <label for="title">Task Title:</label>
        <input type="text" id="title" name="title" value="{{ $task->title }}" required>
        <button type="submit">Update</button>
    </form>

    <br>
    <a href="/">Back to List</a>
</body>
</html>
