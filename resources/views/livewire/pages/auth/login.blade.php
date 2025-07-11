<?php

use App\Livewire\Forms\LoginForm;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component {
    public LoginForm $form;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        $this->redirectIntended(default: RouteServiceProvider::HOME, navigate: true);
    }
}; ?>

<div class="min-h-screen flex items-center justify-center bg-gradient-to-tr from-orange-50 to-white px-4">
    <div class="w-full max-w-md bg-white/90 backdrop-blur-md border border-orange-100 shadow-lg rounded-xl p-8">

        <h2 class="text-2xl font-bold text-center text-orange-600 mb-6">{{ __('login_to_your_account') }}</h2>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form wire:submit="login" class="space-y-6">

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('email')" />
                <x-text-input wire:model="form.email" id="email" class="block mt-1 w-full" type="email" required
                    autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('form.email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div>
                <x-input-label for="password" :value="__('password')" />
                <x-text-input wire:model="form.password" id="password" class="block mt-1 w-full" type="password"
                    required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('form.password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="flex items-center justify-between">
                <label for="remember" class="inline-flex items-center">
                    <input wire:model="form.remember" id="remember" type="checkbox"
                        class="rounded border-gray-300 text-orange-600 shadow-sm focus:ring-orange-500">
                    <span class="ms-2 text-sm text-gray-600">{{__('remember_me')}}</span>
                </label>

                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" wire:navigate
                        class="text-sm text-orange-500 hover:underline">
                        {{__('forget_password')}}@if (app()->getLocale() == 'ar' || config('app.locale') == 'ar')
                            ؟
                        @else
                            ?
                        @endif
                    </a>
                @endif
            </div>

            <div>
                <x-primary-button class="w-full justify-center bg-orange-500 hover:bg-orange-600">
                    {{ __('login') }}
                </x-primary-button>
            </div>

            <div class="flex items-center justify-center">
                <div>
                    <span>{{ __('dont_have_an_account') }}@if (app()->getLocale() == 'ar' || config('app.locale') == 'ar')
                            ؟
                        @else
                            ?
                        @endif
                    </span>
                    <a href="{{ route('register') }}" wire:navigate class="text-sm text-orange-500 hover:underline">
                        {{ __('create_account') }}
                    </a>
                </div>
            </div>

        </form>
    </div>
</div>
