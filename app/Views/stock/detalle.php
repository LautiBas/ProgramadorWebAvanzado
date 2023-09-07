<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Detalles de Producto</title>
</head>
<body>
    <h1>Detalles del producto</h1>
    <p> Nombre: <?= $producto ['nombre']?></p>
    <p> Descripcion: <?= $producto ['descripcion']?></p>
    <p> Precio: <?= $producto ['precio']?></p>
    <p> Stock: <?= $producto ['stock']?></p>
    <p> Categoria: <?= $producto ['categoria']?></p>
    <a href="<?= site_url('stock')?>">Volver a ver productos</a>
</body>
</html>