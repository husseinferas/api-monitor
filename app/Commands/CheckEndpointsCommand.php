<?php

namespace App\Commands;

use App\Channels\TelegramChannel;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use LaravelZero\Framework\Commands\Command;

class CheckEndpointsCommand extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'check';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Check endpoints';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $endpoints = DB::table('endpoints')->get();
        $output = "";
        $total = 0;
        $good = 0;
        $bad = 0;

        foreach ($endpoints as $endpoint)
        {
            $total++;
            try {
                $status = Http::get($endpoint->url)->status();
            } catch (\Exception $exception) {
                $status = 500;
            }

            if ((int)$status > 204){
                $emoji = "❌";
                $bad++;
            } else {
                $emoji = "✅";
                $good++;
            }

            $output .= "app: ".$endpoint->app . PHP_EOL .
                    "name: ".$endpoint->name . PHP_EOL .
                    "url: ".$endpoint->url . PHP_EOL .
                    "status: ". $status . $emoji . PHP_EOL . PHP_EOL;
        }

        $output = "Total: " . $total . "  " . PHP_EOL .
                $good . " ✅  ". PHP_EOL .
                $bad . " ❌  ". PHP_EOL .
                PHP_EOL . $output;

        TelegramChannel::send($output);
    }

    /**
     * Define the command's schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule $schedule
     * @return void
     */
    public function schedule(Schedule $schedule): void
    {
        // $schedule->command(static::class)->everyMinute();
    }
}
