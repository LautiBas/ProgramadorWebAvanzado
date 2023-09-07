<?php

namespace App\Controllers;

class Productos extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect();
        $query = $db->query("SELECT codigo, nombre, stock FROM stock_productos");
        $resultado = $query->getResult();
        $data = ['titulo' => 'Catalogo de 
        productos', 'productos' => $resultado];

        return view('productos', $data);
        //echo "productos";
    }
    public function show($id)
    {
        echo '<h2> Mostrar Productos $id</h2>';
    }
    public function cat($categoria, $id)
    {
        $data['categoria'] = $categoria;
        $data['categoria'] = $categoria;

        return view('productos, $data');
    }
}