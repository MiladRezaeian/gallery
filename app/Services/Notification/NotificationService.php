<?php

namespace App\Services\Notification;


use App\Services\Notification\Providers\Contracts\Provider;

/**
 * @method sendSms(App\Models\User $user, string $text)
 * @method sendEmail(App\Models\User $user, Illuminate\Mail\Mailable $mailable)
 */
class NotificationService
{

    public function __call($method, $arguments)
    {
        $providerPath = __NAMESPACE__ . '\Providers\\' . substr($method, 4) . 'Provider';
        if (!class_exists($providerPath)) {
            throw new \Exception("Provider $providerPath does not exist");
        }
        $providerInstance = new $providerPath(...$arguments);
        if (!is_subclass_of($providerInstance, Provider::class)) {
            throw new \Exception("Provider $providerInstance does not implement " . Provider::class);
        }

        return $providerInstance->send();
    }

}
