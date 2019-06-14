<?php

use Illuminate\Database\Seeder;
use \App\tweets;

class TweetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(tweets::class, 15)->make();
    }
}
