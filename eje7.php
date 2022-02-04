<?php  

    if (isset($_POST["btn_enviar"])) {
        
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $num3 = $_POST["num3"];
        
        if ($num1>$num2){ 
            if ($num1>$num3) {
            echo "el numero mayor es: ".$num1."<br/>";
            }else{
                echo "el numero mayor es: ".$num3."<br/>";
            }
            }else{
                if($num2>$num3){
                    echo "el numero mayor es: ".$num2."<br/>";
                }else{
                    echo "el numero mayor es: ".$num3."<br/>";
                }
            }
            
        }
    


?>