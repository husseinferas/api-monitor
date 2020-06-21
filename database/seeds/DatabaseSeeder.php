<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('endpoints')->insert([
            [
                'app' => 'cinema-web',
                'name' => 'home',
                'url' => 'http://cinema.weeana.com',
            ],
            [
                'app' => 'cinema-mobile',
                'name' => 'collections',
                'url' => 'http://api.cinema.weeana.com/web/v1/collections',
            ],
            [
                'app' => 'music-mobile',
                'name' => 'categories',
                'url' => 'http://music.weeana.com/api/v1/categories',
            ],
            [
                'app' => 'share-web',
                'name' => 'home',
                'url' => 'http://api.share.weeana.com/posts/home',
            ],
        ]);
    }
}
