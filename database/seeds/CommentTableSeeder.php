<?php

use App\Comment;
use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::insert([
            [
                'body'     => 'i like this news',
                'created_at'     => '2016-11-30 14:21:23',
                'news_id'     => 1
            ],

            [
                'body'     => 'i have no opinion about that',
                'created_at'     => '2016-11-30 14:24:08',
                'news_id'     => 1
            ],
            [
                'body'     => 'are you kidding me ?',
                'created_at'     => '2016-11-30 14:28:06',
                'news_id'     => 1
            ],
            [
                'body'     => 'this is so true',
                'created_at'     => '2016-11-30 17:21:23',
                'news_id'     => 2
            ],

            [
                'body'     => 'trolololo',
                'created_at'     => '2016-11-30 17:39:25',
                'news_id'     => 2
            ],
            [
                'body'     => 'luke i am your father',
                'created_at'     => '2016-11-30 14:34:06',
                'news_id'     => 3
            ],  
        ]);

       
    }
}
