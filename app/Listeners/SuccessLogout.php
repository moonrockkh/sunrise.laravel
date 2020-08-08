<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Logout;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use DB;
class SuccessLogout
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  Logout  $event
     * @return void
     */
    public function handle(Logout $event)
    {
        $data = array(
            'user_id' => $event->user->id,
            'ip_address' => $_SERVER['REMOTE_ADDR'],
            'log_date' => date('Y-m-d'),
            'log_time' => date('H:i:s'),
            'action' => 'logout'
        );
        DB::table('logs')->insert($data);
    
    }
}
