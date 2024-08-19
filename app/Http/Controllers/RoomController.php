<?php

namespace App\Http\Controllers;
use App\Helpers\ResponseHelper;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::with(['sport', 'facility', 'roomDays'])->get();
       return ResponseHelper::respondWithSuccess($rooms);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate();

        $room = Room::create($validatedData);
        return ResponseHelper::respondWithSuccess();
    }

    public function show(Room $room)
    {
        $room = Room::with(['sport', 'facility', 'roomDays']);
        return ResponseHelper::respondWithSuccess($room);
    }

    public function update(Request $request, Room $room)
    {
       $room->update($request->validated());

        return ResponseHelper::respondWithSuccess( $room);
    }

    public function destroy(Room $room)
    {
        $room->delete();

        return ResponseHelper::respondWithSuccess();
    }
}
