<?php 
    session_start();
    //print_r($_SESSION);
    if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];
?>
<?php 
    //echo "<h1>$logado</u>"
?> 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AcademiaG5</title>
    <script src="https://kit.fontawesome.com/c71e590723.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <header>
        <div class="menu-content">
            <h1 class="logo">Academia<span>G5</span></h1>
            <nav class="header-menu">
               <ul class="list-itens">
                <li><a href="#">home</a></li>
                <li><a href="#">serviços</a></li>
                <li><a href="#">aulas</a></li>
                <li><a href="#">agenda</a></li>

                <li>
                    <a href="#">perfil</a>
                    <ul class="dropdown">
                        <li><a href="#">perfil1</a>
                        <li><a href="#">perfil2</a>
                        <li><a href="#">perfil3</a>
                    </ul>
            
                </li>

                <li><a href="sair.php">sair</a></li>
                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
               </ul> 
            </nav>
        </div>
    </header>
    <main>
        <div class="main-content">
            <h1 class="primary-text">A boa orientação faz a diferença!</h1>
            <h2 class="second-text">Se matricule agora e mude de vida</h2>
            <div class="btns">
                <a href="planos.html"><button class="btn-exp">Conheça nossos planos</button></a>
                <button class="btn-personal">contactar personal trainer</button>
            </div>
        </div>
    </main>
</body>
</html>