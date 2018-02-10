<!DOCTYPE html>
<?php
session_start();

    $_SESSION['username'] = $_POST['username'];
    $_SESSION['pass'] = $_POST['pass'];

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login page</title>
</head>
<body>
    <h1 align="center">Bienvenido</h1>
    <h3>Reserva el titulo que desees</h3>
    
    
    <form action="./loggedIn.php">
        <p><label for="titulo">Elige tu titulo</label>
        <input type="text" value="reservar"></p>
    </form>
    
    <?php
        $_SESSION['titulos'] = array();
            array_push($_SESSION['titulos'], $_POST['titulo']);  
            ?>    
    
    <div>
        <h2>Objetos reservados</h2>
        <p>
            <?php
            print_r($_SESSION['titulos']);
            ?>
        </p>
    </div>
    
</body>
</html>