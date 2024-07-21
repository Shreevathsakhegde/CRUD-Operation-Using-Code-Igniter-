<?php
namespace App\Controllers;
use App\Models\DepartmentModel;




class DepartmentController extends BaseController{

    public function department_info()
{

    $employerModel = new DepartmentModel();
    $data['department'] = $employerModel->findAll();

    return view('department_info', $data);
}
}

?>
