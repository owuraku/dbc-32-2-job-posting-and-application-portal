<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', [
            'users' => $users
        ]);
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
    public function edit(User $user)
    {
        $roles = Role::all();
        return view('admin.users.edit', [
            'user' => $user,
            'roles' => $roles
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $data = $request->validate([
            'role' => ['sometimes', 'exists:roles,id']
        ]);

        if (Auth::user()->can('roles.assign')) {
            $role = Role::findById($data['role']);
            $user->syncRoles($role);
            $message = "User $user->fullname, edited successfully";
        } else {
            $message = "User $user->fullname, edited successfully but role not updated";
        }

        return redirect(route('admin.users.index'))->with('status', [
            'message' => $message
        ]);
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
