<?php

namespace App\Http\Controllers;
use App\Helpers\ResponseHelper;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::all();
        return ResponseHelper::respondWithSuccess($tags);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate();

        $tag = Tag::create($validatedData);
        return ResponseHelper::respondWithSuccess();
    }

    // public function show(Tag $tag)
    // {
    //      return ResponseHelper::respondWithSuccess($tag);
    // }

    public function update(Request $request, Tag $tag)
    {
       $tag->update($request->validated());

        return ResponseHelper::respondWithSuccess( $tag);
    }

    public function destroy(Tag $tag)
    {
        $tag->delete();

        return ResponseHelper::respondWithSuccess();
    }
}
