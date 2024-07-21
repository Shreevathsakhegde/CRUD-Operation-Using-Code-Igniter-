<?php namespace App\Controllers;
     use App\Models\UserModel;
     use CodeIgniter\Controller;
    

     class User extends BaseController
     {
       
             public function index()
         {
             return view('home');
         }

         public function insert()
         {
             try {
                 $data = [
                     'name' => $this->request->getPost('name'),
                     'email' => $this->request->getPost('email'),
                     'address' => $this->request->getPost('address'),
                     'category' => $this->request->getPost('category')
                     
                 ];
         
                 $db = \Config\Database::connect();
                 $builder = $db->table('fullname');
                 $builder->insert($data);
         
                 // Optionally, you can check if the insertion was successful
                 if ($db->affectedRows() > 0) {
                     echo "Data inserted successfully!";
                 } else {
                     echo "No data inserted!";
                 }
             } catch (\Exception $e) {
                 // Handle any exceptions here, e.g., log the error message
                 log_message('error', $e->getMessage());
                 echo "An error occurred while inserting data.";
             }
         }
         
     }
     ?>