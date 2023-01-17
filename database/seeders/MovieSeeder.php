<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            [
                'title' => 'The Matrix Resurrection',
                'production_year' => '2021',
                'description' => 'Neo (Keanu Reeves) believes that Morpheus (Laurence Fishburne), an elusive figure considered to be the most dangerous man alive, can answer his question',
                'director' => 'Lana Wachowski',
                'release_date' => '2021-12-22',
                'image_thumbnail' => 'matrix_thumbnail.jpg',
                'background' => 'matrix_background.jpeg'
            ],
            [
                'title' => 'Pacific Rim',
                'production_year' => '2013',
                'description' => 'Long ago, legions of monstrous creatures called Kaiju arose from the sea, bringing with them all-consuming war. To fight the Kaiju, mankind developed giant robots called Jaegers, designed to be piloted by two humans locked together in a neural bridge. However, even the Jaegers are not enough to defeat the Kaiju, and humanity is on the verge of defeat. Mankinds last hope now lies with a washed-up ex-pilot (Charlie Hunnam), an untested trainee (Rinko Kikuchi) and an old, obsolete Jaeger.',
                'director' => 'Guillermo del Toro',
                'release_date' => '2013-7-11',
                'image_thumbnail' => 'pacificRim_thumbnail.jpg',
                'background' => 'pacificRim_background.jpg'
            ],
            [
                'title' => 'The Big Bang Theory',
                'production_year' => '2007',
                'description' => 'Brilliant physicists, Leonard and Sheldon, who are the kind of "beautiful minds" that understand how the universe works. But none of that genius helps them interact with people, especially women. All this begins to change when a free-spirited beauty named Penny moves in next door.',
                'director' => 'Mark Cendrowski',
                'release_date' => '2007-9-24',
                'image_thumbnail' => 'bigbang_thumbnail.jpg',
                'background' => 'bigbang_background.jpg'
            ],
            [
                'title' => 'Hathaway Flash',
                'production_year' => '2021',
                'description' => 'After Char rebellion, Hathaway Noa leads an insurgency against Earth Federation, but meeting an enemy officer and a mysterious woman alters his fate.',
                'director' => 'Shuko Murase',
                'release_date' => '2021-6-11',
                'image_thumbnail' => 'hathaway_thumbnail.jpg',
                'background' => 'hathaway_background.jpg'
            ],
            [
                'title' => 'Miracle in Cell no. 7',
                'production_year' => '2013',
                'description' => 'Inmates at a Korean prison join forces to protect a mentally-impaired comrade and his young daughter, after the former is bullied into confessing to a crime he didnt commit.',
                'director' => 'Lee Hwan Kyung',
                'release_date' => '2013-7-19',
                'image_thumbnail' => 'miracle_thumbnail.jpg',
                'background' => 'miracle_background.jpg'
            ],
        ]);
    }
}
