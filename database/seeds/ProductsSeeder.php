<?php

use Illuminate\Database\Seeder;
use App\Product;


class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

     
    public function run()
    {
        $faker = Faker::create();
        foreach(range(0,10) as $i){
            Product::table('product')->insert([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => bcrypt('password'),
                'address' => $faker->address,
                'date_of_birth' => $faker->dateTimeThisCentury()->format('Y-m-d')
            ]);
        }
    }
}
