<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SBC </title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        body {
            font-family: 'Nunito', sans-serif;
            background: #1a202c;
            color: #1B1E21;
        }

        .small-icon {
            width: 10%;
            margin-right: 10px;
        }


        .ads_img {
            width: 100px;
        }
        .section{
            color: #F0E68C;
        }
        li{
            color:#F0E68C;
            font-size: 13px;
        }
        .ads_img{
            text-align: left;
            width:200px;
            height:200px;
        }
        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(100px, 1fr));
            justify-items: center;
            grid-gap: 10px;
            width:50%;
            margin: 200px auto auto;
        }

         h1 {
             margin: 250px auto auto;
         }


    </style>
</head>
<body>
@include("partial.header")
<div class="relative justify-center" style="text-align: justify; width:50%; margin: 250px auto auto;">
    <div style="text-align: justify;">
        <h3 style="text-align: left; font-size: 15px; font-weight: bold; color: yellow;"></h3>
        <section id="O_nas"></section>
        <h1>  </h1>
        <h1 style="color: #F0E68C;text-align: center;">Witamy w Sport Bet Chellenge</h1>

        <div class="section">
            <h2>Odkryj pasję zakładów sportowych i dołącz do naszej społeczności graczy, którzy czerpią radość z emocji sportowych wydarzeń i szansy na wygraną.</h2>
        </div>

        <div class="section">
            <h2>Nasza historia:</h2>
            <p>Od zaczątków do lidera w zakładach sportowych. Dowiedz się, jak zaczęliśmy jako mała firma i rozwinęliśmy się w jednego z najpopularniejszych bukmacherów w branży. Przeżyjmy razem tę niezwykłą podróż!</p>
        </div>

        <div class="section">
            <h2>Rodzaje zakładów:</h2>
            <p>Oferujemy szeroki wybór rodzajów zakładów, abyś mógł znaleźć idealne opcje dla siebie. Od tradycyjnych zakładów na zwycięzcę do zakładów specjalnych i zakładów na żywo, mamy wszystko, czego potrzebujesz, aby podkręcić emocje podczas oglądania sportu.</p>
        </div>

        <div class="section">
            <h2>Bezpieczeństwo i uczciwość:</h2>
            <p>Jesteśmy zobowiązani do zapewnienia bezpiecznej i uczciwej platformy dla naszych graczy. Wykorzystujemy najnowocześniejsze technologie, aby chronić twoje dane i zapewnić sprawiedliwe warunki gry. Z nami możesz grać w pełnym spokoju.</p>
        </div>

        <div class="section">
            <h2>Promocje i bonusy:</h2>
            <p>Ciesz się naszymi atrakcyjnymi promocjami i bonusami, które dodatkowo podnoszą dreszczyk emocji podczas gry. Oferujemy specjalne oferty powitalne, darmowe zakłady, podwyższone kursy i wiele więcej!</p>
        </div>
    </div>

</div>
<section id="kontakt"></section>

<div style="text-align: justify; width:50%; margin: 200px auto auto;">
    <h3 style="text-align: center; color: #F0E68C;">KONTAKT</h3>
    <p style=" text-align: justify; color:#F0E68C; font-size: 13px;"></p>
    <ol style="text-align: left;">

        <ul>
            <li style="font-size: 20px;">Adres siedziby: ulica 3-Maja 69, Kraków, 30-243</li>
            <li style="font-size: 20px;">Adres siedziby: ulica Franciszkańska 96, Jasło, 38-200</li>
            <li style="font-size: 20px;">Telefon: +48 512987361</li>
            <li style="font-size: 20px;">Email: małyptaszek@gmail.pl</li>
            <li style="font-size: 20px;">Strona internetowa: www.SBC.pl</li>
            <li style="font-size: 20px;">Nasi specjaliści są gotowi odpowiedzieć na Twoje pytania i zapewnić Ci doskonałą obsługę.</li>
        </ul>


        </ul>
        </div>

    </ol>
</div>
<div class="grid-container">
@auth
    @if(!$user->premium)
        <div id="ads_1"><img class="ads_img" src="{{ asset('img/ads/A'.mt_rand(1, 10).'.png') }}" alt="Ads icon"></div>
        <div id="ads_2"><img class="ads_img" src="{{ asset('img/ads/A'.mt_rand(1, 10).'.png') }}" alt="Ads icon"></div>
            <div id="ads_2"><img class="ads_img" src="{{ asset('img/ads/A'.mt_rand(1, 10).'.png') }}" alt="Ads icon"></div>
            <div id="ads_2"><img class="ads_img" src="{{ asset('img/ads/A'.mt_rand(1, 10).'.png') }}" alt="Ads icon"></div>

        @endif
@else
    <div class="ads_1"><img class="ads_img" src="{{ asset('img/ads/A'.mt_rand(1, 10).'.png') }}" alt="Ads icon"></div>
    <div class="ads_2"><img class="ads_img" src="{{ asset('img/ads/A'.mt_rand(1, 10).'.png') }}" alt="Ads icon"></div>
    <div class="ads_3"><img class="ads_img" src="{{ asset('img/ads/A'.mt_rand(1, 10).'.png') }}" alt="Ads icon"></div>
@endauth
</div>
<div style="text-align: justify; width:50%; margin: 200px auto auto;">
    <h3 style="text-align: center; color: #F0E68C;">Regulamin</h3>
    <p style=" text-align: justify; color:#F0E68C; font-size: 14px;">Udział w grze jest dozwolony jedynie po zaakceptowaniu poniższych zasad:</p>
    <ol style="text-align: left;">
        <li style="font-size: 14px;">a) "SportBetChallenge" - platforma internetowa dostępna pod adresem [adres strony], świadcząca usługi związane z obstawianiem meczów sportowych.</li>
        <li style="font-size: 14px;">"Użytkownik" - osoba korzystająca z usług SportBetChallenge poprzez założenie konta i/lub logowanie się na stronie.</li>
        <li style="font-size: 14px;">"leagues" - grupa użytkowników tworzona na SportBetChallenge w celu rywalizacji w obstawianiu meczów.</li>
        <li style="font-size: 14px;">Podmiotem prawnym SportBetChallenge jest SBC sp.z.o.o.</li>
        <li style="font-size: 14px;">"Punkty" - wirtualna waluta przyznawana użytkownikom w zależności od ich aktywności i wyników w obstawianiu meczów.</li>
        <li style="font-size: 14px;">"Mecz" - wydarzenie sportowe, na które użytkownicy mogą typować wynik.</li>
    </ol>

    <section id="Regulamin"></section>
</div>



</body>
</html>
