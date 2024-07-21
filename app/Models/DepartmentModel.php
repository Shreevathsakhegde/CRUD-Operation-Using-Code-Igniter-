<?php

namespace App\Models;

use CodeIgniter\Model;

class DepartmentModel extends Model
{
    protected $table = 'department'; // Replace 'departments' with the actual name of your department table.

    // Replace 'id' with the primary key of your department table.

    protected $allowedFields = ['fullname','shortname'];

    // Additional model methods can be added here for data manipulation.
}

