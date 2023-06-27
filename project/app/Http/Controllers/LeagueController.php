<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;


class LeagueController
{
    public function store(Request $request): RedirectResponse | View
    {
        $user = Auth::user();
        $i=0;
        DB::table('league')->insert(['name' => $request->groupName]);
        $leg=DB::table('league')->get();
        $leg=json_decode(json_encode($leg[$i]), true);
        DB::table('league_members')->insert(['user_id' => $user['id'],'league_id' => $leg['id'],"league_name"  => $leg['name'],"points" => $user['deposit']]);
        return redirect('home');
    }
}
