<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $table = 'ticket';
    protected $fillable = ['user_id', 'title', 'message', 'parent_id', 'view'];


    // relation
    public function AnsTicket()
    {
        return $this->hasMany(Ticket::class, 'parent_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function toArray()
    {
        $ticket = parent::toArray();
        $ticket['user_id'] = $this->user()->get(['name', 'avatar']);
        $ticket['answer'] = $this->AnsTicket;
        return $ticket;
    }
    // public function getRouteKeyName()
    // {
    //     return 'id';
    // }
}
