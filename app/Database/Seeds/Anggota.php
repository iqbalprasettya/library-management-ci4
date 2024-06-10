<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class Anggota extends Seeder
{
    public function run()
    {
        $faker = Factory::create();

        $data = [];

        // Generate 50 fake data
        for ($i = 0; $i < 50; $i++) {
            $data[] = [
                'nama' => $faker->name,
                'alamat' => $faker->address,
                'kota' => $faker->city,
                'no_telp' => $faker->phoneNumber,
                'tgl_lahir' => $faker->date,
                'username' => $faker->userName,
                'password' => password_hash('password', PASSWORD_BCRYPT),
            ];
        }

        // Using Query Builder
        $this->db->table('anggota')->insertBatch($data);
    }
}
