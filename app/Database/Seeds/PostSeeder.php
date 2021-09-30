<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PostSeeder extends Seeder
{
    public function run()
    {
            $model = model('PostModel');

            $kategori = ['nature', 'food', 'animal', 'water', 'lifestyle', 'photo'];

            for($i = 0; $i < 6; $i++) {
            $model->insert([
                    'judul'     => static::faker()->sentence(3),
                    'slug'      => static::faker()->unique()->slug(3),
                    'author'    => static::faker()->name(),
                    'kategori'  => $kategori[0],
                    'deskripsi' => static::faker()->text()

            ]);
        }
    }
}
