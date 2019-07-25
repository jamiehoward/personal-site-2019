<?php

use App\Models\Tag;
use App\Models\Post;
use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('post_tag')->truncate();
        \DB::table('tags')->truncate();

        foreach(Post::get() as $post) {
        	$tags = factory(Tag::class, rand(1,4))->create();

        	foreach ($tags as $tag) {
        		$post->tags()->save($tag);
        	}
        }
    }
}
