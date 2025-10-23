<?php

namespace App\Http\Controllers;

use \App\Models\User;
use \App\Models\Post;

class ProfileBarrelRacingController extends Controller
{

    /**
     * User Profile
     */
    public function Profile($id)
    {
        $owner = User::findOrFail($id);
        $owner->increment('page_views');
        $page_views_count = $owner->page_views;
        /**
         * Profile Horses - using 'horses_page' parameter
         */
        $posts = $owner->posts()->where('status', '!=', 'Draft')
            ->paginate(20, ['*'], 'post_page')->fragment('posts');
        return view('profile.profile-barrelracing', compact(['owner', 'posts', 'page_views_count']));
    }

       /**
     * Delete Horse's Post
     */
    public function deletePosts(Post $post)
    {
       $post->delete();
    }

     /**
     * Draft Post
     */
    public function draftPost(Post $post){
       $post->status ="Draft";
       $post->save();
    }
}
