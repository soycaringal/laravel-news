<?php

use App\News;
use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        News::insert([
            [
                'title'      => 'news 1',
                'body'     => 'this is the description of our fist news',
                'created_at'     => '2016-11-30 14:18:23',
            ],
            [
                'title'      => 'news 2',
                'body'     => 'this is the description of our second news',
                'created_at'     => '2016-11-30 14:24:23',
            ],
            [
                'title'      => 'news 3',
                'body'     => 'this is the description of our third news',
                'created_at'     => '2016-12-01 04:33:23'
            ]
        ]);
    }
}
