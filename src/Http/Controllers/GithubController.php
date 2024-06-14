<?php

namespace Dirushan\Githublogin\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use Dirushan\Githublogin\Models\Githubuser; // Adjust this namespace as per your package structure
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GithubController extends BaseController
{
    public function redirectToProvider()
    {
        return Socialite::driver('github')->redirect();
    }

    public function handleProviderCallback()
    {
        try {
            $user = Socialite::driver('github')->user();
        } catch (\Exception $e) {
            return redirect('/')->with('error', 'GitHub authentication failed');
        }

        // Check if the user already exists
        $existingUser = Githubuser::where('github_id', $user->id)->first();

        if ($existingUser) {
            Auth::login($existingUser);
        } else {
            // Create a new user record
            $newUser = new Githubuser();
            $newUser->name = $user->name;
            $newUser->email = $user->email;
            $newUser->github_id = $user->id;
            
            $newUser->save();

            Auth::login($newUser);
        }

        return redirect()->route('githublogin.welcome');
    }

    public function welcome()
    {
        $user = Auth::user();
        return view('githublogin::welcome', ['user' => $user]);
    }
}
