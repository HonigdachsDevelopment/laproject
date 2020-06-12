<?php

namespace App\Listeners\Users;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

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
        $event->user->account()->create([
            'name' => $event->user->name
        ]);
    }
}
