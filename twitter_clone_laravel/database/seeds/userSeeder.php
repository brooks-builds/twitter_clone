<?php

use Illuminate\Database\Seeder;
use \App\User;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 1)->create()->make();
    }
}
