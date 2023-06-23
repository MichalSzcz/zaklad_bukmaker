<script>
    let isDisc = false;
    function scrollToBottom(id) {
        let element = document.getElementById(id);
        element.scrollIntoView(false);
    }
    function showDisciplines() {
        let menu = document.getElementById("DisciplineMenu")
        if (isDisc) {
            menu.style.display = "none";
            isDisc = false;
        }
        else {
            menu.style.display = "grid";
            isDisc = true;
        }
    }
</script>

<style>
    .big-letters {
        font-size: 30px;
        color: #F0E68C; /* żółty */
    }
    .medium-letters {
        font-size: 20px;
        color: #F0E68C; /* żółty */
    }
    .kolor {
        background: linear-gradient(#fde910, #ffc72c);
    }

    .navbar {
        margin-left: auto;
        margin-right: auto;
        overflow: hidden;
        background-color: #333d4f; /* szary */
        position: fixed; /* Set the navbar to fixed position */
        top: 10px; /* Position the navbar at the top of the page */
        height: 170px;
        width: 100%;
        z-index: 1;
    }
    #MainLogoImg {
        width: 90px;
        display: inline-block;
        vertical-align: middle;
    }

    #user_icon_image {
        width: 150px;
        padding: -20px;
    }

    #DisciplineMenu {
        position: fixed;
        top: 160px;
        left: 720px;
        width: 400px;
        height: 80px;
        display: none;
        grid-template-columns: 33% 33% 33%;
        z-index: 2;
        border: 3px solid #F0E68C; /* żółty */
        border-radius: 3px;
        padding: 4px;
        background-color: #333d4f; /* szary */
    }
    #DisciplineMenu > a {
        font-size: 20px;
        text-align: center;
        color: #F0E68C; /* żółty */
    }



</style>
<div id="DisciplineMenu">
    <a href="{{url('/bets/football')}}">Cycki</a>
    <a href="{{url('/bets/volleyball')}}">Konia</a>
    <a href="{{url('/bets/dart')}}">Dart</a>
    <a href="{{url('/bets/handball')}}">Piłka Ręczna</a>
    <a href="{{url('/bets/basketball')}}">Koszykówka</a>
    <a href="{{url('/bets/esport')}}">E-sport</a>
</div>
<div class="navbar">
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a id="UserIconA" href="{{ url('/account') }}"><img id="user_icon_image" src="{{ asset('img/userIcon.png') }}" alt="user icon"></a>
                <p class="text-sm text-gray-700 dark:text-gray-500 medium-letters">Stan konta: {{$user->deposit}}</p>

                @if(isset($premium_expire))
                    <p class="text-sm text-gray-700 dark:text-gray-500 medium-letters">{{$premium_expire}}</p>
                @endif
                <form method="POST" action="{{ route('logout') }}" style="background: linear-gradient(#fde910, #ffc72c);">
                    @csrf
                    <x-primary-button class="kolor">
                        {{ __('Wyloguj się') }}
                    </x-primary-button>
                </form>

            @else
                <a id="login_link" href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline medium-letters">Zaloguj się</a>

                @if (Route::has('register'))
                    <a id="register_link" href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline medium-letters">Zarejestruj się</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="hidden fixed top-0 right-200 px-6 py-4 sm:block">
        <img id="MainLogoImg" src="{{asset('img/KGKMBets.svg')}}" alt="Logo">
    </div>

    <br><br><br><br>
    <div class="hidden fixed sm:block px-6 py-5" style="z-index: 1; border-bottom: 2px solid #F0E68C; /* żółty */ background-color: #333d4f; /* szary */ margin-left: 4px">
        <a class="text-sm text-gray-700 dark:text-gray-500 big-letters" style="margin-right: 15px;" href="{{ url('/home') }}">Strona główna</a>
        <a class="text-sm text-gray-700 dark:text-gray-500 big-letters" style="margin-right: 15px;" href="{{ url('/bets') }}">Zakłady bukmacherskie</a>
        <a class="text-sm text-gray-700 dark:text-gray-500 big-letters" style="margin-right: 15px;" href="{{ url('/specialoffers') }}">Zakłady specjalne</a>
        <a class="text-sm text-gray-700 dark:text-gray-500 big-letters" style="margin-right: 15px;" href="#" onclick="showDisciplines()">Dyscypliny</a>
        <a class="text-sm text-gray-700 dark:text-gray-500 big-letters" style="margin-right: 15px;" href="{{ url('/results') }}">Wyniki</a>

        @auth
                <?php if (isset($user) && $user->premium) {?>
            <a class="text-sm text-gray-700 dark:text-gray-500 big-letters" style="margin-right: 10px;" href="{{ url('/livebets') }}">Zakłady live</a>
            <a class="text-sm text-gray-700 dark:text-gray-500 big-letters" style="margin-right: 10px;" href="{{ url('/scratchcard') }}">Zdrapka</a>
            <?php } ?>
        @endauth
    </div>
    <br><br>
    @if (count(explode('/', substr(url()->current(), 7))) == 1)
        <br>
        <div class="hidden fixed sm:block" style="margin-left: 10%;">
            <a class="text-sm text-gray-700 dark:text-gray-500 medium-letters underline" style="margin-right: 10px;" onclick="scrollToBottom('us')">O nas</a>
            <a class="text-sm text-gray-700 dark:text-gray-500 medium-letters underline" style="margin-right: 10px;" onclick="scrollToBottom('contact')">Kontakt</a>
            <a class="text-sm text-gray-700 dark:text-gray-500 medium-letters underline" style="margin-right: 10px;" onclick="scrollToBottom('rules')">Regulamin</a>
        </div>
    @endif
</div>
