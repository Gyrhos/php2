<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<? php
include 'sesionManager.php';
session_start();
    
    
    if(!empty($_POST)){
        añadirUser($_POST['username'], $_POST['pass']);
    
    ?>
     <h3>Registrarse en esta web</h3>
    
    
    <form action="./index.php" method="post">
        
        <p><label for="">Nombre    </label>
           <input type="text" name="username"></p>
           <label for="">Contraseña</label>
           <input type="password" name="pass">
           <p><input type="submit" value="Registrarse"></p>
    </form>
    
    
    
</body>
</html>  
               
         
    <?php
    
    
    

    ?>
    