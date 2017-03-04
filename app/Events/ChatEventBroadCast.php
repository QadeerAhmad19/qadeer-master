<?php namespace App\Events;

use App\Events\Event;

use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class ChatEventBroadCast extends Event implements ShouldBroadcast {

	use SerializesModels;

	/**
	 * Create a new event instance.
	 *
	 * @return void
	 */
    public $message;

	public function __construct($message)
	{
		//
        $this->message=$message;
	}

    public function broadcastOn()
    {
        return ['broad-cast'];
    }
}
