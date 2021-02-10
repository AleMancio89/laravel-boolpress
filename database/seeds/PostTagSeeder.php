<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Tag;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

class PostTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $posts = Post::all();
        $tags = Tag::all();

        foreach($posts as $post){

            for($i = 1; $i <= $faker->numberBetween(1, $tags->count()); $i++ ){

                DB::table('post_tags')->insert([
                    'post_id' => $post->id,
                    'tag_id' => $i
                ]);
            }
        }
    }
}
