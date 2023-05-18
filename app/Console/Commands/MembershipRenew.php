<?php

namespace App\Console\Commands;
use App\Models\User;
use App\Mail\MembershipExpire;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class MembershipRenew extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'membership:email';

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
        $users = User::all();

if ($users->count() > 0) {
foreach ($users as $user) {
    Mail::to($user->email)->send(new MembershipExpire($user));
}
}

return 0;
    }
}
