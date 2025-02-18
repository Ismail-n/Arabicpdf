<?php

namespace App\Listeners;

use App\Events\NewCategoryCreate;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendNewCategoryNotification
{
    /**
     * Create the event listener.
     */
    // public function __construct()
    // {

    // }

    /**
     * Handle the event.
     */
    public function handle(NewCategoryCreate $event)
    {
        echo "hooray,". $event->user_name ." a new category has arrived";
    }
}
