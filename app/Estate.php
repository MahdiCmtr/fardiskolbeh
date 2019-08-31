<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estate extends Model
{
    protected $table = 'estate';
    const TYPE_BUY = 'buy';
    const TYPE_RENT = 'rent';
    const TYPE = [self::TYPE_BUY, self::TYPE_RENT];
    protected $fillable = [
        'user_id', 'category_id', 'slug', 'title', 'address', 'phone', 'description', 'img', 'state', 'type', 'published_at'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function toArray()
    {
        $estate = parent::toArray();
        $estate['img'] = explode(',', $this->img);
        $estate['category'] = $this->category()->get(['id', 'title']);
        $estate['user'] = $this->user()->get(['id', 'name']);
        $estate['views'] = $this->views->count();
        unset($estate['state']);
        unset($estate['published_at']);
        unset($estate['created_at']);
        return $estate;
    }

    //Relation
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
    public function PropertyEstate()
    {
        return $this->hasMany(PropertyEstate::class, 'estate_id', 'id');
    }
    public function views()
    {
        return $this->hasMany(View::class, 'estate_id', 'id');
    }
    //End Relation
}
