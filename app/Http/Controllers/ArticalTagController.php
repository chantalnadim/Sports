<?php

namespace App\Http\Controllers;
use App\Helpers\ResponseHelper;
use App\Http\Requests\SportRequest;
use App\Models\Artical_tag;
use Illuminate\Http\Request;

class ArticalTagController extends Controller
{
    public function index()
    {
        $articalTags = Artical_tag::with(['article', 'tag'])->get();
       return ResponseHelper::respondWithSuccess( $articalTags);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate();

        $articalTag = Artical_tag::create($validatedData);
         return ResponseHelper::respondWithSuccess();
    }

    public function show(Artical_tag $artical_tag)
    {
        $articalTag = Artical_tag::with(['article', 'tag']);
       return  ResponseHelper::respondWithSuccess($artical_tag);
    }


    public function update(Request $request, Artical_tag $artical_tag)
    {

       $artical_tag->update($request->validated());
    }

    public function destroy(Artical_tag $artical_tag)
    {
     $artical_tag->delete();


    return ResponseHelper::respondWithSuccess();
    }
}
