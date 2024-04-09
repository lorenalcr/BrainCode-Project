<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Criar Tarefa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/style1.css">
  
</head>
<?php include("../page_prontas_kauan/menu.php"); ?>
<br>
<body class="background2">
  <div class="container2">
    <h1 class="text-center">Criar Tarefa</h1>
    <form>
      <div class="mb-3">
        <label for="titulo" class="form-label">Título da Tarefa</label>
        <input type="text" class="form-control form-control-lg" id="titulo" required>
      </div>
      <div class="mb-3">
        <label for="descricao" class="form-label">Descrição da Tarefa</label>
        <textarea class="form-control form-control-lg" id="descricao" rows="5"></textarea>
      </div>
      <div class="mb-3">
        <label for="turma" class="form-label">Turma</label>
        <select class="form-select form-select-lg" id="turma">
          <option value="turma1">Turma A</option>
          <option value="turma2">Turma B</option>
          <option value="turma3">Turma C</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="data-entrega" class="form-label">Data de Entrega</label>
        <input type="date" class="form-control form-control-lg" id="data-entrega" required>
      </div>
      <div class="d-grid gap-2">
        <button class="btn btn-primary" type="submit">Criar Tarefa</button>
        <button class="btn btn-primary" type="submit">Salvar Rascunho</button>
        <button class="btn btn-primary" type="submit">Voltar</button>
      </div>
      
    </form>
  </div>
  <br>
  <br>
  <?php include "footer2.php" ; ?>

  
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</html>
