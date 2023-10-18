<?php

namespace App\Controllers;

class PostController extends BaseController
{

	public function ejercicio01()
	{
		$db = \Config\Database::connect();
		$posts = $db->query('select c.category, p.id, p.title, u.username, p.created_at from categories as c
		 right join posts as p on p.category = c.id 
		 left join users as u on u.id = p.autor 
		 where p.created_at between "2023/01/01" and "2023/12/31"')->getResultArray();

		$data = [
			'posts' => $posts
		];

		return view('posts/ejercicio01', $data);
	}



	public function ejercicio05()
	{
		// 5. Mostrar una tabla con los siguientes datos: cantidad total de usuarios registrados, cantidad total de posts, cantidad total de comentarios, cantidad total de categorias.

		$db = \Config\Database::connect();
		$totalUsers = $db->query('select count(*) as "totalUsuarios" from users')->getResultArray();

		$totalPosts = $db->query('select count(*) as "totalPublicaciones" from posts')->getResultArray();
		
		$totalComments = $db->query('select count(*) as "totalComentarios" from comments')->getResultArray();

		$totalCategories = $db->query('select count(*) as "totalCategorias" from categories')->getResultArray();

		$data = [
			'totalUsers'		=> $totalUsers,
			'totalPosts'		=> $totalPosts,
			'totalComments'		=> $totalComments,
			'totalCategories'	=> $totalCategories
		];

		return view('posts/ejercicio05', $data);
	}


	public function ejercicio02()
	{
		$db = \Config\Database::connect();

		$ultimaCategoria = $db->query('SELECT MAX(id) as ultimaCategoria FROM categories')->getRow()->ultimaCategoria;
		$consulta = $db->query("SELECT p.title AS 'Nombre del Post', 
		CONCAT(u.name, ' ', u.lastname) AS 'Nombre Completo del Autor', p.category AS 'Categoria'
			FROM posts AS p
			JOIN userinfo AS u ON u.id = p.autor
			WHERE p.category = ?", [$ultimaCategoria])->getResultArray();
	
		$data = [
			'consulta' => $consulta
		];
	
		return view('posts/ejercicio02', $data);
	}
	

public function ejercicio04(){
	$db = \Config\Database::connect();
$post = $db->query('select u.username, concat(ui.name, " ", ui.lastname), ui.website, ui.gender, p.created_at from posts as p
right join users as u on p.autor=u.id
left join userinfo as ui on u.id=ui.id
where p.created_at between "2022/01/01" and "2022/12/31"')->getResultArray();

	
		$data = [
			'post' => $post
		];

		return view('posts/ejercicio04', $data);

}
public function ejercicio10()
{
    $db = \Config\Database::connect();

    // Consulta para obtener el último post de mujeres menores de 30 años
    $consultaMujeres = $db->query("SELECT p.id AS 'ID del Post', p.title AS 'Título del Post', u.username AS 'Nombre de Usuario', ui.name AS 'Nombre', ui.lastname AS 'Apellido'
        FROM posts AS p
        JOIN users AS u ON p.autor = u.id
        JOIN userinfo AS ui ON u.id = ui.id
        WHERE ui.gender = 'F' AND TIMESTAMPDIFF(YEAR, ui.birthday, NOW()) < 30
        ORDER BY p.id DESC")->getResultArray();

    // Consulta para obtener el primer post de hombres mayores de 16 años
    $consultaHombres = $db->query("SELECT p.id AS 'ID del Post', p.title AS 'Título del Post', u.username AS 'Nombre de Usuario', ui.name AS 'Nombre', ui.lastname AS 'Apellido'
        FROM posts AS p
        JOIN users AS u ON p.autor = u.id
        JOIN userinfo AS ui ON u.id = ui.id
        WHERE ui.gender = 'M' AND TIMESTAMPDIFF(YEAR, ui.birthday, NOW()) > 16
        ORDER BY p.id ASC")->getResultArray();

    $data = [
        'consultaMujeres' => $consultaMujeres,
        'consultaHombres' => $consultaHombres
    ];

    return view('posts/ejercicio10', $data);
}


public function btn(){
	return view('posts/dump');
}


public function dump()
{
    $ruta = 'C:\\Users\\mcarl\\OneDrive\\Escritorio\\volcado\\';
    $nombre = 'respaldo.sql';
    $archivo = $ruta . $nombre;

    // Obtener la conexión a la base de datos
    $db = \Config\Database::connect();

    // Obtener el nombre de la base de datos desde la configuración
    $databaseName = $db->database;

    $comando = "mysqldump -u $db->username -p'$db->password' $databaseName > \"$archivo\"";
    exec($comando);

    return $this->response->download($archivo, null);
}


}
