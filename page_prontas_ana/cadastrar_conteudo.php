<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Conteúdo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <form action="" method="post">
        <div class="text-center">
            <h1>Cadastrar Conteúdo</h1>
        </div>
        <div class="mb-3">
            <label for="descricao">Título</label>
            <input type="text" id="Título da Tarefa" name="Título da Tarefa" required>
        </div>
        <div class="mb-3">
            <label for="texto" class="label">Texto:</label>
            <textarea id="texto" name="texto" class="textarea" cols="80" rows="8" placeholder="Digite aqui"></textarea>
        </div>
        <p>Adicione Link de videos
            <br>
            <label for="descricao">Link</label>
            <input type="text" id="Título da Tarefa" name="Título da Tarefa" required>
            <br>
            <br>
            <label for="descricao">Link</label>
            <input type="text" id="Título da Tarefa" name="Título da Tarefa" required>
            <br>
            <br>
            <label for="descricao">Link</label>
            <input type="text" id="Título da Tarefa" name="Título da Tarefa" required>
            <br>
            <br>
            <label for="descricao">Link</label>
            <input type="text" id="Título da Tarefa" name="Título da Tarefa" required>
            <br>
            <br>
            <label for="arquivo">Escolha uma imagem:</label>
            <input type="file" id="arquivo" name="arquivo" accept=".jpg, .jpeg, .png">
            <br>
            <br>
            <label for="arquivo">Escolha uma imagem:</label>
            <input type="file" id="arquivo" name="arquivo" accept=".jpg, .jpeg, .png">
            <br>
            <br>
            <label for="arquivo">Escolha uma imagem:</label>
            <input type="file" id="arquivo" name="arquivo" accept=".jpg, .jpeg, .png">
            <br>
            <br>
            <button class="btn btn-primary" type="button">ENVIAR</button>
            <button class="btn btn-success" type="button">SALVAR RASCUNHO</button>
            <button class="btn btn-danger" type="button">VOLTAR</button>
    </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</html>