<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Databasebackup extends Controller
{
    public function index()
    {
        // ...
    }

    public function dump()
    {
        $ruta = 'C:\s\Users\\mcarl\\OneDrive\\Escritorio\\volcado\\';

        $nombre_archivo = 'respaldo.sql';
        $archivo = $ruta . $nombre_archivo;

        $comando = "mysqldump -u root -p --databases blog --routines > \"$archivo\"";
        exec($comando);

        $this->response->download($archivo, null);
    }
}
