<?php

namespace App\Http\Controllers;


use App\Http\Requests\DealerRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        $check_role = Auth::user();
        return view('admin.general',compact('check_role'));
    }
    public function dealer()
    {
        $check_role = Auth::user();
        return view('admin.content.users.register_dealer.register_dealer', compact('check_role'));
    }
    public function register_dealer(DealerRequest $req)
    {
        $password = $req->password;
        $hashed_password = Hash::make($password);

        User::create([
            'name' => $req->name,
            'email' => $req->email,
            'password' => $hashed_password,
            'role' => 'dealer'
        ]);

        return redirect()->back();
    }
}
