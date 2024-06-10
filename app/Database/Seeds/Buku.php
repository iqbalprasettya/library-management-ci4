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
            [
                'judul' => 'Buku E',
                'pengarang' => 'Pengarang E',
                'tahun_terbit' => '2005',
                'genre_buku' => 'Fiksi',
                'status' => 'Tersedia'
            ],
            [
                'judul' => 'Buku F',
                'pengarang' => 'Pengarang F',
                'tahun_terbit' => '2006',
                'genre_buku' => 'Non-Fiksi',
                'status' => 'Tersedia'
            ],
            [
                'judul' => 'Buku G',
                'pengarang' => 'Pengarang G',
                'tahun_terbit' => '2007',
                'genre_buku' => 'Fiksi',
                'status' => 'Tersedia'
            ],
            [
                'judul' => 'Buku H',
                'pengarang' => 'Pengarang H',
                'tahun_terbit' => '2008',
                'genre_buku' => 'Non-Fiksi',
                'status' => 'Tersedia'
            ],
            [
                'judul' => 'Buku I',
                'pengarang' => 'Pengarang I',
                'tahun_terbit' => '2009',
                'genre_buku' => 'Fiksi',
                'status' => 'Tersedia'
            ],
            [
                'judul' => 'Buku J',
                'pengarang' => 'Pengarang J',
                'tahun_terbit' => '2010',
                'genre_buku' => 'Non-Fiksi',
                'status' => 'Tersedia'
            ],
            [
                'judul' => 'Buku K',
                'pengarang' => 'Pengarang K',
                'tahun_terbit' => '2011',
                'genre_buku' => 'Fiksi',
                'status' => 'Tersedia'
            ],
            [
                'judul' => 'Buku L',
                'pengarang' => 'Pengarang L',
                'tahun_terbit' => '2012',
                'genre_buku' => 'Non-Fiksi',
                'status' => 'Tersedia'
            ],
            [
                'judul' => 'Buku M',
                'pengarang' => 'Pengarang M',
                'tahun_terbit' => '2013',
                'genre_buku' => 'Fiksi',
                'status' => 'Tersedia'
            ],
            [
                'judul' => 'Buku N',
                'pengarang' => 'Pengarang N',
                'tahun_terbit' => '2014',
                'genre_buku' => 'Non-Fiksi',
                'status' => 'Tersedia'
            ],
            [
                'judul' => 'Buku O',
                'pengarang' => 'Pengarang O',
                'tahun_terbit' => '2015',
                'genre_buku' => 'Fiksi',
                'status' => 'Tersedia'
            ],
        ];

        $this->db->table('buku')->insertBatch($data);
    }
}
