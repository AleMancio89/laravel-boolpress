<?php

use Illuminate\Database\Seeder;
use App\PostInformation;

class PostInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(PostInformation::class, 100)->create()->each(
            function ($postInformation) {
               $postInformation->save();
            }
        );
    }
}
