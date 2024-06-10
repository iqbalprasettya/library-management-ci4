<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

use App\Models\AnggotaModel;
use App\Models\BukuModel;
use App\Models\PinjamModel;


class PinjamController extends BaseController
{
    protected $pinjamModel;
    protected $anggotaModel;
    protected $bukuModel;

    public function __construct()
    {
        $this->pinjamModel = new PinjamModel();
        $this->anggotaModel = new AnggotaModel();
        $this->bukuModel = new BukuModel();
    }

    // pinjam/index
    public function index()
    {
        $data['pinjam'] = $this->pinjamModel->getPinjamWithDetails();
        return view('pinjam/index', $data);
    }

    // pinjam/create
    public function create()
    {
        $data['anggota'] = $this->anggotaModel->findAll();
        $data['buku'] = $this->bukuModel->where('status', 'Tersedia')->findAll();
        return view('pinjam/create', $data);
    }

    // store pinjam
    public function store()
    {
        $no_buku = $this->request->getPost('no_buku');

        $this->pinjamModel->save([
            'id_anggota' => $this->request->getPost('id_anggota'),
            'no_buku' => $no_buku,
            'tgl_pinjam' => date('Y-m-d'),
            'tgl_kembali' => $this->request->getPost('tgl_kembali')
        ]);

        $this->bukuModel->update($no_buku, ['status' => 'Dipinjam']);

        return redirect()->to('/dashboard/pinjam');
    }

    // pinjam/edit
    public function edit($id)
    {
        $data['pinjam'] = $this->pinjamModel->find($id);
        $data['anggota'] = $this->anggotaModel->findAll();
        $data['buku'] = $this->bukuModel->where('status', 'Tersedia')->findAll();

        return view('pinjam/edit', $data);
    }

    // update pinjam
    public function update($id)
    {
        $pinjam = $this->pinjamModel->find($id);
        $no_buku_lama = $pinjam['no_buku'];
        $no_buku_baru = $this->request->getPost('no_buku');

        // Update status buku lama menjadi tersedia
        $this->bukuModel->update($no_buku_lama, ['status' => 'tersedia']);
        // Update status buku baru menjadi dipinjam
        $this->bukuModel->update($no_buku_baru, ['status' => 'dipinjam']);

        $this->pinjamModel->update($id, [
            'id_anggota' => $this->request->getPost('id_anggota'),
            'no_buku' => $no_buku_baru,
            'tgl_pinjam' => $this->request->getPost('tgl_pinjam'),
            'tgl_kembali' => $this->request->getPost('tgl_kembali')
        ]);

        return redirect()->to('/dashboard/pinjam');
    }

    // delete pinjam
    public function delete($id)
    {
        $pinjam = $this->pinjamModel->find($id);
        $no_buku = $pinjam['no_buku'];
        $this->bukuModel->update($no_buku, ['status' => 'Tersedia']);
        $this->pinjamModel->delete($id);
        return redirect()->to('/dashboard/pinjam');
    }
}
