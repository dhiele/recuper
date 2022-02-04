<?php  

/* Diseñar un programa que pida tres notas y el nombre del estudiante y calcule su definitiva, también debe solicitar el año de nacimiento y calcula la edad del estudiante. El algoritmo debe sacar El nombre la definitiva y su edad.  */

    if (isset($_POST["btn_enviar"])) {
        
        $nota1 = $_POST["nota1"];
        $nota2 = $_POST["nota2"];
        $nota3 = $_POST["nota3"];

        $nombre = $_POST["nombre"];
        $edad = $_POST["edad"];
        
        $promedio=($nota1+$nota2+$nota3)/3;

        echo "Nombre: ".$nombre. '<br/>';
        echo "El promedio de sus notas es: ".$promedio. '<br/>';
        echo "Edad: ".$edad. '<br/>';
        

    }


?>
