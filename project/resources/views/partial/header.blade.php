<script>


        let isDisc = false;

        function scrollToBottom(id) {
        let element = document.getElementById(id);
        element.scrollIntoView({ behavior: 'smooth' });
    }

        function showDisciplines() {
        let menu = document.getElementById("DisciplineMenu");
        if (isDisc) {
        menu.style.opacity = "0";
        menu.style.transform = "scale(0.8)";
        setTimeout(function() {
        menu.style.display = "none";
    }, 500);
        isDisc = false;
    } else {
        menu.style.display = "grid";
        setTimeout(function() {
        menu.style.opacity = "1";
        menu.style.transform = "scale(1)";
    }, 100);
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
        width:100px;
    }

    .navbar {
        position: fixed;
        top: 50px;
        left: 50px;
        width: 200px;
        padding: 10px;
        background-color: #333; /* ciemny kolor tła */
        z-index: 1;
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2); /* cień */
    }

    .navbar a {
        display: block;
        color: #fff; /* kolor tekstu */
        text-decoration: none;
        padding: 10px;
        margin-bottom: 10px;
        transition: background-color 0.3s ease; /* płynne przejście */
    }

    .navbar a:hover {
        background-color: #555; /* kolor tła po najechaniu myszką */
    }

    .navbar a.active {
        background-color: #777; /* kolor tła dla aktywnego linku */
        color: #fff; /* kolor tekstu dla aktywnego linku */
    }

    #MainLogoImg {
        position: absolute;
        width:200px;
        height:200px;
        left: 50%;
        top:10%;
        transform: translate(-50%, -50%);
    }


    #user_icon_image {
        width: 100px;
        padding: -20px;
        position: fixed;
        top:50px;
        right: 50px;
    }

    #DisciplineMenu {
        position: fixed;
        top: 60px;
        left: 250px;
        width: 160px;
        height: 50vh;
        display: none;
        background-color: #333;
        z-index: 1;
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2); /* cień */
        padding: 5px;
        opacity: 0;
        transform: scale(0.2);
        transition: opacity 0.5s ease, transform 0.5s ease, width 0.5s ease, height 0.5s ease;

    }
    #DisciplineMenu > a {
        display: block;
        color: #fff; /* kolor tekstu */
        text-decoration: none;
        padding: 8px;
        margin-bottom: 5px;
        transition: background-color 0.3s ease; /* płynne przejście */
    }
    #DisciplineMenu > a:hover {
        background-color: #555; /* kolor tła po najechaniu myszką */
    }
    #DisciplineMenu > a.active {
        background-color: #777; /* kolor tła dla aktywnego linku */
        color: #fff; /* kolor tekstu dla aktywnego linku */
    }
    .contactother{
        width: 100px;
        position: fixed;
        top: 220px;
        right: 50px;
        display: flex;
        flex-direction: column;
    }
    .contactother a:hover {
        background-color: #555; /* kolor tła po najechaniu myszką */
    }
    .contactother a{
        transition: background-color 0.3s ease; /* płynne przejście */

    }
    .contactother a.active {
        background-color: #777; /* kolor tła dla aktywnego linku */
        color: #fff; /* kolor tekstu dla aktywnego linku */
    }

    .wybor{
        display: flex;
        flex-direction: column;
    }
    .stankonta{
        width: 100px;
        position: fixed;
        color: #F0E68C; /* żółty */
        font-weight: bold;
        top:180px;
        right: 50px;
    }
    .contactother > a,
    .wybor > a{
        margin-top: 20px;
        color: #F0E68C; /* żółty */
        font-weight: bold;
        border-top: 1px solid #F0E68C; /* żółty */
        padding-top: 10px;
        text-decoration: none;
        right: 10px;
    }
    .contactother > a:not(:last-child),
    .wybor > a:not(:last-child){
        margin-bottom: 10px;
    }
    .logOrNot{
        position: fixed;
        top: 160px;
        right: 40px;
        width: 200px;
        padding: 10px;
        font-weight: bold;
    }
    #login_link{
        color:gold;
        width: 100px;
        padding: -20px;
        position: fixed;
        top:50px;
        right: 160px;
        color: #F0E68C; /* żółty */
        font-weight: bold;

    }
    #register_link{
        color:gold;
        width: 120px;
        padding: -20px;
        position: fixed;
        top:50px;
        right: 50px;
        color: #F0E68C; /* żółty */
        font-weight: bold;
        border-left: solid 1px #F0E68C;
        padding-left: 10px;

    }
    a{
        font-weight: bold;
        color:#F0E68C;
    }

</style>



@if (Route::has('login'))
    <div class="logOrNot">
        @auth
            <a id="UserIconA" href="{{ url('/account') }}"><img id="user_icon_image" src="{{ asset('img/userIcon.png') }}" alt="user icon"></a>
            <p class="stankonta">Stan konta: {{$user->deposit}}</p>

            @if(isset($premium_expire))
                <p class="stankonta">{{$premium_expire}}</p>
            @endif
            <form method="POST" action="{{ route('logout') }}" style="background: linear-gradient(#fde910, #ffc72c);">
                @csrf
                <x-primary-button class="kolor" style="float: right;">
                    {{ __('Wyloguj się') }}
                </x-primary-button>
            </form>
        @else
            <a id="login_link" href="{{ route('login') }}">Zaloguj się</a>
            @if (Route::has('register'))
                <a id="register_link" href="{{ route('register') }}">Zarejestruj się</a>
            @endif
        @endauth
    </div>
@endif


<style>
    #MainLogoImg {
        width: 400px;
        height: 400px;
        margin-top: 50px;
    }
</style>

<svg id="MainLogoImg" viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg">
    <image href="{{asset('img/SBC.svg')}}" width="100%" height="100%" />
</svg>


<div class="navbar">

    <div class="wybor">
        <a href="{{ url('/home') }}">Strona główna</a>
        <a href="{{ url('/bets') }}">Zakłady bukmacherskie</a>
        <a href="{{ url('/leagues') }}">Liga</a>
        <a href="{{ url('/results') }}">Wyniki</a>
    </div>


</div>

@if (count(explode('/', substr(url()->current(), 7))) == 1)
    <div class="contactother">
        <a onclick="scrollToBottom('O_nas')">O nas</a>
        <a onclick="scrollToBottom('kontakt')">Kontakt</a>
        <a onclick="scrollToBottom('Regulamin')">Regulamin</a>
    </div>
@endif
