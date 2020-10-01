<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ForgetPasswordController extends Controller
{
    public function reset()
    {
        return view('auth.reset_pass');
    }

    public function resetPass(Request $request)
    {
        $this->validate($request, [
            'email'     => ['required', 'string', 'email'],
            'password'  => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $password = Hash::make($request->password);
        $email = $request->email;

        User::where('email', '=', $email)
            ->update(['password' => $password]);

        return redirect()->route('login')->with('success', 'Berhasil Ubah Password');
    }
}
