<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function showProfiles()
    {
        $profile = Profile::all();
        return view('profiles', ['profiles' => $profile]);
    }

    public function getProfiles(Profile $profile)
    {
        return view('profile', compact('profile'));
    }

}
