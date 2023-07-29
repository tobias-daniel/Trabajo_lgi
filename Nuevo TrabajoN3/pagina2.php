<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilosN2.css">
    <title>Pedidos-clientes</title>
</head>
<body>
    <header>
        <nav>
            <div id="encabezado">
                <h1>Violeta Indumentaria</h1>
                <a id="inicio" href="index.html"><h4>VOLVER AL MENÚ</h4></a>
            </div>
        </nav>
    </header>
    <main>
        <form action="" method="$_POST">
            <h3>Haga Su Pedido</h3>
                    Nombre
            <br><input type="text" name="nombre" placeholder="ingrese nombre">
            <br><br>Apellido
            <br><input type="text" name="apellido" placeholder="ingrese apellido">
            <br><br>DNI
            <br><input type="number" name="DNI" placeholder="N°-------">
            <br><br>Telefono
            <br><input type="number" name="telefono" placeholder="numero de telefono">
            <br><br>E-mail
            <br><input type="email" name="e-mail" placeholder="ingrese e-mail"><br>
            <br>Localidad:
                <br><select name="localidad">
                    <option value="">seleccione</option><option value="localidad">Apostoles</option>
                    <option value="localidad">Candelaria</option><option value="localidad">Cainguás</option>
                    <option value="localidad">Concentracion</option><option value="localidad">Capital</option>
                    <option value="localidad">El Dorado</option><option value="localidad">General Manuel Belgrano</option>
                    <option value="localidad">Guaraní</option><option value="localidad">Iguazú</option>
                    <option value="localidad">L.N.Alem</option><option value="localidad">L.General San Martin</option>
                    <option value="localidad">Montecarlo</option><option value="localidad">Oberá</option>
                    <option value="localidad">San Ignacio</option><option value="localidad">San Pedro</option>
                    <option value="localidad">San Javier</option><option value="localidad">Veinticinco de Mayo</option>
                </select>
            <br><br>Dirección
            <br><input type="text" name="direccion" placeholder="su dirección">
            <br><br>Fecha
            <br><input type="date" name="fecha_pedido">
            <br><br>Categoria

            <?php
            $var2Categoria = $_REQUEST['varCategoria'];

            $traer=mysqli_connect("localhost","root","","sistema_venta_lgi") or die ("error de coneccion");
            $mostrar=mysqli_query($traer,"select nombre_categoria from categoria where id_categoria = '$var2Categoria'")
            or die(mysqli_error($traer));
            
            $variable=mysqli_fetch_array($mostrar);
            ?>

            <br><input type="text" disabled name="categoria" value="<?php echo $variable['nombre_categoria'];?>">
            <br><br>Articulo
            <br><input type="text" disabled name="nombre_producto" value="<?php echo $_REQUEST['nombre_producto'];?>">
            <br><br>talle
            <br><input type="text" disabled name="talle" value="<?php echo $_REQUEST['talle'];?>">
            <br><br><input type="submit" value="ENVIAR">
        </form>

        <!-- <form action="" method="$_POST">
            <h3>Ver mi pedido</h3>
                    Nombre
            <br><input type="text" name="nombre" placeholder="ingrese nombre">
            <br><br>Apellido
            <br><input type="text" name="apellido" placeholder="ingrese apellido">
            <br><br>DNI
            <br><input type="number" name="DNI" placeholder="N°-------">
            <br><br>Telefono
            <br><input type="number" name="telefono" placeholder="numero de telefono">
            <br><br>E-mail
            <br><input type="email" name="e-mail" placeholder="ingrese e-mail">
            <br><br>Fecha de cuando se realizo el pedido
            <br><input type="date" name="fecha_pedido">
            <br><br>Articulo encargado
            <br><input type="text" name="nombre_producto" placeholder="descripcion">
            <br><br>Categoria
            <br><select name="nombre_categoria">
                <option value="">seleccione</option>
                <option value="nombre_categoria">Hombres</option>
                <option value="nombre_categoria">Mujeres</option>
                <option value="nombre_categoria">Niños</option>
            </select>
            <br><br><input type="submit" value="VER PEDIDO">
        </form>
        <form action="" method="$_POST">
            <h3>Cancelar Pedido</h3>
                    Nombre
            <br><input type="text" name="nombre" placeholder="ingrese nombre">
            <br><br>Apellido
            <br><input type="text" name="apellido" placeholder="ingrese apellido">
            <br><br>DNI
            <br><input type="text" name="DNI" placeholder="N°-------">
            <br><br>Telefono
            <br><input type="number" name="telefono" placeholder="numero de telefono">
            <br><br>E-mail
            <br><input type="email" name="e-mail" placeholder="ingrese e-mail">
            <br><br>Fecha de cuando se realizo el pedido
            <br><input type="date" name="fecha_pedido">
            <br><br>Articulo encargado
            <br><input type="text" name="nombre_producto" placeholder="descripcion">
            <br><br>Categoria
            <br><select name="nombre_categoria">
                <option value="">seleccione</option>
                <option value="nombre_categoria">Hombres</option>
                <option value="nombre_categoria">Mujeres</option>
                <option value="nombre_categoria">Niños</option>
            </select>
            <br><br><input type="submit" value="CANCELAR">
        </form> -->
    </main>
</body>
</html>