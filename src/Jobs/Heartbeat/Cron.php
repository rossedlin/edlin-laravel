<?php

namespace Edlin\Laravel\Jobs\Heartbeat;

use Exception;
use Illuminate\Support\Facades\Http;

class Cron
{
    /**
     * Execute the job.
     */
    public function handle(): void
    {
        try {
            Http::get(config('heartbeat.cron.url'));
        } catch (Exception $e) {
            //Do nothing
        }
    }
}
