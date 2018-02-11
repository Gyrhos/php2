<?php

function registerUser($user, $pass, $email){
    // He tenido que usar un atributo de sesión porque definiendo un array al inicio del script
    // cada vez que lo importabamos, estabamos sobrescribiendolo y no se mantenían los datos entre llamadas
    // además, para utilizar el array global dentro de una función había que usar referenciarlo como global $lista
    // dentro de la función para distinguirlo de una variable definida localmente a la función.

    if (empty($_SESSION['lista'])){
        $_SESSION['lista'] = array();
    }
    $usuario = array(
        'user' => $user,
        'pass' => $pass,
        'email' => $email
    );

    array_push($_SESSION['lista'], $usuario);

    var_dump($_SESSION['lista']);
}


function tryUser($user, $pass){
    $i=0;
    $found = false;
    $lista = $_SESSION['lista'];
    while ($i<count($lista) && !$found) {
        $candidate = $lista[$i];
        if ($candidate['user'] == $user && $candidate['pass'] == $pass){
            $found = true;
        }
        $i++;

    }

    return $found;
}


function showRegisteredUserList() {
    return $lista;
}

?>
