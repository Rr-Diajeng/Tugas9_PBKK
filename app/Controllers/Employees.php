<?php

namespace App\Controllers;

use App\Models\EmployeeModel;

class Employees extends BaseController
{
    public function index()
    {
        $model = new EmployeeModel();
        $data['employees'] = $model->findAll();

        return view('employees/index', $data);
    }

    public function create()
    {
        return view('employees/create');
    }

    public function store()
    {
        $model = new EmployeeModel();

        $data = [
            'name' => $this->request->getPost('name'),
            'position' => $this->request->getPost('position'),
            'salary' => $this->request->getPost('salary'),
        ];

        $model->insert($data);

        return redirect()->to(base_url('employees'));
    }

    public function edit($id)
    {
        $model = new EmployeeModel();
        $data['employee'] = $model->find($id);

        return view('employees/edit', $data);
    }

    public function update($id)
    {
        $model = new EmployeeModel();

        $data = [
            'name' => $this->request->getPost('name'),
            'position' => $this->request->getPost('position'),
            'salary' => $this->request->getPost('salary'),
        ];

        $model->update($id, $data);

        return redirect()->to(base_url('employees'));
    }

    public function delete($id)
    {
        $model = new EmployeeModel();
        $model->delete($id);

        return redirect()->to(base_url('employees'));
    }
    // Tambah metode sesuai kebutuhan.
}