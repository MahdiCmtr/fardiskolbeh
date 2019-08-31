<?php

use App\Estate;
use App\Property;
use App\PropertyEstate;
use Illuminate\Database\Seeder;

class PropertyEstateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return $this->PropertyEstate();
    }
    public function PropertyEstate()
    {
        PropertyEstate::truncate();
        $EstateId = Estate::pluck('id')->toArray();
        $propertyId = Property::pluck('id')->toArray();
        for ($i = 0; $i < sizeof($EstateId) * 4; $i++) {
            PropertyEstate::create([
                'estate_id' => $EstateId[array_rand($EstateId)],
                'property_id' => $propertyId[array_rand($propertyId)],
                'value' => str_random(4)
            ]);
        }
    }
}
