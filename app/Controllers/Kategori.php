<?php

namespace App\Controllers;

use app\Models\KategoriModel;

class Kategori extends BaseController
{
    protected $KategoriModel;
    public function index(): string
    {
        $data['title'] = 'Kategori';
        return view('Kategori/IndexView', $data);
    }

    public function form()
    {
        $data['title'] = 'Kategori';
        return view('Kategori/FormView', $data);
    }

    public function save()
    {
         $data = [
            'kategori_nama' =>$this->request->getVar('kategori_nama'),
            'kategori_deskripsi' => $this->request->getVar('kategori_deskripsi'),
        ];
        $this->KategoriModel->insert($data);
    }
}