<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <h1>2. Mostrar una tabla con el nombre del post y el nombre completo del autor de la última categoría registrada en la base de datos.</h1>
    <table border="1" width="100%">
        <thead>
            <tr>
                <th>NOMBRE DEL POST</th>
                <th>NOMBRE COMPLETO DEL AUTOR</th>
                <th>ID CATEGORIA</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($consulta as $row) : ?>
                <tr>
                    <td><?= $row['Nombre del Post']; ?></td>
                    <td><?= $row['Nombre Completo del Autor']; ?></td>
                    <td><?=$row['Categoria'];?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
