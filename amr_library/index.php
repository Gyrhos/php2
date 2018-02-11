<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width" />
        <title>Registrar usuarios</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
<?php
    include 'sessionManager.php';
    session_start();
    if (!empty($_POST)){
        $user = $_POST['user'];
        $pass = $_POST['password'];
        $email = $_POST['email'];

        registerUser($user, $pass, $email);
?>
<div class="alert alert-success" role="alert">
    El usuario se ha creado registrado correctamente
</div>
<?php
    }
    if(!empty($_GET['error']) && $_GET['error'] == 'USER_NOT_FOUND'){
?>
<div class="alert alert-danger" role="alert">
    Usuario no encontrado.
</div>
<?php
    }
?>

        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Entrar</h5>
                            <form action="login.php" method="post">
                                <div class="form-group">
                                    <label for="user">User</label>
                                    <input type="text" class="form-control" id="sign-in-user" name="user" placeholder="Usuario"/>
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="sign-in-password" name="password" placeholder="Contraseña"/>
                                    <input type="submit" class="btn btn-primary" style="margin-top: 15px;"/>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-sm">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Registrarse</h5>
                            <form action="index.php" method="post">
                                <div class="form-group">
                                    <label for="user">User</label>
                                    <input type="text" class="form-control" id="register-user" name="user" placeholder="Usuario"/>
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="register-password" name="password" placeholder="Contraseña"/>
                                    <label for="email">email</label>
                                    <input type="email" class="form-control" id="register-email" name="email" placeholder="Email"/>
                                    <input type="submit" class="btn btn-primary" style="margin-top: 15px;"/>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
