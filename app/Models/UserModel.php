<?php namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model
{
     protected $table = 'fullname'; //table name
     protected $allowedFields= ['name','surname','email','address','category']; //column name of table
}
?>