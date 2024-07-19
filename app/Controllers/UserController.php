<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

use App\Models\UserModel;
use App\Models\RoleModel;

class UserController extends BaseController
{
    public function index()
    {
        $model = new UserModel();
        $data['users'] = $model->findAll();
        return view('users/index', $data);
    }

    public function create()
    {
        $roleModel = new RoleModel();
        $data['roles'] = $roleModel->where('role_name', 'dosen')->first();
        return view('users/create', $data);
    }

    public function store()
    {
        $model = new UserModel();
        $data = [
            'username' => $this->request->getVar('username'),
            'password' => $this->request->getVar('password'),
            'role_id' => $this->request->getVar('role_id')
        ];
        $model->save($data);
        return redirect()->to('/users');
    }

    public function edit($id)
    {
        $model = new UserModel();
        $roleModel = new RoleModel();
        $data['user'] = $model->find($id);
        $data['roles'] = $roleModel->where('role_name', 'dosen')->first();
        return view('users/edit', $data);
    }

    public function update($id)
    {
        $model = new UserModel();
        $data = [
            'username' => $this->request->getVar('username'),
            'password' => $this->request->getVar('password'),
            'role_id' => $this->request->getVar('role_id')
        ];
        $model->update($id, $data);
        return redirect()->to('/users');
    }

    public function delete($id)
    {
        $model = new UserModel();
        $model->delete($id);
        return redirect()->to('/users');
    }
}
