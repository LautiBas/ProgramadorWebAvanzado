<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Productos</title>
</head>
<body>
    <h1>Productos desde vista!</h1>
        <table class="tabla">
            <thead>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Categoria</th>
                <th>Acción</th>
            </thead>
            <tbody>
                <?php foreach($productos as $producto) : ?>
                <tr>
                    <td><?php echo $producto['nombre']?></td>
                    <td><?php echo $producto['descripcion'] ?></td>
                    <td><?php echo $producto['precio'] ?></td>
                    <td><?php echo $producto['stock'] ?></td>
                    <td><?php echo $producto['categoria'] ?></td>
                    <td>
                    <a href="<?= site_url('stock/verDetalle/' . $producto['id']) ?>">Ver Detalles</a>
                    <a href="<?= site_url('stock/actualizarStock/' . $producto['id']) ?>">Actualizar Stock</a>
                    </td>
                </tr>
            </tbody>
            <?php endforeach; ?>
        </table>
</body>
</html>