<?php

use App\Product;
use App\Review;
use App\User;
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
        // $this->call(UserSeeder::class);
        factory(User::class,2)->create();
        factory(Product::class,20)->create();
        factory(Review::class,40)->create();
    }
}
