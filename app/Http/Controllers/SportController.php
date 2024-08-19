<?php

namespace App\Http\Controllers;

use App\Helpers\ResponseHelper;
use App\Http\Requests\SportRequest;
use App\Models\Sport;
use Illuminate\Http\Request;

class SportController extends Controller
{
    public function index()
    {
        $sports = Sport::with('rooms')->get();
        return  ResponseHelper::respondWithSuccess($sports);
    }

    public function store(SportRequest $request)
    {
        $Data = $request->validated();


  $destination_path='public/images/photos';
            $image=$request->file('images');
            $image_name= $image->getClientOriginalName();
            $path=$request->file('images')->storeAs($destination_path,$image_name);
            $data['images']=$image_name;
            Sport::create($Data);



       return ResponseHelper::respondWithSuccess();
    }

    public function show(Sport $sport)
    {
        $sport = Sport::with('rooms');
         return  ResponseHelper::respondWithSuccess($sport);
    }

    public function update(SportRequest $request, Sport $sport)
    {

        $sport->update($request->validated());

        return ResponseHelper::respondWithSuccess( $sport);
    }

    public function destroy(Sport $sport)
    {

        $sport->delete();

        return ResponseHelper::respondWithSuccess();
    }
}
