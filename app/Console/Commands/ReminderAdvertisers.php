<?php

namespace App\Console\Commands;

use App\Models\Add;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class ReminderAdvertisers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'reminder:advertisers';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'schedule a daily email at 08:00 PM that will be sent to advertisers who have ads the next day as a remainder';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
     
        $tomorrow = date("Y-m-d", strtotime("+1 day"));
        $adds = Add::where('start_date', $tomorrow)->get();
        foreach ($adds as $add) {
            $email= $add->user()->email;
            Mail::raw("Hello Your add Will start Tomorrow", function ($message) use ($email) {
                $message->from('saquib.gt@gmail.com');
                $message->to($email)->subject('Advertisers Reminder');
            });
        }
        $this->info('schedule a daily email at 08:00 PM that will be sent to advertisers who have ads the next day as a remainder');
        return 0;
    }
}
