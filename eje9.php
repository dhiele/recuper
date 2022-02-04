<?php  
/* Leer tres números y determinar si la suma de cualquier pareja de ellos es igual al tercer número. Si se cumple esta condición escribir "Iguales", en caso contrario, escribir "Distintas". */
    if (isset($_POST["btn_enviar"])) {
        
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $num3 = $_POST["num3"];
        
        if ($num1+$num2=$num3 and $num1+$num3=$num3){
            echo "iguales";
        }else if($num2+$num3=$num3){
            echo "iguales";
        
        } else {
            echo "distintas";
        }
        

    }


?>