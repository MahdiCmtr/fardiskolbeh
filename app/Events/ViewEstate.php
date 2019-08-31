<?php

namespace App\Events;

use App\Estate;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class ViewEstate
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    private $estate;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Estate $estate)
    {
        $this->estate = $estate;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
    public function getEstate()
    {
        return $this->estate;
    }
}
