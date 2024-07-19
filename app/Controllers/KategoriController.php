<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class KategoriController extends BaseController
{
    public function tugasAkhir()
    {
        return view('kategori/tugas-akhir');
    }
}
