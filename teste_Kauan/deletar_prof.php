<?php
    include("../conexao.php");
    
    $sql_consultar = ("SELECT * FROM tabela_usuario");
    $retorno = $mysqli->query($sql_consultar);

    //var_dump($retorno);

    

    
    

?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar - Nomes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">

</head>

<body>

    <h1>Consultar-Nomes</h1>


    <div class="container">
        <table class="table">
            <thead>

                <tr>
                    <th scope="col">ID:</th>
                    <th scope="col">Nome do Professor(a):</th>
                    <th scope="col">Diciplina:</th>
                    <th scope="col">Email:</th>
                    <th scope="col">Endereço:</th>
                    <th scope="col">Telefone:</th>
                    <th scope="col">Senha:</th>
                    <th scope="col">Confirmar Senha:</th>
                    <th scope="col">Ações:</th>

                </tr>


                <?php

                    while($linha = $retorno->fetch_assoc()){
                        
                    ?>
                <tr>

                    <th scope="row">
                        <?php echo $linha['id_nome_prof']; ?>
                    </th>
                    
                    <td>
                        <?php echo $linha['nome_prof']; ?>
                    </td>

                    <td>
                        <?php echo $linha['diciplina']; ?>
                    </td>

                    <td>
                        <?php echo $linha['email']; ?>
                    </td>

                    <td>
                        <?php echo $linha['endereco']; ?>
                    </td>

                    <td>
                        <?php echo $linha['telefone']; ?>
                    </td>
                
                    <td>
                        <?php echo $linha['senha']; ?>
                    </td>

                    <td>
                        <?php echo $linha['confirmarsenha']; ?>
                    </td>
                    
                    <td>
                        <a class="btn btn-secondary" href="editar.php?id_nome_link=?id_nome_link=<?php echo $linha['id_nome_prof']; ?>">Editar</a>
                        <a class="btn btn-danger" href="editar.php">Deletar</a>
                    </td>
                   
                </tr>

                <?php

                    }

                    ?>


            </thead>
            <tbody>


            </tbody>

        </table>

        <div class="mb-3">
            <a href="cadastrar.php">
            <input class="btn btn-success" type="submit" value="Cadastrar">
            </a>
        </div>

    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

</html>