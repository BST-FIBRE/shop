<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        VerifyEmail::toMailUsing(function (User $user, string $verificationUrl) {
            return (new MailMessage)
                ->subject( 'Vérifier votre adresse e-mail')
                ->greeting('Vérifier mon e-mail !')
                ->line('Veuillez s\'il vous plaît confirmer que cet adresse e-mail vous appartient afin de créer votre compte sur la boutique B.S.T Fibre')
                ->action('Confirmer mon e-mail', $verificationUrl)
                ->line('Si vous n\'êtes pas à l\'origine de cette demande, aucune action n\'est nécessaire.');
        });

    }
}
