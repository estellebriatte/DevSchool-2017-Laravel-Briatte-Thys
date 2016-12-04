<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //pour 30 évènements
        factory(\App\Models\Post::class, 30)->create();
    }
}
