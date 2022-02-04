<?php  
/* Sumar los números enteros solicitando al usuario el número hasta el que se desea sumar; validar que el número máximo a ingresar sea 250, ej: Digite los números a sumar: 7 -> Sumara los números 1,2,3,4,5,6,7 = Respuesta=> 28  */
    if (isset($_POST["btn_enviar"])) {
        
        $nombres = $_POST["nombres"];
        $documento = $_POST["documento"];
        $horas_trabajadas = $_POST["horas_trabajadas"];
        $valor_hora = $_POST["valor_hora"];
        
        $salario=$horas_trabajadas*$valor_hora;

        echo "<h2>"."nombre: ".$nombres. "</h2>";
        echo "<h2>"."documento: ".$documento. "</h2>";
        echo "<h2>"."salario devengado: $ ".$salario. "</h2>";

    }


?>