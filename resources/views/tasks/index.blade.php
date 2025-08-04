<!DOCTYPE html>
<html>
<head>
    <title>All Tasks</title>
</head>
<body>
    <h1>All Tasks</h1>

    <a href="/tasks/create">+ Create New Task</a>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <ul>
        @foreach ($tasks as $task)
            <li>
                <strong>{{ $task->title }}</strong><br>
                {{ $task->description }}<br>

                <a href="/tasks/{{ $task->id }}/edit">Edit</a>

                <form action="/tasks/{{ $task->id }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Delete this task?')">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
