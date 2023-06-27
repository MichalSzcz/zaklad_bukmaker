
<x-guest-layout>
    <style>
        body {
            background-color: #1a202c;
            font-family: Arial, sans-serif;
        }    .container {
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

        <form method="POST" title="" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input id="email" class="form-input" type="text" name="email" :value="old('email')" placeholder="Your email" autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="form-group">
                <label for="password" class="form-label">Hasło</label>
                <input id="password" class="form-input" type="password" name="password" placeholder="Your password" autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />

            </div>

            <div class="form-group">
                @if (Route::has('password.request'))
                    <div class="forgot-password">
                        <a href="{{ route('password.request') }}">Zapomniałeś hasła?</a>
                    </div>
                @endif
            </div>

            <div>
                <button class="form-button">Zaloguj się</button>
            </div>

        </form>
    </div>
</x-guest-layout>



