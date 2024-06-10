<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\AnggotaModel;
use App\Models\BukuModel;
use App\Models\PinjamModel;

class HomeController extends BaseController
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

    public function index()
    {
        // hitung total anggota
        $totalAnggota = $this->anggotaModel->countAll();
        // hitung total buku
        $totalBuku = $this->bukuModel->countAll();
        // hitung total peminjaman
        $totalPinjam = $this->pinjamModel->countAll();
        // hitung total buku yang status Tersedia
        $totalBukuTersedia = $this->bukuModel->where('status', 'Tersedia')->countAllResults();

        $data = [
            'title' => 'Home',
            'totalAnggota' => $totalAnggota,
            'totalBuku' => $totalBuku,
            'totalPinjam' => $totalPinjam,
            'totalBukuTersedia' => $totalBukuTersedia
            ];
            return view('user/home', $data);
    }
}
