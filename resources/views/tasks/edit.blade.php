<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>TaskFlow</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>

    <div class="card">

        <h1>Editar Tarefa</h1>

        <!-- Navegação -->
        <nav>
            <a href="{{ route('tasks.index') }}" class="btn">
                Voltar
            </a>
        </nav>

        <!-- Formulário -->
        <form action="{{ route('tasks.update', $task) }}" method="POST">

            @csrf
            @method('PUT')
            
            <div class="form-group">
                <label for="title">Título</label>
                <input type="text" name="title" id="title" placeholder="Ex: Estudar" value="{{ $task->title }}" required>
            </div>

            <div class="form-group">
                <label for="description">Descrição</label>
                <textarea name="description" id="description" rows="4" placeholder="O que precisa ser feito?">{{ $task->description }}</textarea>
            </div>

            <div class="form-group">
                <label for="status">Status Inicial</label>
                <select name="status" id="status">
                    <option value="pendente" @selected($task->status == 'pendente')>
                        Pendente
                    </option>
                    <option value="concluida" @selected($task->status == 'concluida')>
                        Concluída
                    </option>
                </select>
            </div>

            <nav>
                <button type="submit" class="btn">
                    Alterar
                </button>
            </nav>

        </form>

    </div>

</body>
</html>