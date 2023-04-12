<?php

namespace App\Console;
use Illuminate\Support\Facades\DB;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule
            ->call(function () {
                $us = DB::table('users')
                    ->where('id', '=', 2)
                    ->first();
                $x = $us->somme;

                $usersWithTrades = DB::table('users')

                    ->join('trades', 'users.id', '=', 'trades.id_client')
                    ->distinct()
                    ->get();

                $usersWithTrades = DB::table('users')
                    ->join('trades', function ($join) {
                        $join->on('users.id', '=', 'trades.id_user')->where('trades.status', '=', 0);
                    })
                    ->select('users.*')
                    ->distinct()
                    ->get();

                DB::table('users')
                    ->where('id', '=', '2')
                    ->update([
                        'somme' => $x * 2,
                    ]);
            })
            ->everyMinute();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
