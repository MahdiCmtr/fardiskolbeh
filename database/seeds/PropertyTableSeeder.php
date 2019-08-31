<?php

use App\Category;
use App\Property;
use Illuminate\Database\Seeder;

class PropertyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return $this->Property();
    }
    public function Property()
    {
        Property::truncate();
        $CategoryId = Category::pluck('id')->toArray();
        for ($i = 0; $i < sizeof($CategoryId) * 3; $i++) {
            Property::create([
                'title' => str_random(8),
                'category_id' => $CategoryId[array_rand($CategoryId)],
            ]);
        }
    }
}
