<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\User::class, 3)->create();
        \App\Models\User::factory()->count(3)->create();

        $connection = 'sqlite';
        // $users = factory(App\User::class, 3)->make();
        $users = \App\Models\User::factory()->count(3)->make();
        $users->each(function($model) use($connection) {
            $model->setConnection($connection);
            $model->save();
        });
    }
}
