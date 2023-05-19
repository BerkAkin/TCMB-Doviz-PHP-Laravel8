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


    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();

       //$schedule->command('doviz:save')->dailyAt('16:00');
       //$schedule->command('kripto:save')->dailyAt('16:00');
       //$schedule->command('altin:save')->dailyAt('16:00');
       $schedule->command('doviz:save')->everyMinute();
       $schedule->command('altin:save')->everyMinute();
       $schedule->command('kripto:save')->everyMinute();
       $schedule->command('mail:yolla')->everyMinute();
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
