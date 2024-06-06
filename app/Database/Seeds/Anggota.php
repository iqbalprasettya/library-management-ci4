<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Anggota extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama' => 'John Doe',
                'alamat' => 'Jl. Mawar No.1',
                'kota' => 'Jakarta',
                'no_telp' => '081234567890',
                'tgl_lahir' => '1990-01-01'
            ],
            [
                'nama' => 'Jane Smith',
                'alamat' => 'Jl. Melati No.2',
                'kota' => 'Bandung',
                'no_telp' => '081234567891',
                'tgl_lahir' => '1992-02-02'
            ],
            [
                'nama' => 'Bob Johnson',
                'alamat' => 'Jl. Anggrek No.3',
                'kota' => 'Surabaya',
                'no_telp' => '081234567892',
                'tgl_lahir' => '1995-03-03'
            ],


        ];

        $this->db->table('anggota')->insertBatch($data);

    }
}
