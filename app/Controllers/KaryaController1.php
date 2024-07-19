<?php

namespace App\Controllers;

use App\Models\KaryaModel;
use CodeIgniter\Controller;

class KaryaController extends BaseController
{
    public function index()
    {
        $model = new KaryaModel();
        $data['karya'] = $model->findAll();
        return view('karya/index', $data);
    }

    public function create()
    {
        return view('karya/create');
    }

    public function store()
    {
        $model = new KaryaModel();
        $data = [
            'user_id' => session()->get('id'),
            'title' => $this->request->getVar('title'),
            'description' => $this->request->getVar('description'),
            'file_path' => $this->request->getVar('file_path'),
            'tahun' => $this->request->getVar('tahun'),
        ];
        $model->save($data);
        return redirect()->to('/karya');
    }

    public function edit($id)
    {
        $model = new KaryaModel();
        $data['karya'] = $model->find($id);
        return view('karya/edit', $data);
    }

    public function update($id)
    {
        $model = new KaryaModel();
        $data = [
            'title' => $this->request->getVar('title'),
            'description' => $this->request->getVar('description'),
            'file_path' => $this->request->getVar('file_path'),
        ];
        $model->update($id, $data);
        return redirect()->to('/karya');
    }

    public function delete($id)
    {
        $model = new KaryaModel();
        $model->delete($id);
        return redirect()->to('/karya');
    }
}
