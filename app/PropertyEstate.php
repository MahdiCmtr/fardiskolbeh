<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyEstate extends Model
{
    protected $table = 'estate_property';
    protected $fillable = ['estate_id', 'property_id'];

    public function toArray()
    {
        static::boot();
        return [
            'proprtyTitle' => Property::where('id', $this->property_id)->get('title')[0]->title,
            'propertyValue' => $this->value
        ];
    }
}
