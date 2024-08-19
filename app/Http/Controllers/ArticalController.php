<?php

namespace App\Http\Controllers;
use App\Helpers\ResponseHelper;
use App\Http\Requests\SportRequest;
use App\Models\Artical;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Artical::with(['category', 'tags'])->get();
         return  ResponseHelper::respondWithSuccess($articles);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate();

        $article = Artical::create($validatedData);
        $article->tags()->sync($request->input('tags', []));

       return ResponseHelper::respondWithSuccess();
    }

    public function show(Artical $artical)
    {
        $article = Artical::with(['category', 'tags']);
       return  ResponseHelper::respondWithSuccess($artical);
    }

    public function update(Request $request, Artical $artical)
    {
        $artical->update( $request->validated());
         return ResponseHelper::respondWithSuccess( $artical);
    }

    public function destroy( Artical $artical)
    {

        $artical->delete();

        return ResponseHelper::respondWithSuccess();
    }
}
