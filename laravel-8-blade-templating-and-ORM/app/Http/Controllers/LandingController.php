<?php

namespace App\Http\Controllers;

use App\Models\Clubs;
use App\Models\Managers;
use App\Models\Matches;
use App\Models\Players;
use App\Models\Stadiums;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        return view("pages.landing-page.index");
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function clubs() {
        $clubs = Clubs::orderBy("thropy", "desc")->get();

        return view("pages.landing-page.clubs", ["clubs" => $clubs]);
    }

    public function managers() {
        $managers = Managers::all();

        return view("pages.landing-page.managers", ["managers" => $managers]);
    }

    public function players() {
        $players = Players::all();

        return view("pages.landing-page.players", ["players" => $players]);
    }

    public function stadiums() {
        $stadiums = Stadiums::all();

        return view("pages.landing-page.stadiums", ["stadiums" => $stadiums]);
    }

    public function matches() {
        $matches = Matches::all();

        return ["matches" => $matches];
    }
}
