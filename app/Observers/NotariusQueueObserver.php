<?php

namespace App\Observers;

use App\Mail\NotariusQueueMail;
use App\Models\NotariusQueue;

class NotariusQueueObserver
{
    public function created(NotariusQueue $notariusQueue)
    {
        \Mail::to($notariusQueue->email)->queue(new NotariusQueueMail($notariusQueue));
    }

    public function updated(NotariusQueue $notariusQueue)
    {
    }

    public function deleted(NotariusQueue $notariusQueue)
    {
    }

    public function restored(NotariusQueue $notariusQueue)
    {
    }

    public function forceDeleted(NotariusQueue $notariusQueue)
    {
    }
}
