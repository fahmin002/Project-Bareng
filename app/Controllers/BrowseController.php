<?php

namespace App\Controllers;

class BrowseController extends BaseController
{
    public function dokumen(): string
    {
        return view('browse/dokumen');
    }
    
    public function tahun(): string
    {
        return view('browse/tahun');
    }

    public function judul(): string
    {
        return view('browse/judul');
    }

    public function penulis(): string
    {
        return view('browse/penulis');
    }

}
