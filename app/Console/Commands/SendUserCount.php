<?php

namespace App\Console\Commands;
use App\Models\User;
use Mail;
use App\Mail\SendUserCountMail;

use Illuminate\Console\Command;

class SendUserCount extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:user-count';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        info('Testing schedule');
        //
        $count=User::whereDate("created_at",today())->count();
        Mail::to("devangrjoshi2003@gmail.com")->send(new SendUserCountMail($count));
    }
}
