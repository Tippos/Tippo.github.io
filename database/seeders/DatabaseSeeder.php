<?php

namespace Database\Seeders;

use App\Models\course_rqs;
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

        $this->call([
            UsersSeeder::class,

        ]);
        \App\Models\users::factory(55)->create();
    }
}
