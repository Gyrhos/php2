<?php
    include 'sessionManager.php';
    session_start();
    if (!empty($_POST)){
        $user = $_POST['user'];
        $pass = $_POST['password'];
        $found = tryUser($user, $pass);

        if ($found){
            $_SESSION['user'] = array('user' => $user, 'password' => $pass);
            header('Location:./library.php');
        } else {
            header('location:index.php?error=USER_NOT_FOUND');
        }
    }
?>
