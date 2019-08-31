<?php

namespace App\listener;

use App\Events\ViewEstate;
use App\View;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ViewEstateListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ViewEstate  $event
     * @return void
     */
    public function handle(ViewEstate $event)
    {
        $condition = [
            'user_id' => auth()->id() ?: null,
            'user_ip' => userIp(),
            'estate_id' => $event->getEstate()->id,
            ['created_at', '>', now()->subDay(1)]
        ];
        (!View::where($condition)->count() && (View::create([
            "user_id" => auth()->id() ?: null,
            "user_ip" => userIp(),
            "estate_id" => $event->getEstate()->id
        ])));
    }
}
