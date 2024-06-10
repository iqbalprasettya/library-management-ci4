<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth/register');
    }

    public function store()
    {
        $userModel = new UserModel();

        $rules = [
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
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'username' => $this->request->getVar('username'),
            'email' => $this->request->getVar('email'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'role' => $this->request->getPost('role')
        ];
        // $this->userModel->save($data);

        $userModel->save($data);

        return redirect()->to('/login')->with('success', 'Registrasi berhasil! Silahkan Login');
    }

    public function login()
    {
        return view('auth/login');
    }

    public function authenticate()
    {
        $session = session();
        $userModel = new UserModel();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $user = $userModel->where('username', $username)->first();
        if ($user) {
            if (password_verify($password, $user['password'])) {
                $session->set([
                    'id' => $user['id'],
                    'username' => $user['username'],
                    'role' => $user['role'],
                    'logged_in' => true
                ]);
                return redirect()->to('/dashboard');
            } else {
                $session->setFlashdata('error', 'Password salah');
                return redirect()->to('/auth/login');
            }
        } else {
            $session->setFlashdata('error', 'Username tidak ditemukan');
            return redirect()->to('/auth/login');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/auth/login');
    }
}
