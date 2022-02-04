<?php  
/* Diseñar un script que calcule el valor total y los intereses que le cobran a un cliente por un préstamo teniendo en cuenta que por cada mes le cobran un interés del 5%, se debe solicitar el nombre del cliente, el valor del préstamo y el tiempo que tiene el préstamo.  
 */
    if (isset($_POST["btn_enviar"])) {
        
        $nombres = $_POST["nombres"];
        $prestamo = $_POST["prestamo"];
        $tiempo = $_POST["tiempo"];
        
        $intereses=$h;
        

        echo "<h2>"."nombres: ".$nombres. "</h2>";
        echo "<h2>"."prestamo: ".$prestamo. "</h2>";
        echo "<h2>"."tiempo: $ ".$tiempo. "</h2>";

    }


?>