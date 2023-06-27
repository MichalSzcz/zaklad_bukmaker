

<x-guest-layout>
    <style>
        body {
            background-color: #1a202c;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 40px;
            background-color: #2d3748;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            color: #F0E68C;
            font-weight: bold;
            font-size: 1.2rem;
        }

        .form-input {
            width: 100%;
            padding: 10px;
            background-color: #1a202c;
            color: #F0E68C;
            border: none;
            border-radius: 4px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
        }

        .form-input::placeholder {
            color: #F0E68C;
            opacity: 0.7;
        }

        .form-button {
            display: inline-block;
            padding: 12px 24px;
            background: linear-gradient(#fde910, #ffc72c);
            color: black;
            font-weight: bold;
            font-size: 1.2rem;
            text-transform: uppercase;
            border: none;
            border-radius: 4px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
            cursor: pointer;
        }

        .form-button:hover {
            background: linear-gradient(#ffc72c, #fde910);
        }

        .forgot-password {
            margin-top: 20px;
            text-align: left;
        }

        .forgot-password a {
            color: black;
            font-weight: bold;
            font-size: 1.2rem;
            text-decoration: none;
            background: linear-gradient(#fde910, #ffc72c);
            padding: 8px 12px;
            border-radius: 4px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
        }

        .forgot-password a:hover {
            background: linear-gradient(#ffc72c, #fde910);
        }
    </style>

    <div class="container">

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" title="" action="{{ route('register') }}">
            @csrf

            <!-- Nickname -->
            <div class="form-group">
                <label for="nickname" class="form-label" style="color: #F0E68C">Nazwa użytkownika</label>
                <input id="nickname" class="form-input" type="text" name="nickname" :value="old('nickname')" autofocus />
                <x-input-error :messages="$errors->get('nickname')" class="mt-2" />
            </div>

            <!-- Name -->
            <div class="form-group">
                <label for="name" class="form-label" style="color: #F0E68C">Imię</label>
                <input id="name" class="form-input" type="text" name="name" :value="old('name')" autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Surname -->
            <div class="form-group">
                <label for="surname" class="form-label" style="color: #F0E68C">Nazwisko</label>
                <input id="surname" class="form-input" type="text" name="surname" :value="old('surname')" autofocus />
                <x-input-error :messages="$errors->get('surname')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="form-group">
                <label for="email" class="form-label" style="color: #F0E68C">Email</label>
                <input id="email" class="form-input" type="text" name="email" :value="old('email')" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="form-group">
                <label for="password" class="form-label" style="color: #F0E68C">Hasło</label>
                <input id="password" class="form-input" type="password" name="password" autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Repeat Password -->
            <div class="form-group">
                <label for="repeat_password" class="form-label" style="color: #F0E68C">Powtórz hasło</label>
                <input id="repeat_password" class="form-input" type="password" name="repeat_password" />
                <x-input-error :messages="$errors->get('repeat_password')" class="mt-2" />
            </div>

            <!-- Phone number -->
            <div class="form-group">
                <label for="phone_number" class="form-label" style="color: #F0E68C">Numer telefonu</label>
                <input id="phone_number" class="form-input" type="text" name="phone_number" :value="old('phone_number')" />
                <x-input-error :messages="$errors->get('phone_number')" class="mt-2" />
            </div>

            <!-- Person number -->
            <div class="form-group">
                <label for="person_number" class="form-label" style="color: #F0E68C">Pesel</label>
                <input id="person_number" class="form-input" type="text" name="person_number" :value="old('person_number')" />
                <x-input-error :messages="$errors->get('person_number')" class="mt-2" />
            </div>

            <div class="form-group">
                <input id="terms" class="form-checkbox" type="checkbox" name="terms" />
                <label for="terms" style="color: red">Akceptuję Regulamin</label>
                <x-input-error :messages="$errors->get('terms')" class="mt-2" />
            </div>

            <div>
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    Masz już konto? Kliknij tutaj
                </a>

                <div class="ml-4">
                    <button class="form-button" type="submit">
                        Załóż konto
                    </button>
                </div>
            </div>
        </form>
    </div>
</x-guest-layout>
