<?php
namespace App\Controllers;

use App\Models\EmployerModel;



class EmployerController extends BaseController
{
    public function index()
    {

        $employerModel = new EmployerModel();
        $data['employers'] = $employerModel->findAll();

        return view('index', $data);
    }

    public function store()
    {
        $employerModel = new EmployerModel();
    
        $data = [
            'first_name' => $this->request->getPost('first_name'),
            'last_name' => $this->request->getPost('last_name'),
            'address' => $this->request->getPost('address'),
            'department' => $this->request->getPost('department'),
            'gender' => $this->request->getPost('gender'),
        ];
    
        // Check the selected gender and add the corresponding information to the data array
        if ($data['gender'] === 'male') {
            $data['age'] = $this->request->getPost('age');
        } elseif ($data['gender'] === 'female') {
            $data['favorite_movie'] = $this->request->getPost('favorite_movie');
        }
    
        if ($employerModel->insert($data)) {
            return redirect()->to('/employers')->with('success', 'Employer added successfully.');
        } else {
            return redirect()->back()->withInput()->with('error', 'Failed to add employer.');
        }
    }
    
    public function edit($id)
    {
        // Load the employer data by ID from the database
        $employerModel = new EmployerModel();
        $data['employer'] = $employerModel->find($id);
    
        // Load a view for editing the employer's information
        return view('edit', $data);
    }
    public function update($id)
{
    // Load the Form Helper
    helper('form');

    // Retrieve and validate the updated employer data from a form submission
    $rules = [
        'first_name' => 'required',
        'last_name' => 'required',
        'address' => 'required',
        'department' => 'required',
        'gender' => 'required'
        // Add more validation rules as needed
    ];

    if (!$this->validate($rules)) {
        // Validation failed, redirect back to the edit form with error messages
        return redirect()->to("/employers/edit/{$id}")->withInput()->with('errors', service('validation')->getErrors());
    }

    // Update the employer's data in the database using the model
    $employerModel = new EmployerModel();
    $data = [
        'first_name' => $this->request->getPost('first_name'),
        'last_name' => $this->request->getPost('last_name'),
        'address' => $this->request->getPost('address'),
        'department' => $this->request->getPost('department'),
        'gender' => $this->request->getPost('gender')

        // Include additional fields as needed
    ];

    if ($employerModel->update($id, $data)) {
        // Update successful, redirect back to the employer list with a success message
        return redirect()->to('/employers')->with('success', 'Employer updated successfully.');
    } else {
        // Update failed, redirect back to the edit form with an error message
        return redirect()->to("/employers/edit/{$id}")->withInput()->with('error', 'Failed to update employer.');
    }
}

    
public function delete($id)
{
    $employerModel = new EmployerModel();

    if ($employerModel->delete($id)) {
        return redirect()->to('/employers')->with('success', 'Employer deleted successfully.');
    } else {
        return redirect()->to('/employers')->with('error', 'Failed to delete employer.');
    }
}
// EmployerController.php



}

?>