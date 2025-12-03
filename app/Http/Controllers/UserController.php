<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function profile()
    {
        $currentUser = Auth::user();
        // dump($currentUser);
        // dd($currentUser);
        return view('users.profile');
    }

    public function profileUpdate(UpdateProfile $request)
    {
        $data = $request->validated();
        // save file if it exists
        if ($request->hasFile('cv_path')) {
            $path = $request->file('cv_path')->store('cvs');
            $data['cv_path'] = $path;

            // delete old file if exists
            $oldFile = Auth::user()->cv_path;
            if ($oldFile) {
                Storage::delete($oldFile);
            }
        }
        Auth::user()->update($data);
        return redirect(route('profile'));
    }
}
