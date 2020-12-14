<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pages = ['Hakkımda', 'Kariyer', 'Özgeçmiş', 'Vizyon'];
        $count = 0;
        foreach ($pages as $page) {
            $count++;
            DB::table('pages')->insert([
                'title' => $page,
                'slug' => str_slug($page),
                'image' => 'https://moblobi.com/wp-content/uploads/2020/06/google-business-nedir-nasil-kullanilir-780x470.jpg',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                              Saepe nostrum ullam eveniet pariatur voluptates odit, fuga
                              atque ea nobis sit soluta odio, adipisci quas excepturi maxime quae totam ducimus consectetur?',
                'order' => $count,
                'created_at' => now(),
                'updated_at' => now()

            ]);
        }
    }
}
