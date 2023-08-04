<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu')->insert([
            'id' => '1',
            'title' => 'Layanan',
            'parent_id' => 0,
            'url' => 'page/layanan',
            'sort' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('menu')->insert([
            'id' => '2',
            'title' => 'Kapabilitas',
            'parent_id' => 0,
            'url' => 'page/kapabilitas',
            'sort' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('menu')->insert([
            'title' => 'Pembuatan Website',
            'parent_id' => '1',
            'url' => 'page/pembuatan-website',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('menu')->insert([
            'title' => 'Pembuatan E-Commerce',
            'parent_id' => '1',
            'url' => 'page/pembuatan-ecommerce',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('menu')->insert([
            'title' => 'Pembuatan Aplikasi Web',
            'parent_id' => '1',
            'url' => 'page/pembuatan-aplikasi-web',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('menu')->insert([
            'title' => 'Penyediaan Server / Cloud',
            'parent_id' => '1',
            'url' => 'page/penyediaan-server-cloud',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('menu')->insert([
            'title' => 'Jasa Pemeliharaan',
            'parent_id' => '1',
            'url' => 'page/jasa-pemeliharaan',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('menu')->insert([
            'title' => 'Bidang Bisnis Yang Dilayani',
            'parent_id' => '1',
            'url' => 'page/bidang-bisnis-yang-dilayani',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('menu')->insert([
            'title' => 'Apa Saja Yang Bisa Kami Buat',
            'parent_id' => '1',
            'url' => 'page/apa-saja-yang-bisa-kami-buat',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
