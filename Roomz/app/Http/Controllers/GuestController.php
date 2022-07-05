<?php

namespace App\Http\Controllers;

use App\Http\Requests\Guest\EditGuestRequest;
use App\Http\Requests\Guest\StoreGuestRequest;
use App\Models\Guest;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        return Guest::showAll();
    }

    public function show(Guest $guest)
    {
        return $guest->showSingle();
    }

    public function store(StoreGuestRequest $request)
    {
        $guest = Guest::create($request->validated());
        return $guest;
    }

    public function delete(Guest $guest)
    {
        $guest->remove();
        return $guest;
    }

    public function update(EditGuestRequest $request, Guest $guest)
    {
        $guest->edit($request->validated());
        return $guest;
    }
}

