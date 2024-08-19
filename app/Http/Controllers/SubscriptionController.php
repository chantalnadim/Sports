<?php

namespace App\Http\Controllers;
use App\Helpers\ResponseHelper;
use App\Models\Subscription;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function index()
    {
        $subscriptions = Subscription::with(['member', 'offers', 'payments'])->get();
         return ResponseHelper::respondWithSuccess($subscriptions);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate();

        $subscription = Subscription::create($validatedData);
         return ResponseHelper::respondWithSuccess();
    }

    public function show(Subscription $subscription)
    {
        $subscription = Subscription::with(['member', 'offers', 'payments']);
         return ResponseHelper::respondWithSuccess($subscription);
    }

    public function update(Request $request,Subscription $subscription )
    {
        $subscription->update($request->validated());

        return ResponseHelper::respondWithSuccess( $subscription);
    }

    public function destroy(Subscription $subscription)
    {
        $subscription->delete();

        return ResponseHelper::respondWithSuccess();
    }
}
