<?php

namespace App\Http\Controllers;

use \App\Models\User;

class ProfileBarrelRacingController extends Controller
{

    /**
     * User Profile
     */
    public function Profile($id)
    {
        $owner = User::findOrFail($id);
        $page_views_count = $owner->page_views + 1;
        $owner->page_views = $page_views_count;
        $owner->save();
        return view('profile.profile-barrelracing', compact(['owner', 'page_views_count']));
    }
}
