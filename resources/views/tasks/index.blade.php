<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>TaskFlow</title>
    <style>
        body {
            background: #000;

            font-family: sans-serif;
            font-size: 16px;
            color: #ddd;

            padding: 20px;
        }
        h1 {
            text-align: center;
            text-transform: uppercase;
            color: #ffc400;
        }
        .card {
            background: #121212;
            
            padding: 20px;
            border-radius: 10px;
        }
        ul {
            list-style: none;
            padding: 0;
        }
        li {
            border-bottom: 1px solid #eee;
            padding: 10px 0;
        }
        .status {
            font-size: 0.8em;
            padding: 2px 6px;
            border-radius: 4px;
            background: #ddd;
        }
    </style>
</head>
<body>

    <div class="card">

        <h1>Lista de Tarefas</h1>

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