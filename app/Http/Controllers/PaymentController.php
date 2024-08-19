<?php

namespace App\Http\Controllers;
use App\Helpers\ResponseHelper;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        $payments = Payment::with('subscription')->get();
        return ResponseHelper::respondWithSuccess($payments);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate();

        $payment = Payment::create($validatedData);
        return ResponseHelper::respondWithSuccess();
    }

    public function show(Payment $payment)
    {
        $payment = Payment::with('subscription');
        return ResponseHelper::respondWithSuccess($payment);
    }

    public function update(Request $request, Payment $payment)
    {
         $payment->update($request->validated());

        return ResponseHelper::respondWithSuccess( $payment);
    }

    public function destroy(Payment $payment)
    {
         $payment->delete();

        return ResponseHelper::respondWithSuccess();
    }
}
