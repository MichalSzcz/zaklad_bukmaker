<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Nickname -->
        <div class="mt-4">
            <x-input-label for="nickname" :value="__('Nazwa użytkownika')" style="color: #fde910" />
            <x-text-input id="nickname" class="block mt-1 w-full" type="text" name="nickname" :value="old('nickname')" />
            <x-input-error :messages="$errors->get('nickname')" class="mt-2" />
        </div>


        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Imie')" style="color: #fde910"/>
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"  autofocus />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Surname -->
        <div>
            <x-input-label for="surname" :value="__('Nazwisko')" style="color: #fde910"/>
            <x-text-input id="surname" class="block mt-1 w-full" type="text" name="surname" :value="old('surname')"  autofocus />
            <x-input-error :messages="$errors->get('surname')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" style="color: #fde910"/>
            <x-text-input id="email" class="block mt-1 w-full" type="text" name="email" :value="old('email')"  />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>


        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Hasło')" style="color: #fde910"/>

            <x-text-input id="password" class="block mt-1 w-full"
                          type="password"
                          name="password"
                           autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Repeat Password -->
        <div class="mt-4">
            <x-input-label for="repeat_password" :value="__('Powtórz hasło')" style="color: #fde910"/>

            <x-text-input id="repeat_password" class="block mt-1 w-full"
                          type="password"
                          name="repeat_password"  />

            <x-input-error :messages="$errors->get('repeat_password')" class="mt-2" />
        </div>

        <!-- Phone number -->
        <div class="mt-4">
            <x-input-label for="phone_number" :value="__('Numer telefonu')" style="color: #fde910" />
            <x-text-input id="phone_number" class="block mt-1 w-full" type="text" name="phone_number" :value="old('phone_number')"  />
            <x-input-error :messages="$errors->get('phone_number')" class="mt-2" />
        </div>

        <!-- Person number -->
        <div class="mt-4">
            <x-input-label for="person_number" :value="__('Pesel')" style="color: #fde910"/>
            <x-text-input id="person_number" class="block mt-1 w-full" type="text" name="person_number" :value="old('person_number')"  />
            <x-input-error :messages="$errors->get('person_number')" class="mt-2" />
        </div>



        <div>
            <x-text-input id="terms" type="checkbox" name="terms" />
            <a href="{{ url('/#rules') }}" style="color: red">Akceptuję Regulamin</a>
            <x-input-error :messages="$errors->get('terms')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Kliknij tutaj jeśli masz już konto') }}
            </a>

            <div class="ml-4">
                <x-primary-button style="display: inline-block;">
                    {{ __('Załóż konto') }}
                </x-primary-button>
            </div>
        </div>








    </form>
</x-guest-layout>
