<?php

namespace App\Http\Controllers;
use App\Helpers\ResponseHelper;
use App\Models\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function index()
    {
        $offers = Offer::with('subscription')->get();
        return ResponseHelper::respondWithSuccess($offers);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate();

        $offer = Offer::create($validatedData);
        return ResponseHelper::respondWithSuccess();
    }

    public function show(Offer $offer)
    {
        $offer = Offer::with('subscription');
        return ResponseHelper::respondWithSuccess($offer);
    }

    public function update(Request $request, Offer $offer)
    {
        $offer->update($request->validated());

        return ResponseHelper::respondWithSuccess( $offer);
    }

    public function destroy(Offer $offer)
    {
        $offer->delete();

        return ResponseHelper::respondWithSuccess();
    }
}
