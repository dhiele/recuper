<?php  

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