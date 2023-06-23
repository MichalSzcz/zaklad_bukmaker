@props(['messages'])
@if (isset($messages))
    <ul {{ $attributes->merge(['class' => 'text-sm text-red-600 space-y-1']) }}>
        @foreach ((array) $messages as $message)
            @if($message == 'name jest wymagane')
                <li class='error'>{{'Imię jest wymagane'}}</li>
            @elseif($message == 'surname jest wymagane')
                <li class='error'>{{'Nazwisko jest wymagane'}}</li>
            @elseif($message == 'nickname jest wymagane')
                <li class='error'>{{'Nazwa użytkownika jest wymagana'}}</li>
            @elseif($message == 'password jest wymagane')
                <li class='error'>{{'Hasło jest wymagane'}}</li>
            @elseif($message == 'repeat password jest wymagane')
                <li class='error'>{{'Powtórz hasło jest wymagane'}}</li>
            @elseif($message == 'phone number jest wymagane')
                <li class='error'>{{'Numer telefonu jest wymagany'}}</li>
            @elseif($message == 'person number jest wymagane')
                <li class='error'>{{'Numer PESEL jest wymagany'}}</li>
            @elseif($message == ' jest wymagane')
                <li class='error'>{{'Musisz zaakceptować regulamin'}}</li>
            @elseif($message == 'The email format is invalid.')
                <li class='error'>{{'Nieprawidłowy format adresu email'}}</li>
            @elseif($message == 'The password format is invalid.' || $message == 'password musi mieć przynajmniej 8 znaków.')
                <li class='error'>{{'Hasło musi zawierać przynajmniej 8 znaków, w tym wielką literę, małą literę, cyfrę i znak specjalny'}}</li>
            @elseif($message == 'Nie masz 18 lat')
                <li class='error'>{{'Musisz mieć ukończone 18 lat'}}</li>
            @elseif($message == 'The repeat password and password must match.')
                <li class='error'>{{'Hasła muszą być takie same !'}}</li>
            @elseif($message == 'eleven characters required')
                <li class='error'>{{'Numer PESEL musi zawierać 11 cyfr'}}</li>
            @elseif($message == 'not numeric values')
                <li class='error'>{{'Podaj poprawny numer PESEL'}}</li>
            @elseif($message == 'wymagany token')
                <li class="error">{{'Otrzymany kod jest wymagany'}}</li>
            @elseif($message == 'password confirmation jest wymagane')
                <li class="error">{{'Potwierdzenie hasła jest wymagane'}}</li>
            @elseif($message == 'password różni się od pola Potwierdź password.')
                <li class="error">{{'Hasło różni się od potwierdzenia hasła.'}}</li>
            @elseif($message == 'The amount must be a number.')
                <li class="error">{{'Podaj prawidłową kwotę.'}}</li>
            @elseif($message == 'amount jest wymagane')
                <li class="error">{{'Proszę podać kwotę.'}}</li>
            @endif

        @endforeach
    </ul>
@endif
