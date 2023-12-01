<?php

// app/Models/AdminModel.php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'admins';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'password'];

    public function getAdmin($id)
    {
        return $this->asArray()->where(['id' => $id])->first();
    }

    public function getAdminByUsername($username)
    {
        return $this->asArray()->where(['username' => $username])->first();
    }
}


