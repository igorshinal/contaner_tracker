<?php

namespace App\Http\Controllers\Webhooks;

use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Log;
use Telegram\Bot\Laravel\Facades\Telegram;

class TelegramController extends Controller
{
    public function process(UserRepository $users)
    {
        $update = Telegram::bot()->getWebhookUpdate();

        Log::debug('Telegram.process', [
            'update' => $update,
        ]);

        $message = $update->getMessage();

        $user = $message->getForm();

        $user = $users->store(
            $user->getId() ?? '',
            $user->getFirstName() ?? '',
            $user->getLastName() ?? '',
            $user->getUsername() ?? ''
        );

        if (hash_equals($message->getText(), '/start')) {
            Telegram::bot()->sendMessage([
                'chat_id' => $user->chat_id,
                'text' => 'Type number of container',
            ]);
        }


    }

}
