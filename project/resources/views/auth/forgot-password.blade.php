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
            color: gold;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            color: #fde910;
            font-weight: bold;
            font-size: 1.2rem;
        }

        .form-input {
            width: 100%;
            padding: 10px;
            background-color: #1a202c;
            color: #fde910;
            border: none;
            border-radius: 4px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
        }

        .form-input::placeholder {
            color: #fde910;
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
    </style>

    <div class="container">
        <div>
            {{ __('Nie pamiętasz hasła? Nie ma problemu. Podaj nam swój adres email, a wyślemy Ci link do zmiany hasła na nowe.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div class="form-group">
                <label for="email" class="form-label">{{ __('Email') }}</label>
                <input id="email" class="form-input" type="text" name="email" :value="old('email')" autofocus placeholder="Twój email" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div>
                <button class="form-button" type="submit">
                    {{ __('Zatwierdź') }}
                </button>
            </div>
        </form>
    </div>
</x-guest-layout>
