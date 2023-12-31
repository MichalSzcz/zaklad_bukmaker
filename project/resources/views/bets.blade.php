<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

$matches = DB::table('events')->get();
$s = str_repeat('0', count($matches));  ?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SBC Bets</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        .abutton {
            padding: 10px;
            border-radius: 5px;

            border: 1px solid #F0E68C;
            padding: 5px;
            color:#F0E68C;


        }
        .abutton:hover {
            background-color: gray;


        }
        .bet-button-div {
            display: grid;
            grid-template-columns: 40% 20% 40%;
            column-gap: 3px;
            row-gap: 3px;

        }

        span {
            float: right;
            color: #F0E68C;

        }
        .clicked {
            background-color: #4CAF50;
            border: 1px solid #ccc;
            padding: 5px;
        }
        .relative {

            padding: 40px;
            background-color: #2d3748;
            border-radius: 8px;

        }

        body {

            font-family: 'Nunito', sans-serif;
            background: #1a202c;
            color: #1B1E21;

        }
        h3,h4, p,a{
            color:#F0E68C;
        }
       h3{
            fotn-size:20px;
            border-top-color: #F0E68C;
            border-top: solid 1px;
           border-bottom-color:#F0E68C;
           border-bottom:solid 1px;
        }

        a{
        }
    </style>
    <script>
        let coupon = "";
        function addToCoupon(option) {
            coupon = document.getElementById("bet_code_i").value;
            let optionID = document.getElementById(option).parentElement.id.substring(7);
            optionID = parseInt(optionID);
            let matchID = option.substring(3);
            if (coupon[optionID] !== '0') {
                for (let i=0; i<6; i++)
                {
                    let but_id = "A"+(i+1)+"_"+matchID;
                    document.getElementById(but_id).classList.remove('clicked');
                }
            }
            //coupon[optionID] = option.substring(1,1);
            if (parseInt(coupon[optionID]) == parseInt(option.substring(1,2))) {
                coupon = coupon.substring(0, optionID) + 0 + coupon.substring(optionID + 1);
                document.getElementById("bet_code_i").value = coupon;
                return;
            }
            coupon = coupon.substring(0, optionID) + option.substring(1,2) + coupon.substring(optionID + 1);
            document.getElementById(option).classList.add('clicked');
            document.getElementById("bet_code_i").value = coupon;
        }


    </script>
</head>
<body>
@include('partial.header')

<div class="relative justify-center" style="justify-content: center; width:50%; margin: 300px auto auto;">
    <?php $i = 0;?>
    <?php $matches = DB::table('events')->where('status','like','upcoming')->get()?>

    @foreach($matches as $match)
        <?php $match = json_decode(json_encode($match), true);?>
            <?php $odds = DB::table('odds')->where('event_id','=',$match['id'])->get();?>
        <?php $odd = json_decode(json_encode($odds[$i]), true);?>
        <?php
            $draw = 1/$odd["win_op_1"] + 1/$odd["win_op_2"];
$draw = floor((1 - $draw)*100)/100;
if ($draw <= 0) {
    $draw = 0.05;
}
$draw = 1/$draw;
$draw = floor($draw*100)/100;

$odds1X = 1 - 1/$odd["win_op_2"];
if ($odds1X <= 0) {
    $odds1X = 0.05;
}
$odds1X = 1/$odds1X;
$odds1X = floor($odds1X*100)/100;

$odds2X = 1 - 1/$odd["win_op_1"];
if ($odds2X <= 0) {
    $odds2X = 0.05;
}
$odds2X = 1/$odds2X;
$odds2X = floor($odds2X*100)/100;

$notdraw = 1 - 1/$draw;
if ($notdraw <= 0) {
    $notdraw = 0.05;
}
$notdraw = 1/$notdraw;
$notdraw = floor($notdraw*100)/100;
?>

        *\
        <div id="match{{$i}}">
            <h3 style="text-align: left">{{$match["date"]}} {{substr($match["time"], 0, 5)}} {{$match["timezone"]}}</h3>
            <h4 style="text-align: left">{{$match["discipline"]}}</h4>
            <h4 style="text-align: left">{{$match["league"]}}, Runda: {{$match["round"]}}</h4>
            <p style="text-align: center">{{$match["opponent_1"]}} vs {{$match["opponent_2"]}}</p>
            <div id="buttons{{$i}}" class="bet-button-div">
                <a id="A1_{{$match["id"]}}" class="abutton" onclick="addToCoupon('A1_{{$match["id"]}}')">{{$match["opponent_1"]}} <span>{{$odd["win_op_1"]}}</span></a>
                <a id="A2_{{$match["id"]}}" class="abutton" onclick="addToCoupon('A2_{{$match["id"]}}')">X <span>{{$draw}}</span></a>
                <a id="A3_{{$match["id"]}}" class="abutton" onclick="addToCoupon('A3_{{$match["id"]}}')">{{$match["opponent_2"]}}<span>{{$odd["win_op_2"]}}</span></a>

                <a id="A4_{{$match["id"]}}" class="abutton" onclick="addToCoupon('A4_{{$match["id"]}}')">1X <span>{{$odds1X}}</span></a>
                <a id="A5_{{$match["id"]}}" class="abutton" onclick="addToCoupon('A5_{{$match["id"]}}')">12 <span>{{$notdraw}}</span></a>
                <a id="A6_{{$match["id"]}}" class="abutton" onclick="addToCoupon('A6_{{$match["id"]}}')">X2 <span>{{$odds2X}}</span></a>
            </div>
        </div>
        <br>
        <?php $i += 1; ?>
    @endforeach
    <br>
    @if ($i == 0)
        <div style="text-align: center;">
            <h4 style="font-size: 24px;">Niestety, w najbliższym czasie nie są rozgrywane żadne mecze.</h4>
        </div>


    @else
        <div style="text-align: center;">
            <form method="POST" action="{{ route("bets.bet") }}">
                @csrf
                <div class="relative">
                    <x-input-label class='in' id="amount" for="amount" :value="__('Stawka')" style="color: #F0E68C;"/>
                    <x-text-input id="amount" class="block mt-1 w-full" type="text" name="amount" min="0" style="background: #F0E68C; color: black;" />
                    <div style="margin: auto">
                        <x-input-error :messages="$errors->get('amount')" class="mt-2" />
                        <x-input-error :messages="$errors->get('empty')" class="mt-2" />
                    </div>
                </div>
                <div>
                    <x-input-label class='in' id="bet_code" for="bet_code" :value="__('Kod zakładu')" style="color: #F0E68C;"/>
                    <x-text-input id="bet_code_i" class="block mt-1 w-full" type="text" name="bet_code" value="{{ $s }}" style="background: #F0E68C; color: black;" />
                    <x-input-error :messages="$errors->get('bet_code')" class="mt-2" />
                </div>

                <x-primary-button style="background:  linear-gradient(#fde910, #ffc72c); color: black;">
                    {{ __('Postaw kupon') }}
                </x-primary-button>

                <br><br>
            </form>
        </div>


    @endif
</div>

</body>
</html>
