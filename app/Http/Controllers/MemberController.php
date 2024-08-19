<?php

namespace App\Http\Controllers;
use App\Helpers\ResponseHelper;
use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $members = Member::with('subscriptions')->get();
        return ResponseHelper::respondWithSuccess( $members);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate();

        $member = Member::create($validatedData);
       return ResponseHelper::respondWithSuccess();
    }

    public function show(Member $member)
    {
        $member = Member::with('subscriptions');
      return ResponseHelper::respondWithSuccess($member);
    }

    public function update(Request $request, Member $member)
    {
        $member->update($request->validated());

        return ResponseHelper::respondWithSuccess( $member);
    }

    public function destroy(Member $member)
    {
      $member->delete();

        return ResponseHelper::respondWithSuccess();
    }
}
