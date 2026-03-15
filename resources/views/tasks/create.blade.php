<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Nova Tarefa - TaskFlow</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>

    <div class="card">

        <h1>Nova Tarefa</h1>

        <nav>
            <a href="{{ route('tasks.index') }}" class="btn">
                Voltar
            </a>
        </nav>

        <form action="{{ route('tasks.store') }}" method="POST">

            @csrf <div class="form-group">
                <label for="title">Título</label>
                <input type="text" name="title" id="title" placeholder="Ex: Estudar" required>
            </div>

            <div class="form-group">
                <label for="description">Descrição</label>
                <textarea name="description" id="description" rows="4" placeholder="O que precisa ser feito?"></textarea>
            </div>

            <div class="form-group">
                <label for="status">Status Inicial</label>
                <select name="status" id="status">
                    <option value="pendente">Pendente</option>
                    <option value="concluida">Concluída</option>
                </select>
            </div>

            <nav>
                <button type="submit" class="btn">
                    Salvar
                </button>
            </nav>

        </form>

    </div>

</body>
</html>