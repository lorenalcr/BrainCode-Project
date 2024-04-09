<?php
    
    if (!isset($_SESSION)) {
        session_start();

        /*
       $aluno_logado= $_SESSION['id_aluno'] Depois
       $prof_logado= $_SESSION['id_nome_prof']
       $ADM_logado= $_SESSION['id_ADM']
       
       */
    }
    
    /* $id = $_SESSION['id_login_adm']; */


    
        /*Para sair da sessão utilizar esse código:
    <?php
           if(!isset($_SESSION)) {
            session_start();
        }
     
        session_destroy();
     
        header("Location: ../page/index1.php");
    ?>

*/
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu-Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
            <img src="../img/cerebro2.png" alt="Logo" width="50" height="55" >
     BrainCode
              
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
                aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h2 class="offcanvas-title" id="offcanvasDarkNavbarLabel">BrainCode</h2>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <!-- ########## ########## Começa aluno ########## ##########-->
                    <?php
                        if(isset($aluno_logado)){
                    ?>
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="">
                                <h5>Aluno</h5>
                            </a>
                            <a class="nav-link" href="Home.php">
                                <h5>Home</h5>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <h5>Conteúdos</h5>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="html.php">HTML</a></li>
                                <li><a class="dropdown-item" href="css.php">CSS</a></li>
                                <li><a class="dropdown-item" href="php.php">PHP</a></li>
                                <li><a class="dropdown-item" href="java.php">JAVA</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Outra coisa aqui</a></li>
                            </ul>
                        <li class="nav-item">
                            <a class="nav-link" href="perfil_aluno.php">
                                <h5>Perfil</h5>
                            </a>
                        </li>
                        <li class="nav-item">
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <a class="nav-link" href="perfil_aluno.php">
                            <h5>Tarefas Pendentes</h5>
                        </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Notificações.php">
                                <h5>Notificações</h5>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sair_conta.php">
                                <h5>Sair da Conta</h5>
                            </a>
                        </li>
                    </ul>
                    <?php
                        }
                    ?>
                    <!-- ########## ########## Fim do aluno ########## ##########-->

                    <!-- ########## ########## Começa Professor ########## ##########-->
                    <?php
                        if(isset($prof_logado)){
                    ?>
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="">
                                <h5>Professor</h5>
                            </a>
                            <a class="nav-link" href="perfil_aluno.php">
                                <h5>Home</h5>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="perfil_prof.php">
                                <h5>Perfil</h5>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="perfil_aluno.php">
                                <h5>Turmas</h5>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sair_conta.php">
                                <h5>Sair da Conta</h5>
                            </a>
                        </li>
                    </ul>
                    <?php
                        }
                    ?>
                     <!-- ########## ########## Fim do Professor ########## ##########-->

                     <!-- ########## ########## Começa ADM ########## ##########-->
                     <?php
                        if(isset($ADM_logado)){
                    ?>
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="">
                                <h5>ADM</h5>
                            </a>
                            <a class="nav-link" href="perfil_aluno.php">
                                <h5>Home</h5>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="perfil_prof.php">
                                <h5>Gerenciar Professores</h5>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="perfil_prof.php">
                                <h5>Gerenciar Alunos</h5>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="perfil_prof.php">
                                <h5>Cadastrar Matéria</h5>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="perfil_aluno.php">
                                <h5>Turmas</h5>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sair_conta.php">
                                <h5>Sair da Conta</h5>
                            </a>
                        </li>
                            <!-- ########## ########## Fim do Professor ########## ##########-->
                    </ul>
                    <?php
                        }
                    ?>
                            <!-- ########## ########## Fim do ADM ########## ##########-->
                            
                            <!-- ########## ########## Começa Página Inicial ########## ##########-->
                    
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item dropdown">
                            <a class="nav-link active" aria-current="page" href="">
                                <h4>Página Inicial</h4>
                            </a>
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <h5>Sou Aluno</h5>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="login.php">Login</a></li>
                                <li><a class="dropdown-item" href="cadastrar_aluno.php">Cadastrar-se</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <h5>Sou Porfessor</h5>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="login.php">Login</a></li>
                                <li><a class="dropdown-item" href="cadastro_professor.php">Cadastrar-se</a></li>
                            </ul>
                        </li>
                    </ul>
                    
                </div>
            </div>
        </div>
    </nav>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

</html>