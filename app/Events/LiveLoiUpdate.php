<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class LiveLoiUpdate implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $loi;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($loi)
    {
        $this->loi = $loi;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('livecount');
    }

    public function broadcastWith()
    {
        //dd($this->loi);
        return [
            'id' => $this->loi->id,
            'perusahaan' => $this->loi->nama_perusahaan,
            'usd' => $this->loi->nilai_usd,
            'rp' => $this->loi->nilai_rp,
        ];
    }

}
