<?php
$lista=array();

añadirUser($user,$pass){
    $usuario = array(
    "user" => $user,
    'pass' => $pass,
    );
    
    array_push($lista, $usuario);
}


tryUser($user, $pass){

    
    $i=0;
    $found = false;
    while (i<lista.length || !found) {
        $candidate = $lista[i];
        if ($candidate['user'] == $user && $candidate['pass'] == $pass){
            found = true;
        }
        i++;
            
    }

    if (found){
        header('Location:./loggedIn.php');
    }
}



?>