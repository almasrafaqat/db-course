<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        // \App\Models\Comment::factory()->count(10)->create(); //also working
        \App\Models\Comment::factory(10)->create();
    }
}
