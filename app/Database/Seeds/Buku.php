<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Buku extends Seeder
{
    public function run()
    {
        $data = [
            [
                'judul' => 'Buku A',
                'pengarang' => 'Pengarang A',
                'tahun_terbit' => '2001',
                'genre_buku' => 'Fiksi',
                'status' => 'Tersedia'
            ],
            [
                'judul' => 'Buku B',
                'pengarang' => 'Pengarang B',
                'tahun_terbit' => '2002',
                'genre_buku' => 'Non-Fiksi',
                'status' => 'Tersedia'
            ],
            [
                'judul' => 'Buku C',
                'pengarang' => 'Pengarang C',
                'tahun_terbit' => '2003',
                'genre_buku' => 'Fiksi',
                'status' => 'Tersedia'
            ],
            [
                'judul' => 'Buku D',
                'pengarang' => 'Pengarang D',
                'tahun_terbit' => '2004',
                'genre_buku' => 'Non-Fiksi',
                'status' => 'Tersedia'
            ],
        ];

        $this->db->table('buku')->insertBatch($data);
    }
}
