<?php 

namespace App\Models;

use CodeIgniter\Model;

class Store extends Model
{
    protected $DBGroup = 'default';

    protected $table      = 'store';
    protected $primaryKey = 'id';

    protected $returnType     = 'object';

    protected $allowedFields = ['nombre', 'marca', 'descripcion', 'precio', 'fecha_ingreso'];

    protected $useTimestamps = false;

    protected $validationRules    = [];

    protected $validationMessages = [];
    
    protected $skipValidation     = false;
}
