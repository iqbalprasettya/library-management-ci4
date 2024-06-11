<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\AnggotaModel;
use App\Models\PinjamModel;
use App\Models\BukuModel;

class AnggotaController extends BaseController
{
    protected $anggotaModel;
    protected $pinjamModel;
    protected $bukuModel;

    public function __construct()
    {
        $this->anggotaModel = new AnggotaModel();
        $this->pinjamModel = new PinjamModel();
        $this->bukuModel = new BukuModel();
    }

    // anggota/index
    public function index()
    {
        $data['anggota'] = $this->anggotaModel->findAll();
        return view('anggota/index', $data);
    }

    // anggota/create
    public function create()
    {
        return view('anggota/create');
    }

    // store anggota
    public function store()
    {
        $this->anggotaModel->save([
            'nama' => $this->request->getVar('nama'),
            'alamat' => $this->request->getVar('alamat'),
            'kota' => $this->request->getVar('kota'),
            'no_telp' => $this->request->getVar('no_telp'),
            'tgl_lahir' => $this->request->getVar('tgl_lahir'),

        ]);
        return redirect()->to('/dashboard/anggota');
    }

    // anggota/edit
    public function edit($id)
    {
        $data['anggota'] = $this->anggotaModel->find($id);
        return view('anggota/edit', $data);
    }

    // update anggota
    public function update($id)
    {
        $this->anggotaModel->update($id, [
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'kota' => $this->request->getPost('kota'),
            'no_telp' => $this->request->getPost('no_telp'),
            'tgl_lahir' => $this->request->getPost('tgl_lahir')
        ]);
        return redirect()->to('/dashboard/anggota');
    }

    // delete anggot
    public function delete($id)
    {
        // Cek apakah anggota memiliki buku yang sedang dipinjam
        $pinjaman = $this->pinjamModel->where('id_anggota', $id)->findAll();

        if (count($pinjaman) > 0) {
            session()->setFlashdata('error', 'Anggota tidak dapat dihapus karena masih memiliki buku
            yang sedang dipinjam');
            return redirect()->to('/dashboard/anggota');
        } else {
            // Hapus anggota
            $this->anggotaModel->delete($id);

            return redirect()->to('/dashboard/anggota')->with('success', 'Anggota berhasil dihapus');
        }
    }
}
