<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMISTRADOR</title>
</head>
<body>
    <?php
    $inicio=mysqli_connect("localhost","root","","sistema_venta_lgi") or die("error de conexion");

    mysqli_query($inicio,"insert into productos(fecha_ingreso,nombre_producto,precio_unitario,cantidad,id_talle,id_imagen,id_categoria)
    values ('$_REQUEST[fecha_ingreso]','$_REQUEST[nombre_producto]','$_REQUEST[precio_unitario]'
    ,'$_REQUEST[cantidad]','$_REQUEST[talle]','$_REQUEST[id_imagen]','$_REQUEST[id_categoria]')") or die ("problemas en el selct".
    mysqli_error($inicio));

    mysqli_close($inicio);
    ?>
    <h2>se registro</h2>
</body>
</html>