<?php  
/* Validar si dados dos números leídos del teclado, uno es divisor de otro. ( ejemplo ingrese el primer número: 20; ingrese el segundo número: 5; Respuesta el numero 5 si es divisor de 20)  */
    if (isset($_POST["btn_enviar"])) {
        
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        
        $n3 = $num1 / $num2;
        if($num1 % $num2 == 0){
            echo "el numero ".$num1."es divisor de".$num2;
        }else{
            echo "No es divisible";
}

    }


?>