<?php

use App\Models\Post;
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
    	\DB::table('posts')->truncate();
    	
        factory(Post::class, 5)->create();
    }
}
