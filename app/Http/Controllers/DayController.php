<?php

namespace App\Http\Controllers;
use App\Helpers\ResponseHelper;
use App\Models\Day;
use Illuminate\Http\Request;

class DayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $days = Day::all();
        return ResponseHelper::respondWithSuccess();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate();

        $day = Day::create($validated);

      return ResponseHelper::respondWithSuccess();
    }

    /**
     * Display the specified resource.
     */
    public function show(Day $day)
    {

      return ResponseHelper::respondWithSuccess($day);
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, Day $day)
    {
         $day->update($request->validated());

        return ResponseHelper::respondWithSuccess( $day);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Day $day)
    {
        $day->delete();

        return ResponseHelper::respondWithSuccess();
    }
}
