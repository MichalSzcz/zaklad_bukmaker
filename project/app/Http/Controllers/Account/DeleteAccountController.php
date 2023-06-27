<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Models\Bet;
use App\Models\BlikCode;
use App\Models\Premium;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class DeleteAccountController
{
    public function index(): View
    {
        $user = Auth::user();
        if ($user instanceof User) {
            if (!$user->premium) {
                return view('account/delete')->with('user', $user)
                    ->with('sentence', '"3.5 prosimy."');
            }
        }
        return view('account/delete');
    }

    public function store(Request $request): RedirectResponse
    {
        if (!$request['sentence']) {
            return back()->withErrors(['sentence' => 'Bład w zdaniu potwierdzającym usunięcie konta']);
        }
        if (strcmp(strval($request['sentence']), strval($request['pattern']))) {
            return back()->withErrors(['sentence' => 'Bład w zdaniu potwierdzającym usunięcie konta']);
        }

        $user = Auth::user();
        if ($user instanceof User) {
             {
                DB::table('users')->where('id', $user->id)->delete();
                $user_bets = DB::table('bets')->where('user_id', $user->id);
                foreach ($user_bets->get() as $bet) {
                    if ($bet instanceof Bet) {
                        DB::table('bet_events')->where('bet_id', $bet->id)->delete();
                    }
                }
                $user_bets->delete();
            }
        }
        return redirect()->route('home')->with('status', 'Konto pomyślnie usunięte. Żegnaj!');
    }
}
