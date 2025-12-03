<?php

namespace App\Observers;

use App\Models\Tasker;

class TaskerObserver
{

    public function creating(Tasker $tasker)
    {
        $tasker->tasker_code = mt_rand('11111','99999');
    }
    public function created(Tasker $tasker): void
    {
        //
    }

    /**
     * Handle the Tasker "updated" event.
     */
    public function updated(Tasker $tasker): void
    {
        //
    }

    /**
     * Handle the Tasker "deleted" event.
     */
    public function deleted(Tasker $tasker): void
    {
        //
    }

    /**
     * Handle the Tasker "restored" event.
     */
    public function restored(Tasker $tasker): void
    {
        //
    }

    /**
     * Handle the Tasker "force deleted" event.
     */
    public function forceDeleted(Tasker $tasker): void
    {
        //
    }
}
