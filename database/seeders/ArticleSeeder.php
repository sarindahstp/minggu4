<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*DB::table('articles')->insert([
            'title' => 'Belajar Daring',
            'content' => 'Apakah daring itu efektif dalam belajar?',
            'image' => 'https://cdn-image.hipwee.com/wp-content/uploads/2020/12/hipwee-pexels-julia-m-cameron-4143791.jpg',
            'create_at' => 29-12-2002,
            'update_at' => 29-12-2005,

        ]);*/
        \App\Model\Article::factory()->count(10)->create();
    }
}
  