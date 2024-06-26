<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use function PHPUnit\Framework\isNull;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::where('name', '!=', 'admin')->get();
        // dd($users);
        return view('admin.user.index', compact('users'));
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
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('admin.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $name = $request->name;
        $email_number = $request->email_number;
        // $password = $request->password;

        // if (isset($password)) {
        //     $user->update([
        //         'name' => $name,
        //         'email_number' => $email_number,
        //         'password' => Hash::make($password),
        //     ]);
        // } elseif (!isset($password)) {
        //     $user->update([
        //         'name' => $name,
        //         'email_number' => $email_number,
        //     ]);
        // }

        $user->update([
            'name' => $name,
            'email_number' => $email_number,
        ]);
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index');
    }

    // helper
    public function resetpass(Request $request)
    {
        $id = $request->id;
        User::where('id', $id)->update(['password' => Hash::make('password')]);
        // dd($id);
        return redirect()->route('user.index');
    }
}
