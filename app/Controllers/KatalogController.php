<?php

namespace App\Controllers;

use App\Models\KatalogModel;
use Codeigniter\Controller;

class KatalogController extends BaseController
{
    private $KatalogModel;
    public function __construct()
    {
        $this->KatalogModel = new KatalogModel();
    }
    public function katalog()
    {
        $katalog = $this->KatalogModel->findAll();

        $data = [
            'title' => 'Katalog | Prepify.id',
            'katalog' => $katalog
        ];

        return view('katalog', $data);
        // echo"katalog page";
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Produk | Prepify.id'
        ];
        return view('tambah_produk', $data);
    }
    public function store()
    {
        $data = $this->request->getPost();
        $this->KatalogModel->save($data);
        return redirect()->to('/katalog');
    }

    public function edit($id)
    {
        $katalog = $this->KatalogModel->find($id); 
        $data = [
            'title' => 'Edit Produk | Prepify.id',
            'katalog' => $katalog
        ];
        return view('edit_produk', $data);
    }

    public function update($id)
    {
        $data = $this->request->getPost();
        $this->KatalogModel->update($id, $data);
        return redirect()->to('/katalog');
    }
    public function delete($id)
    {
        $this->KatalogModel->delete($id);  // DELETE FROM berita WHERE id=$id  
        session()->setFlashdata('pesan','Produk berhasil dihapus');
        return redirect()->to('/katalog');
    }


}
