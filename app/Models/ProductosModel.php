<?php 
namespace App\Models;

use CodeIgniter\Model;

class ProductosModel extends Model {
    protected $table = 'productos';
    
    protected $allowedFields = ['nombre', 'descripcion', 'precio', 'stock', 'categoria'];
}
