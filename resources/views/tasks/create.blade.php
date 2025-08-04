<form action="{{ url('/tasks') }}" method="POST">
    @csrf
    <label for="title">Task Title:</label>
    <input type="text" name="title" id="title" required>

    <label for="description">Description:</label>
    <textarea name="description" id="description" required></textarea>

    <button type="submit">Add Task</button>
</form>
