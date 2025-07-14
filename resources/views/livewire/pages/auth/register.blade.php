<?php

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';
    public string $plan = '';

    /**
     * Handle an incoming registration request.
     */
    public function mount(){
        $this->plan = request()->query('plan');

    }
    public function register(): void
    {
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
            'plan' =>  ['required', 'string', 'max:255'],
        ]);
        $validated['plan'] = $this->plan;
        $validated['password'] = Hash::make($validated['password']);
        
        event(new Registered($user = User::create($validated)));
        //$user->save();
        Auth::login($user);

        $this->redirect(RouteServiceProvider::HOME, navigate: true);
    }
}; ?>

<div class="min-h-screen flex items-center justify-center bg-gradient-to-tr from-orange-50 to-white px-4">
    <div class="w-full max-w-md bg-white/90 backdrop-blur-md border border-orange-100 shadow-lg rounded-xl p-8">

        <h2 class="text-2xl font-bold text-center text-orange-600 mb-6">{{ __('login_to_your_account') }}</h2>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <form wire:submit="register">
            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input wire:model="name" id="name" class="block mt-1 w-full" type="text" name="name" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input wire:model="email" id="email" class="block mt-1 w-full" type="email" name="email" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input wire:model="password" id="password" class="block mt-1 w-full"
                    type="password"
                    name="password"
                    required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('confirm_Password')" />

                <x-text-input wire:model="password_confirmation" id="password_confirmation" class="block mt-1 w-full"
                    type="password"
                    name="password_confirmation" required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4"></div>

            <x-primary-button class="w-full justify-center bg-orange-500 hover:bg-orange-600">
                {{ __('register') }}
            </x-primary-button>
            <div class="flex items-center justify-center mt-4">
                {{ __('already_registered?') }} &ThinSpace;
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}" wire:navigate>
                    {{ __('login') }}
                </a>
            </div>
        </form>
    </div>
</div>
