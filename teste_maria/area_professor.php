<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Professor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<?php 

    include("../page_prontas_kauan/menu.php"); 

?>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <form>
            <div class="mb-3">

                <h1>Seja Bem-Vindo Professor(a)</h1>
                <h>Por aqui você irá encontrar...</h4>
            </div>

            <div class="container text-center">
                <div class="row align-items-end">
                    <div class="col">
                        <a class="btn btn-primary"  href="html.php" role="button">Atividades Semanais</a>
                    </div>
                    <div class="col">
                        <a class="btn btn-primary" href="css.php" role="button">Disciplinas</a>
                    </div>
                    <div class="col">
                        <a class="btn btn-primary" href="php.php" role="button">Plataformas de Apoio ao Ensino</a>
                    </div>
                    <div class="col">
                        <a class="btn btn-primary" href="java.php" role="button">Calendário Escolar</a>
                    </div>

                </div>
            </div>
        </form>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

</html>