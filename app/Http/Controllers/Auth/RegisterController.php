<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Parents;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        // Validate the request fields
        $fields = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:parents,email',
            'password' => 'required',
            // 'confirmed_password' => 'required|same:password',
            'phone' => 'required'
        ]);

        try {
            // Attempt to create the parent record
            $parent = Parents::create([
                'name' => $fields['name'],
                'email' => $fields['email'],
                'password' => bcrypt($fields['password']),
                'phone' => $fields['phone']
            ]);

            // Log the parent in
            auth()->login($parent);

            // Redirect on success
            return redirect('/parent/home');
        } catch (\Exception $e) {
            // Return an error response if something goes wrong
            return back()->with('error', 'An error occurred while creating your account');
        }
    }
}
