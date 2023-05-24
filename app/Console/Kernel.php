<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel


{
    /**
     * Define the application's command schedule.
     *
     

     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */

     protected $commands = [
        \App\Console\Commands\MembershipRenew::class,
        \App\Console\Commands\SecondMembershipReminder::class,
        \App\Console\Commands\ThirdMembershipReminder::class,


    ];
    
    
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();

        //->weeklyOn(1, '8:00');

        // DB::table('recent_users')->delete();
        // $schedule->command('membershipreminderone:email')->everyMinute();
        $schedule->command('membershipreminderone:email')->weekly()->mondays()->at('15:00')->timezone('America/Los_Angeles');
        $schedule->command('membershipremindersecond:email')->weekly()->mondays()->at('15:00')->timezone('America/Los_Angeles');
        $schedule->command('membershipreminderthird:email')->weekly()->mondays()->at('15:00')->timezone('America/Los_Angeles');

}
    

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
