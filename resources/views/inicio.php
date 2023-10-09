<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Hoja de trabajo</title>
    <link rel="stylesheet" href="mystyle.css"/>
</head>
<body>
    <h1>La tienda Gamer de Guatemala</h1>
    <p>Lo Mejor en Video Juegos</p>
    <nav>
        <a href="#">Inicio</a>
        <a href="#">Categorías</a>
        <a href="#">Contacto</a>
        <a href="#">Misión - Visión</a>
    </nav>
    <br/>

    <div>
        @section('content')
        @show
    </div>

    <?php
    // Arreglo con la información de los productos
    $productos = array(
        array("cantidad" => 4, "producto" => "PS5", "precio" => "Q7500", "imagen" => "nikes.jpg"),
        array("cantidad" => 4, "producto" => "XBOX Series X", "precio" => "Q6000", "imagen" => "camisa.jpg"),
        array("cantidad" => 6, "producto" => "Nintedo Switch Oled", "precio" => "Q4500", "imagen" => "jeans.jpg")
    );
    ?>

    <table>
        <tr>
            <th>Cantidad</th>
            <th>Producto</th>
            <th>Precio</th>
        </tr>
        <?php foreach ($productos as $producto) { ?>
            <tr>
                <td><?php echo $producto["cantidad"]; ?></td>
                <td>
                    <a href="producto.php?nombre=<?php echo urlencode($producto["producto"]); ?>">
                        <?php echo $producto["producto"]; ?>
                    </a>
                </td>
                <td><?php echo $producto["precio"]; ?></td>
            </tr>
        <?php } ?>
    </table>
.jpgnikes.jpg
    <?php
    // Inicio de sesión
    $usuario_autenticado = false;

    if (isset($_POST['username']) && isset($_POST['password'])) {
        // Credenciales 
        if ($_POST['username'] === 'usuario' && $_POST['password'] === 'contraseña') {
            $usuario_autenticado = true;
        }
    }

    if ($usuario_autenticado) {
        echo '<p>Bienvenido, Usuario</p>';
        echo '<a href="logout.php">Cerrar sesión</a>';
    } else {
        ?>
        <form method="post" action="">
            <label for="username">Usuario:</label>
            <input type="text" id="username" name="username">
            <br>
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password">
            <br>
            <input type="submit" value="Iniciar sesión">
        </form>
    <?php } ?>

    <div class="PS5">
        <img src="ps5.jpg" alt="PS5"/>
    </div>
    <a href="productos.php">Productos</a>
</body>
</html>