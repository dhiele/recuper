<?php  
/*  A un trabajador le pagan su salario básico más las horas extras. Se debe calcular el valor de una hora extra a partir del salario devengado; Se debe tener en cuenta que una hora extra diurna tiene un 5% de aumento y una hora nocturna un 10% de incremento. El programa debe devolver el salario básico, el valor de horas diurnas, nocturnas, y el total devengado */

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