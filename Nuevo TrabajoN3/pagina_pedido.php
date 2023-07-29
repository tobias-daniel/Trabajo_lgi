<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilosN2.css">
    <title>Document</title>
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
        </form>
    </main>
</body>
</html>