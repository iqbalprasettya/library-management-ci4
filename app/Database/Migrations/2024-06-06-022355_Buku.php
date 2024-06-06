<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Buku extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'no_buku' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
            'judul' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'pengarang' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'tahun_terbit' => [
                'type' => 'YEAR',
                'constraint' => 4
            ],
            'genre_buku' => [
                // enum genre
                'type' => 'ENUM("Fiksi", "Non-Fiksi", "Romantis", "Dongeng", "Novel", "Edukasi")'
            ],
            // status
            'status' => [
                'type' => 'ENUM("Tersedia", "Dipinjam")'
            ],
            'created_at' => [
                'type' => 'DATETIME'
            ],
            'updated_at' => [
                'type' => 'DATETIME'
            ]

        ]);
        $this->forge->addKey('no_buku', TRUE);
        $this->forge->createTable('buku');
    }

    public function down()
    {
        $this->forge->dropTable('buku');
    }
}
