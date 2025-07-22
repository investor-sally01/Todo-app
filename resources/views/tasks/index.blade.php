<!DOCTYPE html>
<html>
<head>
    <title>To-Do List</title>
</head>
<body>
    <h1>To-Do List</h1>

    <a href="/tasks/create">Add Task</a>

    <ul>
        @foreach ($tasks as $task)
            <li>
                {{ $task->title }}

                <!-- Edit Button -->
                <a href="/tasks/{{ $task->id }}/edit">Edit</a>

                <!-- Delete Form -->
                <form action="/tasks/{{ $task->id }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
