<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use DB;
class SuccessLogin
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
     * @param  Login  $event
     * @return void
     */
    public function handle(Login $event)
    {
        $data = array(
            'user_id' => $event->user->id,
            'ip_address' => $_SERVER['REMOTE_ADDR'],
            'log_date' => date('Y-m-d'),
            'log_time' => date('H:i:s'),
            'action' => 'login'
        );
        DB::table('logs')->insert($data);
    }
}
