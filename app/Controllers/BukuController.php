<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\BukuModel;
use App\Models\PinjamModel;

class BukuController extends BaseController
{
    protected $bukuModel;
    protected $pinjamModel;

    public function __construct()
    {
        $this->bukuModel = new BukuModel();
        $this->pinjamModel = new PinjamModel();
    }

    // buku/index
    public function index()
    {
        $data['buku'] = $this->bukuModel->findAll();

        return view('buku/index', $data);
    }

    // buku/create
    public function create()
    {
        $data = [
            'title' => 'Tambah Buku'
        ];
        return view('buku/create', $data);
    }
    // store buku
    public function store()
    {

        $this->bukuModel->save([
            'judul' => $this->request->getVar('judul'),
            'pengarang' => $this->request->getVar('pengarang'),
            'tahun_terbit' => $this->request->getVar('tahun_terbit'),
            'genre_buku' => $this->request->getVar('genre_buku'),
            'status' => 'Tersedia'
        ]);
        // dd($this->request->getVar('tahun_terbit'));
        return redirect()->to('/buku');
    }

    // buku/edit
    public function edit($id)
    {
        $data['buku'] = $this->bukuModel->find($id);
        return view('buku/edit', $data);
    }

    // update buku
    public function update($id)
    {
        $this->bukuModel->update($id, [
            'judul' => $this->request->getVar('judul'),
            'pengarang' => $this->request->getVar('pengarang'),
            'tahun_terbit' => $this->request->getVar('tahun_terbit'),
            'genre_buku' => $this->request->getVar('genre_buku'),

        ]);
        return redirect()->to('/buku');
    }

    // delete buku
    public function delete($id)
    {
        // buku yang status Dipinjam tidak dapat dihapus
        $pinjam = $this->pinjamModel->where('no_buku', $id)->first();

        if ($pinjam) {
            return redirect()->to('/buku')->with('error', 'Buku sedang dipinjam dan tidak dapat dihapus.');
        }

        $this->bukuModel->delete($id);

        return redirect()->to('/buku');
    }
}
