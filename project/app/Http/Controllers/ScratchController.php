<?php

namespace App\Http\Controllers;

use App\Models\Premium;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ScratchController extends Controller
{
    public function index(): RedirectResponse|View
    {
        $user = Auth::user();
        return view('scratchcard');
    }

    public function store(Request $request): RedirectResponse | View
    {
        $lastID = -1;
        $user = Auth::user();
        $check = DB::table('users')->where('nickname', 'LIKE', $request->name)->first();
        $users=DB::table('users')->join('league_members', 'users.id', '=', 'league_members.user_id')->get();
        foreach ($users as $us) {
            $us=json_decode(json_encode($us), true);
            $w=DB::table('users')->join('league_members', 'users.id', '=', 'league_members.user_id')->where('nickname', 'like', $request->name)->get();
            if ($check == null) {
                return redirect('scratchcard')->with('status', "zly");
            } else {
                DB::table('league_members')->insert(['user_id' => $check->id,
                    'league_id' => $us['league_id'],
                    'league_name' => $us['league_name'],
                'points' => 0]);
            }
        }
        return redirect('leagues');
    }

    private function didTheyWin(String $sid): bool
    {
        $sum = [];
        $numbers = str_split($sid);
        foreach ($numbers as $number) {
            if (intval($number) >= 5) {
                $sum[] = intval($number);
            }
        }
        if ($sum[0] == $sum[1] and $sum[0] == $sum[2]) {
            return true;
        }
        return false;
    }
}
