<?php

namespace App\Controllers;

use App\Models\ProductosModel;

class StockController extends BaseController 
{
    public function index()
    {
        $productosModel = new ProductosModel();
        $productos = $productosModel->findAll();

        return view('stock/index', ['productos' => $productos]);
    }
    public function verDetalle($productoId) {
        $productosModel = new ProductosModel();
        $producto = $productosModel->find($productoId);
    
        return view('stock/detalle', ['producto' => $producto]);
    }
    

    public function actualizarStockForm($productoId) {
        // Cargar vista de formulario para actualizar stock
        return view('stock/form', ['productoId' => $productoId]);
    }

    public function actualizarStock($productoId) {
        $nuevoStock = $this->request->getPost('nuevoStock');

        $productosModel = new ProductosModel();
        $productosModel->update($productoId, ['stock' => $nuevoStock]);

        return redirect()->to(site_url('stock')); // Redirigir a la lista de productos
    }
}