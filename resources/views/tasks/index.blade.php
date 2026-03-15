<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>TaskFlow</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>

    <div class="card">

        <h1>Lista de Tarefas</h1>

        <nav>
            <a href="{{ route('tasks.create') }}" class="btn">
                Nova Tarefa
            </a>
        </nav>

        <ul>
            @forelse ($tasks as $task)
                <li>
                    <strong>{{ $task->title }}</strong> 
                    <span class="status">{{ $task->status }}</span>
                    <p>{{ $task->description }}</p>
                </li>
            @empty
                <li>Nenhuma tarefa encontrada no banco.</li>
            @endforelse
        </ul>

    </div>

</body>
</html>