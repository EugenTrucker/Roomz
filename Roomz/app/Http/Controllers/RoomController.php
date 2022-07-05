<?php

namespace App\Http\Controllers;


use App\Http\Requests\Room\EditRoomRequest;
use App\Http\Requests\Room\StoreRoomRequest;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::all();
        return $rooms;
    }

    public function show(Room $room)
    {
        return $room;
    }

    public function store(StoreRoomRequest $request)
    {
        $create_values = ['is_cleaned' => 1, 'is_reserved' => 0];
        $room = Room::create(array_merge($request->all(), $create_values));
        return $room;
    }

    public function destroy(Room $room)
    {
        $room->remove();
        return $room;
    }

    public function update(Room $room, EditRoomRequest $request)
    {
        $room->edit($request->validated());
        return $room;
    }
}
