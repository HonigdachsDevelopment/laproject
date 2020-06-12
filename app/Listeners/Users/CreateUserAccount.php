<?php

namespace App\Listeners\Users;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Model\Account;
use App\User;

class CreateUserAccount
{
    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        /**
         * event to run when Listener is triggered
         * triggers the create event from our RegistersController which
         * catches all create events related to user registration
         */
        $event->user->account()->create([
            'id' => $event->user->id,
            'name' => $event->user->name
        ]);
    }
}
