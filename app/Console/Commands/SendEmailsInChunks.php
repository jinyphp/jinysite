<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use App\Jobs\SendUserMail;

class SendEmailsInChunks extends Command{
    protected $signature = 'emails:send-chunks';
    protected $description = 'Send emails in chunks to reduce server load';

    public function handle()
    {
        $chunkSize = 50; // Number of emails per chunk
        User::select('email')->chunk($chunkSize, function ($users) {
            $emails = $users->pluck('email')->toArray();
            SendUserMail::dispatch($emails);
        });

        $this->info('Emails queued for sending in chunks.');
    }
}
