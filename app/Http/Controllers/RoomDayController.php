<?php

namespace App\Http\Controllers;
use App\Helpers\ResponseHelper;
use App\Models\Room_day;
use Illuminate\Http\Request;

class RoomDayController extends Controller
{
    public function index()
    {
        $roomDays = Room_day::with(['room', 'day'])->get();
         return ResponseHelper::respondWithSuccess($roomDays);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate();

        $roomDay = Room_day::create($validatedData);
        return ResponseHelper::respondWithSuccess();
    }

    public function show(Room_day $room_day)
    {
        $roomDay = Room_day::with(['room', 'day']);
       return ResponseHelper::respondWithSuccess($room_day);
    }

    public function update(Request $request, Room_day $room_day)
    {
      $room_day->update($request->validated());

        return ResponseHelper::respondWithSuccess( $room_day);
    }

    public function destroy(Room_day $room_day)
    {
     $room_day->delete();

        return ResponseHelper::respondWithSuccess();
    }
}
