<?php  

    if (isset($_POST["btn_enviar"])) {
        
        $filas = $_POST["filas"];
        $columnas = $_POST["columnas"];
        $i; 
        $j;
        
        $res=$filas*$columnas;

        document.write("<table border>");

        for ($i = 0; $i < $filas; $i++) {
            //EN CADA FILA ESCRIBIMOS UN <tr> PARA COMENZAR LA FILA
            document.write("<tr>");
            //BUCLE DESDE 0 HASTA EL NÚMERO DE COLUMNAS
            for ($j = 0; $j < $columnas; $j++) {
                //EN CADA UNA ESCRIBIMOS UN <td> PARA COMENZAR UNA CELDA
                document.write("<td>");
                //LUEGO ESCRIBIMOS EL VALOR DE res
                document.write($res);
                //LE RESTAMOS 1 A res
                $res--;
                //Y ESCRIBIMOS UN </td> PARA CERRAR LA CELDA
                document.write("</td>");
            }
            //ESCRIBIMOS UN </tr> PORQUE SE TERMINÓ LA FILA
            document.write("</tr>");
        }
        //Y POR ÚLTIMO CERRAMOS LA TABLA CON </table>
        document.write("</table>");
       

    }


?>