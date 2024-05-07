<?php

namespace App\Models;

use CodeIgniter\Model;

class KatalogModel extends Model
{
    protected $table='katalog';
    protected $primaryKey='id';
    protected $useAutoIncrement= true;
    protected $allowedFields= ['id', 'namaproduk', 'bahan', 'harga','gambar'];
    
}
