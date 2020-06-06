<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Telegram\Bot\Laravel\Facades\Telegram;

class UpdateTelegramWebhook extends Command
{
    protected $signature = 'telegram:webhook:update';

    protected $description = 'Update data webhook';


    public function handle()
    {
        $url = str_replace('http://', 'https://', route('telegram.webhook'));
        $result = Telegram::bot()->setWebhook([
            'url' => $url,
        ]);

        if (!$result->getResult()) {
            $this->error('Webhook устаноить не удалось' . $result->getDecodedBody()['description']);
            return;
        }

        $this->info('Webhook был успешно установлен');
    }
}
