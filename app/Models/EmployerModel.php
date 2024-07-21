<?php
namespace App\Models;

use CodeIgniter\Model;

class EmployerModel extends Model
{
    protected $table = 'employers';
    protected $allowedFields = ['first_name', 'last_name', 'address', 'department','gender', 'age', 'favorite_movie'];
    
}

?>