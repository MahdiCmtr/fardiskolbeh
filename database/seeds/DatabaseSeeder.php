<?php

use App\PropertyEstate;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        $this->call(UsersTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(EstateTableSeeder::class);
        $this->call(PropertyTableSeeder::class);
        $this->call(PropertyEstateTableSeeder::class);
        Schema::enableForeignKeyConstraints();
    }
}
