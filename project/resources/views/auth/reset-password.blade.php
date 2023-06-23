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
            color:gold;
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
        <form method="POST" action="{{ route('password.store') }}">
            @csrf
            @if(isset($email))
                <div>
                    <p>Kod zmiany hasła został wysłany na email: {{$email}}</p>
                </div>
            @elseif(isset(($request->session()->get('_old_input'))['email']))
                <div>
                    <p>Kod zmiany hasła został wysłany na twojego emaila: {{($request->session()->get('_old_input'))['email']}}</p>
                </div>
            @endif
            <!-- Password Reset Token -->
            <div class="form-group">
                <label for="token" class="form-label">{{ __('Otrzymany kod') }}</label>
                <input id="token" class="form-input" type="text" name="token" />
                <x-input-error :messages="$errors->get('token')" class="mt-2" />
            </div>

            {{-- <input type="hidden" name="token" value="{{ $request->route('token') }}"> --}}

            <!-- Email Address -->
            <div>
                @if(isset($email))
                    <input id="email" name="email" type="hidden" value="{{$email}}"/>
                @else
                    <input id="email" name="email" type="hidden" value="{{old('email')}}"/>
                @endif
            </div>

            <!-- Password -->
            <div class="form-group mt-4">
                <label for="password" class="form-label">{{ __('Hasło') }}</label>
                <input id="password" class="form-input" type="password" name="password"  />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="form-group mt-4">
                <label for="password_confirmation" class="form-label">{{ __('Potwierdź hasło') }}</label>
                <input id="password_confirmation" class="form-input" type="password" name="password_confirmation"  />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div>
                <button class="form-button">{{ __('Zresetuj Hasło') }}</button>
            </div>
        </form>
    </div>
</x-guest-layout>
