<?php

use App\Category;
use App\Estate;
use App\User;
use Illuminate\Database\Seeder;

class EstateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return $this->EstateCategory();
    }
    public function EstateCategory()
    {
        Estate::truncate();
        $userId = User::pluck('id')->toArray();
        $CategoryId = Category::pluck('id')->toArray();
        for ($i = 0; $i < sizeof($userId) * 2; $i++) {
            Estate::create([
                'user_id' => $userId[array_rand($userId)],
                'category_id' => $CategoryId[array_rand($CategoryId)],
                'slug' => str_random(10),
                'title' => str_random(15),
                'address' => str_random(30),
                'phone' => random_int(111111111, 999999999),
                'description' => str_random(100),
                'state' => 'enable',
                'type' => 'buy',
                'published_at' => now()
            ]);
        }
    }
}
