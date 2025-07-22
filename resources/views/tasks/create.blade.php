<!DOCTYPE html>
<html>
<head>
    <title>Add Task</title>
</head>
<body>
    <h1>Add Task</h1>

    <form method="POST" action="/tasks">
        @csrf
        <label for="title">Task Title:</label>
        <input type="text" id="title" name="title" required>
        <button type="submit">Add</button>
    </form>

    <br>
    <a href="/tasks">Back to List</a>
</body>
</html>
