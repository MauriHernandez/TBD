<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <h1>4. Mostrar una tabla con el username, nombre completo del usuario, el email y una columna con el género (hombre/mujer) de todos los posts creados en el
año 2022.</h1>

    <table border="1" width="100%">
        <thead>
            <tr>
                <th>Nombre de Usuario</th>
                <th>Nombre Completo</th>
                <th>Teléfono</th>
                <th>Género</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($post as $row) : ?>
                <tr>
                    <td><?= $row['username']; ?></td>
                    <td><?= $row['concat(ui.name, " ", ui.lastname)']; ?></td>
                    <td><?= $row['website']; ?></td>
                    <td><?= $row['gender']; ?></td>
                    <td><?=$row['created_at'];?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
