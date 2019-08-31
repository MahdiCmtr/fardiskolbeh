<?php


use App\Category;
use App\User;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return $this->CreateCategory();
    }
    public function CreateCategory()
    {
        Category::truncate();
        $userId = User::pluck('id')->toArray();
        $top = [1, 0];
        for ($i = 0; $i < sizeof($userId) * 2; $i++) {
            shuffle($top);
            Category::create([
                'user_id' => $userId[array_rand($userId)],
                'title' => str_random(8),
                'top' => $top[0],
            ]);
        }
    }
}
