<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Mail\MembershipExpire;
use App\Models\Membership;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;
class SecondMembershipReminder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'membershipremindersecond:email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // $reminderDate = Carbon::now()->addWeeks(2)->startOfWeek()->setTimezone('America/Los_Angeles')->setHour(15)->setMinute(0)->setSecond(0);
        $reminderDate = Carbon::now()->addWeeks(2);

        $membershipExpireUsers= Membership::whereDate('end_date', $reminderDate)->with('user')->get();
        // $details = [
        //     // 'name' => $messages->name,
        //     'user_name' =>  $request->name,
        //     'school_name'=> $request->school_name
        // ];
       
        foreach ($membershipExpireUsers as $users) {
           
            $details = [


                'coach_name' =>  $users->user->name,
                'assist_coach_name'=> $users->user->assistant_coach_name,
                'expiration_date'=> date('Y-m-d', strtotime($users->end_date)),
                'school_name'=> $users->user->school_name
                
            ];
           
            Mail::to($users->user->email)->send(new MembershipExpire($details));
            Mail::to($users->user->assistant_coach_email_address)->send(new MembershipExpire($details));

        }
    }
}