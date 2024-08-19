<?php

namespace App\Http\Controllers;
use App\Helpers\ResponseHelper;
use App\Models\Facilities;
use Illuminate\Http\Request;

class FacilityController extends Controller
{
    public function index()
    {
        $facilities = Facilities::with('rooms')->get();
       return ResponseHelper::respondWithSuccess($facilities);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate();

        $facility = Facilities::create($validatedData);
       return ResponseHelper::respondWithSuccess();
    }

    public function show(Facilities $facilities)
    {
        $facilities = Facilities::with('rooms');
        return ResponseHelper::respondWithSuccess($facilities);
    }

    public function update(Request $request, Facilities $facilities)
    {
        $facilities->update($request->validated());

        return ResponseHelper::respondWithSuccess( $facilities);
    }

    public function destroy(Facilities $facilities)
    {
        $facilities->delete();

        return ResponseHelper::respondWithSuccess();
    }
}
