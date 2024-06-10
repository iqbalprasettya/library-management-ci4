<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\AnggotaModel;
use App\Models\BukuModel;
use App\Models\PinjamModel;

class UserController extends BaseController
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
        // Tampilkan pinjaman yang dipinjam anggota dengan id_anggota yang login
        $id_anggota = session()->get('id_anggota');
        $data['pinjam'] = $this->pinjamModel->getPinjamByUser($id_anggota);

        return view('user/index', $data);
    }
    // pinjam view
    public function pinjam()
    {
        // pinjam view untuk pinjam buku dalam user yang telah login / session login
        $data['buku'] = $this->bukuModel->where('status', 'Tersedia')->findAll();
        return view('user/pinjam', $data);
    }
    // storePinjam
    public function storePinjam()
    {
        $no_buku = $this->request->getPost('no_buku');

        $this->pinjamModel->save([
            // id_anggota berdasarkan login
            'id_anggota' => session()->get('id_anggota'),
            'no_buku' => $no_buku,
            'tgl_pinjam' => date('Y-m-d'),
            'tgl_kembali' => $this->request->getPost('tgl_kembali')
        ]);

        $this->bukuModel->update($no_buku, ['status' => 'Dipinjam']);

        return redirect()->to('user/dashboard');
    }

    // delete pinjam
    public function delete($id)
    {
        $pinjam = $this->pinjamModel->find($id);
        $no_buku = $pinjam['no_buku'];
        $this->bukuModel->update($no_buku, ['status' => 'Tersedia']);
        $this->pinjamModel->delete($id);
        // balik ke user dashboard dan pesan success
        return redirect()->to('user/dashboard')->with('success', 'Pinjaman buku berhasil dikembalikan');
    }

    // register anggota 
    public function registerAnggota()
    {
        return view('user/register');
    }
    // login anggota
    public function loginAnggota()
    {
        return view('user/login');
    }

    // store anggota
    public function storeAnggota()
    {
        $anggotaModel = new AnggotaModel();

        $rules = [
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama harus diisi'
                ]
            ],

            'username' => [
                'rules' => 'required|is_unique[users.username]',
                'errors' => [
                    'required' => 'Username is required',
                    'is_unique' => 'Username already exists'
                ]

            ],
            'password' => [
                'rules' => 'required|min_length[8]',
                'errors' => [
                    'required' => 'Password is required',
                    'min_length' => 'Password must be at least 8 characters'
                ]
            ],
            'confirm_password' => [
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required' => 'Confirm password is required',
                    'matches' => 'Password and confirm password do not match'
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Alamat harus diisi'
                ]
            ],
            'kota' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kota harus diisi'
                ]
            ],
            'no_telp' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'No Telp harus diisi'
                ]
            ],
            'tgl_lahir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tanggal Lahir harus diisi'
                ]
            ],
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'no_telp' => $this->request->getPost('no_telp'),
            'tgl_lahir' => $this->request->getPost('tgl_lahir'),
            'kota' => $this->request->getPost('kota'),
            'username' => $this->request->getPost('username'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
        ];
        // $this->userModel->save($data);

        $anggotaModel->save($data);

        return redirect()->to('/login')->with('success', 'Registrasi berhasil! Silahkan Login');
    }

    // authenticate anggota
    public function authenticateAnggota()
    {
        // $anggotaModel = new AnggotaModel();
        // $username = $this->request->getPost('username');
        // $password = $this->request->getPost('password');
        // $anggota = $anggotaModel->where('username', $username)->first();
        // if ($anggota) {
        //     if (password_verify($password, $anggota['password'])) {
        //         session()->set('anggota', $anggota);
        //         return redirect()->to('/');
        //     } else {
        //         session()->setFlashdata('pesan', 'Password salah');
        //         return redirect()->to('/login-anggota');
        //     }
        // } else {
        //     session()->setFlashdata('pesan', 'Username tidak ditemukan');
        //     return redirect()->to('/login-anggota');
        // }


        $session = session();
        $userModel = new AnggotaModel();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $user = $userModel->where('username', $username)->first();
        if ($user) {
            if (password_verify($password, $user['password'])) {
                $session->set([
                    'id_anggota' => $user['id_anggota'],
                    'username' => $user['username'],
                    'logged_in_user' => true
                ]);
                return redirect()->to('/user/dashboard');
            } else {
                $session->setFlashdata('error', 'Password salah');
                return redirect()->to('/login');
            }
        } else {
            $session->setFlashdata('error', 'Username tidak ditemukan');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        // logout session user/anggota ke / dan kasih pesan
        session()->destroy();
        return redirect()->to('/')->with('success', 'Anda telah logout');
    }
}
