<?php  
/*  Dada la duración en minutos de una llamada calcular el costo, teniendo en cuenta:  
• De 1 a 5 minutos el costo es $ 50.  
• De 6 a 10 minutos el costo es de $40 
• De 11 a 20 minutos el costo es de $30 
• De 21 minutos en adelante el costo es de $25  */
    if (isset($_POST["btn_enviar"])) {
        
        $minuto = $_POST["minuto"];
        if ($minuto > 0 && $minuto <= 999999999) {
            if ($minuto <= 5) {
                echo "son $50";
            }
            else if ($minuto <= 10) {
                echo "son $40";
            }
            else if ($minuto <= 20) {
                echo "son $30";
            }
            
            else if ($minuto <= 10) {
                echo "son $25";
            }
        }
        else {
            echo "minuto erronea";
        }
    }
?>
