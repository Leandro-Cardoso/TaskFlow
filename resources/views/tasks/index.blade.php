<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>TaskFlow</title>
    <style>
        /* Base */
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
        nav {
            text-align: center;
        }
        /* Botão */
        .btn {
            display: inline-block;
            background: #ffc400;
            color: #000;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: bold;
            margin-bottom: 20px;
            transition: all 0.3s;
        }
        .btn:hover {
            background: #e67b00;
        }
        /* Card */
        .card {
            background: #121212;
            
            padding: 20px;
            border-radius: 10px;
        }
        /* Lista */
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