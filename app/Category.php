<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    protected $fillable = ['user_id', 'title'];

    public function getRouteKeyName()
    {
        return 'title';
    }

    // Relations
    public function Estates()
    {
        return $this->hasMany(Estate::class, 'category_id', 'id');
    }
    public function property()
    {
        return $this->hasMany(Property::class, 'category_id', 'id');
    }
    // EndRelations
}
