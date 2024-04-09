<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Notas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">
<h1>Consultar Notas</h1>
<div class="container">
        <label for="disciplina-select">Escolha a disciplina:</label>
        <select id="disciplina-select">
            <option value="html">Html</option>
            <option value="css">CSS</option>
            <option value="php">PHP</option>
            <option value="php">PHP</option>
        </select>
        <br>
        <br>
        <div id="html" class="notas" style="display: block;">
            <h2>Disciplina: Html</h2>
            <table class="table table-hover table table-bordered">
                <thead>
                    <tr>
                        <th>Atividade</th>
                        <th>Nota</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Prova 1</td>
                        <td>30</td>
                    </tr>
                    <tr>
                        <td>Prova 2</td>
                        <td>20</td>
                    </tr>
                    <tr>
                        <td>Trabalho em Grupo</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td>Participação em Sala</td>
                        <td>10</td>
                    </tr>
                </tbody>
            </table>
        </div>
 
        <div id="css" class="notas" style="display: none;">
            <h2>Disciplina: CSS</h2>
            <table class="table table-hover table table-bordered">
                <thead>
                    <tr>
                        <th>Atividade</th>
                        <th>Nota</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                        <td>Prova 1</td>
                        <td>45</td>
                    </tr>
                    <tr>
                        <td>Prova 2</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td>Trabalho em Grupo</td>
                        <td>15</td>
                    </tr>
                    <tr>
                        <td>Participação em Sala</td>
                        <td>10</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div id="php" class="notas" style="display: none;">
            <h2>Disciplina: PHP</h2>
            <table class="table table-hover table table-bordered">
                <thead>
                    <tr>
                        <th>Atividade</th>
                        <th>Nota</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                        <td>Prova 1</td>
                        <td>25</td>
                    </tr>
                    <tr>
                        <td>Prova 2</td>
                        <td>40</td>
                    </tr>
                    <tr>
                        <td>Trabalho em Grupo</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td>Participação em Sala</td>
                        <td>09</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <script>
        document.getElementById('disciplina-select').addEventListener('change', function() {
            var disciplina = this.value;
            var notas = document.querySelectorAll('.notas');
            notas.forEach(function(nota) {
                if (nota.id === disciplina) {
                    nota.style.display = 'block';
                } else {
                    nota.style.display = 'none';
                }
            });
        });
    </script>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</html>