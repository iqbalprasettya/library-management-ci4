<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Anggota extends Seeder
{
    public function run()
    {
        $data = [];

        for ($i = 1; $i <= 50; $i++) {
            $data[] = [
                'nama' => 'Anggota ' . $i,
                'alamat' => 'Alamat ' . $i,
                'kota' => 'Kota ' . $i,
                'no_telp' => '08123456789' . $i,
                'tgl_lahir' => date('Y-m-d', strtotime('-' . rand(18, 50) . ' years')),
            ];
        }

        // Using Query Builder
        $this->db->table('anggota')->insertBatch($data);
    }
}
