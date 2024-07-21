<?php

namespace App\Controllers;


use App\Models\DepartmentModel;

class Department extends BaseController
{
    public function index()
    {
        $departmentModel = new DepartmentModel();
        
       

       
        $data =  [
            'fullname' => $this->request->getPost('fullname'),
            'shortname' => $this->request->getPost('shortname'),
            
    ];
            // Insert data into the 'departments' table using the model
          
        
         
            

        $data['department'] = $departmentModel->findAll();

        return view('department', $data);
    }
}
?>
