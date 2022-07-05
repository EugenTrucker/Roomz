<?php

namespace App\Http\Controllers;

use App\Http\Requests\Season\EditSeasonRequest;
use App\Http\Requests\Season\StoreSeasonRequest;
use App\Models\Season;
use Illuminate\Http\Request;

class SeasonController extends Controller
{
    public function index()
    {
        $seasons = Season::all();
        return $seasons;
    }

    public function show(Season $season)
    {
        return $season;
    }

    public function store(StoreSeasonRequest $request)
    {
        $season = Season::create($request->all());
        return $season;
    }

    public function destroy(Season $season)
    {
            $season->remove();
            return $season;
    }

    public function update(EditSeasonRequest $request, Season $season)
    {
        $season->edit($request->validated());
        return $season;
    }
}
