<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>TaskFlow</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>

    <div class="card">

        <h1>Lista de Tarefas</h1>

        <!-- Navegação -->
        <nav>
            <a href="{{ route('index') }}" class="btn">
                Voltar
            </a>
            <a href="{{ route('tasks.create') }}" class="btn">
                Nova Tarefa
            </a>
        </nav>

        <!-- Tarefas -->
        <ul>
            @forelse ($tasks as $task)
                <li>
                    <!-- Informações -->
                    <div class="task-info">
                        <strong>{{ $task->title }}</strong> 
                        <span class="status">{{ $task->status }}</span>
                        <p class="description">{{ $task->description }}</p>
                    </div>
                    
                    <!-- Ações -->
                    <div class="task-actions">
                        <a href="{{ route('tasks.edit', $task->id) }}" class="btn">
                            Editar
                        </a>
                    </div>
                </li>
            @empty
                <li>Nenhuma tarefa encontrada no banco.</li>
            @endforelse
        </ul>

    </div>

</body>
</html>