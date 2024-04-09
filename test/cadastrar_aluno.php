<?php
include("../test/conexao.php");

$mensagem = ''; // Inicializa a variável de mensagem

if(isset($_POST['bt_email'])){
  $user = $_POST['bt_user'];
  $email = $_POST['bt_email'];
  $senha = $_POST['bt_senha'];    
  $confirmarSenha = $_POST['bt_confirmar'];
  $numero= $_POST['bt_numero'];

  // Verificar se as senhas são iguais
  if($senha === $confirmarSenha){
    // Se as senhas coincidem, insere os dados no banco
    if($mysqli->query("INSERT INTO tabela_aluno (nome_aluno, email, senha, nome_mae) values('$user', '$email', '$senha', '$numero')")){
      if($mysqli->affected_rows > 0){
        // Sucesso na inserção
        $mensagem = "<script>alert('Cadastro realizado com sucesso!'); window.location.href='cadastrar_aluno.php';</script>";
      } else {
        // Falha na inserção
        $mensagem = "<script>alert('Erro ao realizar o cadastro!'); window.location.href='cadastrar_aluno.php';</script>";
      }
    } else {
      // Erro na query
      $mensagem = "<script>alert('Erro ao realizar o cadastro: " . $mysqli->error . "'); window.location.href='cadastrar_aluno.php';</script>";
    }
  } else {
    // Se as senhas não coincidem, exibe uma mensagem de erro
    $mensagem = "<script>alert('As senhas não coincidem!'); window.location.href='cadastrar_aluno.php';</script>";
  }
  echo $mensagem; // Exibe a mensagem adequada
}
?>


<!DOCTYPE html>
<html lang="pt-br">
 
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
  <title>Cadastrar - aluno</title>
=======
  <title>Cadastro Aluno</title>
>>>>>>> main
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style1.css">
</head>
 
<body class="background">
<img src="../img/logo.png" id="cerebro1" alt="Logo do Cérebro">
<br>
<br>
  <div class="container">
  <h2 class="text-center">Faça o seu cadastro Aluno:</h2>
 
    <form action="" method="post">
      <div class="mb-3">
          <label class="form-label">Nome Completo:</label>
          <input type="text" class="form-control" name="bt_user">
      </div>
      <div class="mb-3">
        <label class="form-label">Email:</label>
        <input type="email" class="form-control" id="exampleInputEmail1" name="bt_email" required>        
      </div> 
      <div class="mb-3">
        <label class="form-label">Número da sua mãe (Para recuperação de conta)</label>
        <input type="text" class="form-control" name="bt_numero" required>
      </div>     
      <div class="mb-3">
        <label class="form-label">Senha:</label>
        <input type="password" class="form-control" name="bt_senha" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Confirmar senha:</label>
        <input type="password" class="form-control" name="bt_confirmar" required>
<<<<<<< HEAD
      </div>      
    </div class="container text-center">
            <!-- Botão de confirmação -->
            <input type="submit" class="btn btn-success" name="confirmar" value="Confirmar">
           
=======
      </div>
      <input type="submit" class="btn btn-primary">
      
      <a class="btn btn-dark" href="login.php">Ir para login</a>
      <a class="btn btn-secondary" href="index.php">Voltar</a>
>>>>>>> main
    </form>
    </div>
    </div>
  </div>
  <br>
  <br>
  <?php include("footer.php"); ?>


 
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
 
</html>