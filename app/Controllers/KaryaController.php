<?php

namespace App\Controllers;

use App\Models\KaryaModel;
use CodeIgniter\Controller;
use CodeIgniter\Files\File;
use CodeIgniter\Files\FileCollection;

helper('filesystem');

class KaryaController extends Controller
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
        $file = $this->request->getFile('file');

        if (!$file->isValid()) {
            throw new \RuntimeException($file->getErrorString().'('.$file->getError().')');
        }

        $filePath = $file->store();

        $data = [
            'user_id' => session()->get('id'),
            'title' => $this->request->getVar('title'),
            'description' => $this->request->getVar('description'),
            'tahun' => $this->request->getVar('tahun'),
            'file_path' => $filePath,
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
        $file = $this->request->getFile('file');
        $oldFile = $model->where('id', $id)->first();
        if ($file->isValid()) {
            $filePath = $file->store();
            $data = [
                'title' => $this->request->getVar('title'),
                'description' => $this->request->getVar('description'),
                'tahun' => $this->request->getVar('tahun'),
                'file_path' => $filePath,
            ];
        } else {
            $data = [
                'title' => $this->request->getVar('title'),
                'description' => $this->request->getVar('description'),
            ];
        } 
        unlink(WRITEPATH . 'uploads/' . $oldFile['file_path']);
        $model->update($id, $data);

        return redirect()->to('/karya');
    }

    public function delete($id)
    {
        // $model = new KaryaModel();
        // $data = $model->where('id', $id)->first();
        // $file = ROOTPATH . 'writable/uploads/'. $data['file_path'];
        // delete_files($file);
        // $model->delete($id);
        // return redirect()->to('/karya');
        $model = new KaryaModel();

        // Ambil data karya berdasarkan ID
        $karya = $model->find($id);
        
        if ($karya) {
            // Hapus file jika ada
            $filePath = WRITEPATH . 'uploads/' . $karya['file_path'];
            if (file_exists($filePath)) {
                unlink($filePath);
            }
            
            // Hapus data dari database
            $model->delete($id);
        }

        return redirect()->to('/karya');
    }
}
