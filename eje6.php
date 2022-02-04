<?php  

/* El programa debe solicitar un numero al usuario por formulario y el programa debe realizar la operación para identificar mediante un mensaje si es par o impar el numero ingresado.  */

    if (isset($_POST["btn_enviar"])) {
        
        $num = $_POST["num"];
        
        if (($num%2)==0) {
            echo "es un numero par";
        }else {
            echo "es un numero impar";
        }


    }


?>