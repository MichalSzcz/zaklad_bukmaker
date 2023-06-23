
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
        <div class="mb-4 text-sm text-gray-600">
            {{ __('This is a secure area of the application. Please confirm your password before proceeding.') }}
        </div>

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <!-- Password -->
            <div class="form-group">
                <label for="password" class="form-label">{{ __('Hasło') }}</label>
                <input id="password" class="form-input" type="password" name="password" required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div>
                <button class="form-button">{{ __('Potwierdź') }}</button>
            </div>

        </form>
    </div>
</x-guest-layout>
