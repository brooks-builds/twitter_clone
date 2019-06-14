<?php

use Illuminate\Database\Seeder;
use \App\tweets;

class TweetsSeed extends Seeder
{
    /**
     * Run the database seeds.
     * If this class isn't found by DatabaseSeeder, then run `composer dump-autoload`
     *
     * @return void
     */
    public function run()
    {
        factory(tweets::class, 15)->create()->make();
    }
}
