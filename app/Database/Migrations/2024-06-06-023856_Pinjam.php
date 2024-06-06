<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pinjam extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'no_pinjam' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
            'id_anggota' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE
            ],
            'no_buku' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE
            ],
            'tgl_pinjam' => [
                'type' => 'DATE'
            ],
            'tgl_kembali' => [
                'type' => 'DATE',
                'null' => TRUE
            ],
            'created_at' => [
                'type' => 'DATETIME',
            ],
            'updated_at' => [
                'type' => 'DATETIME',
            ]

        ]);
        $this->forge->addKey('no_pinjam', TRUE);
        $this->forge->addForeignKey(
            'id_anggota',
            'anggota',
            'id_anggota',
            'CASCADE',
            'CASCADE'
        );
        $this->forge->addForeignKey(
            'no_buku',
            'buku',
            'no_buku',
            'CASCADE',
            'CASCADE'
        );
        $this->forge->createTable('pinjam');
    }

    public function down()
    {
        $this->forge->dropTable('pinjam');
    }
}
