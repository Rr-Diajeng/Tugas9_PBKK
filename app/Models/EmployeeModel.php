<?php

namespace App\Models;

use CodeIgniter\Model;

class EmployeeModel extends Model
{
    protected $table = 'employees';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'position', 'salary'];

    public function getEmployee($id)
    {
        return $this->asArray()->where(['id' => $id])->first();
    }

    public function addEmployee($data)
    {
        return $this->insert($data);
    }

    public function updateEmployee($id, $data)
    {
        return $this->update($id, $data);
    }

    public function deleteEmployee($id)
    {
        return $this->delete($id);
    }
}
