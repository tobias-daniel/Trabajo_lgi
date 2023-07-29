<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilosN3.css">
    <title>Stock</title>
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
    <?php
    $conectar=mysqli_connect("localhost","root","","sistema_venta_lgi") or die("problemas de error");

    $registro=mysqli_query($conectar,"select * from productos 
    inner join imagen on productos.id_imagen = imagen.id_imagen") or die (mysqli_error($conectar));

    while($reg=mysqli_fetch_array($registro)){
        ?>
        <main>
            <div>
            <form action="pagina2.php" method="POST">
                <h3 class="ropas"><?php echo $reg['nombre_producto'];?></h3>
                <img src="<?php echo $reg['descripcion_imagen'];?>" width="300px" height="300px" alt="jogger hombre">
                <h4 class="ropas"><?php echo"precio: " .$reg['precio_unitario'];?></h4>
                <input type="hidden" name="id_producto" value="<?php echo $reg['id_producto'];?>">
                <input type="hidden" name="varCategoria" value="<?php echo $reg['id_categoria'];?>">
                <input type="hidden" name="nombre_producto" value="<?php echo $reg['nombre_producto'];?>">
                <input type="hidden" name="talle" value="<?php switch($reg['id_talle']){
                    case 1;
                        echo "S";
                        break;
                    case 2;
                        echo "M";
                        break;
                    case 3;
                        echo "X";
                        break;
                    case 4;
                        echo "L";
                        break;
                    case 5;
                        echo "XL";
                        break;
                    case 6;
                        echo "XXL";
                        break;
                    default:
                        echo "no se encontro el talle";
                }
                    ?>">
                <input class="pedido" type="submit" value="LLEVAR">
            </form>
            </div>
        </main>
    <?php
    }
    ?>

    <!-- <main>
        <div class="cuadro">
            <section>
                <h3 class="ropas">Jogger de Hombre</h3>
                <img src="https://d3ugyf2ht6aenh.cloudfront.net/stores/001/193/991/products/1g7a53631-a18eeb3c1bbc6c617e16606728718561-640-0.webp" width="300px" height="300px" alt="jogger hombre">
                <h4 class="ropas">precio: $3000</h4>
                <a href="pagina2.html" class="pedido">ANOTAR</a>
            </section>
            <section>
                <h3 class="ropas">Chomba Lacoste</h3>
                <img src="https://http2.mlstatic.com/D_NQ_NP_832045-MLA50464369764_062022-O.webp" width="300px" height="300px" alt="chomba lacoste">
                <h4 class="ropas">precio: $3500</h4>
                <a href="pagina2.html" class="pedido">ANOTAR</a>
            </section>
            <section>
                <h3 class="ropas">Remera</h3>
                <img src="https://deliverind.com.ar/wp-content/uploads/2021/09/REMERA-OVERSIZE-22-X-3-02-scaled.jpg" width="300px" height="300px" alt="remera">
                <h4 class="ropas">precio: $2800</h4>
                <a href="pagina2.html" class="pedido">ANOTAR</a>
            </section>
        </div>
        <div class="cuadro">
            <section>
                <h3 class="ropas">Jeans de Mujer</h3>
                <img src="https://media.vogue.mx/photos/5e9f2b3477a8a9000828074d/2:3/w_2560%2Cc_limit/John%2520John%2520Lab.jpg" width="300px" height="300px" alt="jeans de mujer">
                <h4 class="ropas">precio: $4000</h4>
                <a href="pagina2.html" class="pedido">ANOTAR</a>
            </section>
            <section>
                <h3 class="ropas">Jeans de hombre</h3>
                <img src="https://d3ugyf2ht6aenh.cloudfront.net/stores/001/343/531/products/71q-1-8b466568072ba93ad716462486592643-640-0.webp" alt="jeans" width="300px" height="300px">
                <h4 class="ropas">precio: $3300</h4>
                <a href="pagina2.html" class="pedido">ANOTAR</a>
            </section>
            <section>
                <h3 class="ropas">Bermuda Clasica</h3>
                <img src="https://d368r8jqz0fwvm.cloudfront.net/33208-product_lg/bermuda-de-hombre-geralt.jpg" width="300px" height="300px" alt="bermudas">
                <h4 class="ropas">precio: $3400</h4>
                <a href="pagina2.html" class="pedido">ANOTAR</a>
            </section>
        </div>
        <div class="cuadro">
            <section>
                <h3 class="ropas">Pollera engomada</h3>
                <img src="https://d2r9epyceweg5n.cloudfront.net/stores/001/677/554/products/whatsapp-image-2022-02-16-at-21-04-571-3c7845a9cb7877e2a816455349655795-240-0.jpeg" width="300px" height="300px" alt="pollera negra">
                <h4 class="ropas">precio: $4600</h4>
                <a href="pagina2.html" class="pedido">ANOTAR</a>
            </section>
            <section>
                <h3 class="ropas">Vestido de verano</h3>
                <img src="https://m.media-amazon.com/images/I/61nUzO6JIxL._AC_UF894,1000_QL80_.jpg" alt="vestido celeste" width="300px" height="300px">
                <h4 class="ropas">precio: $4600</h4>
                <a href="pagina2.html" class="pedido">ANOTAR</a>
            </section>
            <section>
                <h3 class="ropas">Camisa con diseño</h3>
                <img src="https://m.media-amazon.com/images/I/71U1UkU1rOL._AC_UY1100_.jpg" width="300px" height="300px" alt="camisa de hombre">
                <h4 class="ropas">precio: $3400</h4>
                <a href="pagina2.html" class="pedido">ANOTAR</a>
            </section>
    </main> -->
</body>
</html>