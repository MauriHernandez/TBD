<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
</head>
<body>
    <h1>10. En una tabla, mostrar el último post escrito por cada mujer menor de 30 años y el primer post escrito por cada hombre mayor de 16 años</h1>
    <table border="1" width="100%">
        <thead>
            <tr>
                <th>ID del Post</th>
                <th>Título del Post</th>
                <th>Nombre de Usuario</th>
                <th>Nombre</th>
                <th>Apellido</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($consultaMujeres as $row) : ?>
                <tr>
                    <td><?= $row['ID del Post']; ?></td>
                    <td><?= $row['Título del Post']; ?></td>
                    <td><?= $row['Nombre de Usuario']; ?></td>
                    <td><?= $row['Nombre']; ?></td>
                    <td><?= $row['Apellido']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <h1>Primeros Posts de Hombres Mayores de 16</h1>
    <table border="1" width="100%">
        <thead>
            <tr>
                <th>ID del Post</th>
                <th>Título del Post</th>
                <th>Nombre de Usuario</th>
                <th>Nombre</th>
                <th>Apellido</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($consultaHombres as $row) : ?>
                <tr>
                    <td><?= $row['ID del Post']; ?></td>
                    <td><?= $row['Título del Post']; ?></td>
                    <td><?= $row['Nombre de Usuario']; ?></td>
                    <td><?= $row['Nombre']; ?></td>
                    <td><?= $row['Apellido']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
