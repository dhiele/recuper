<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="eje1.php" method="POST">
        <h3>Calculo de las horas extras pagadaas</h3>
        <label for="">Nombres: </label><br>
        <input type="text" name="nombres"><br>
        <label for="">Documento: </label><br>
        <input type="text" name="documento"><br>
        <label for="">Numero de horas trabajadas: </label><br>
        <input type="number" name="horas_trabajadas"><br>
        <label for="">Valor de la hora: </label><br>
        <input type="number" name="valor_hora"><br>

        <input type="submit" name="btn_enviar" value="Ejecutar">
    </form>
</body>

</html>