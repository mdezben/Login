<?php
    if($_SERVER['REQUEST_METHOD']=="POST"){
        
        $usuario="";
        $contraseña="";
        $edad="";

        $usuario=!empty($_POST['user']) ? $_POST['user'] : "vacio";
        $contraseña=!empty($_POST['pass']) ? $_POST['pass'] : "vacio";
        $edad=!empty($_POST['edad']) ? $_POST['edad'] : "vacio";

        if($usuario=="vacio" || $contraseña=="vacio" || $edad=="vacio"){
            echo "Existen campos no valido<br>";
        }
        if($usuario!=="luis" || $contraseña!=="mendoza"){
            echo "El usuario o contraseña son incorrectos<br>";
        }
        if($edad<18){
            echo "Eres menor de edad,no puedes ingresar<br>";
        }
        else{
            echo "Registro exitoso ".$usuario. "<br> Explora este sitio<br>";
        }

    }else{
        echo "Algo no esta del todo bien ". $_SERVER['REQUEST_METHOD'];
    }
    
?>