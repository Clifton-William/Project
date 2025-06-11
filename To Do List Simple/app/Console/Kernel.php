<?php

namespace App\Console;


use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Models\Schedule as ScheduleModel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function () {
            $reminders = ScheduleModel::where('reminder_time', '<=', now()->addMinutes(10))->get();
            foreach ($reminders as $reminder) {
                // Kirim notifikasi atau email ke pengguna
            }
        })->everyMinute();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
