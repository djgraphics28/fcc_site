<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\MemberStoreRequest;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function registration(): View
    {
        $genders = [
            'Male' => 'Male',
            'Female' => 'Female',
        ];

        $groups = [
            '1' => 'Team Gideon',
            '2' => 'Team Isaiah',
            '3' => 'Team Mary',
            // Add more options as needed
        ];

        $selectedGender = "";

        return view('membership_form', compact('genders', 'selectedGender', 'groups'));
    }

    public function index(): View
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MemberStoreRequest $request): RedirectResponse
    {
        // Check if a user with the given first name and last name exists
        $firstName = $request->input('firstName');
        $lastName = $request->input('lastName');
        $memberExists = Member::where('first_name', $firstName)
                        ->where('last_name', $lastName)
                        ->exists();

        if ($memberExists) {
            toastr()->warning('The first name and last name combination is already in use.');
            return back();
        }

        $data = Member::create([
            'first_name' => $request->firstName,
            'middle_name' => $request->middleName,
            'last_name' => $request->lastName,
            'ext_name' => $request->extName,
            'gender' => $request->gender,
            'birth_date' => $request->birthDate,
            'contact_number' => $request->contactNumber,
            'address' => $request->address,
            'date_baptized' => $request->dateBaptized,
            'email' => $request->email
        ]);

        if($data) {
            toastr()->success('Registration succeed!');
            return redirect()->route('registration.success', ['firstName' => $request->firstName]);
        }

        toastr()->error('An error has occurred please try again later.');
        return back();

    }

    /**
     * Display the specified resource.
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Member $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Member $member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Member $member)
    {
        //
    }

    public function success($firstName)
    {
        return view('success', compact('firstName'));
    }
}
