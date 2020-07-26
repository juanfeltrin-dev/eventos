<?php

namespace App\Observers;

use App\Event;

class EventObserver
{
    /**
     * Handle the event "saving" event.
     *
     * @param Event $event
     * @return void
     */
    public function saving(Event $event)
    {
//        $event->user_id = auth('api')->user()->id;
    }
}
