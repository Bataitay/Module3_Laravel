<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class profileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($user, Profile $profile)
    {
        $user = User::findOrFail($user);
        $users = $profile->user;
        return view('front-end.profiles.index', [
            'user' => $user,
            'users' => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $this->authorize('update', $user->profile);
        return view('front-end.profiles.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(User $user)
    {
        $this->authorize('update', $user->profile);

        $data = request()->validate([
            'title' => 'required',
            'name' => 'required',
            'url' => 'url',
            'story' => 'required',
        ]);

        auth()->user()->profile->update(array_merge($data,));
        return redirect('/profile/'. auth()->user()->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function avatar()
    {
        // $avatar = Profile::all();
        // return view('front-end.profiles.index', [
        //     'avatar' => $avatar,
        // ]);
    }
    public function upload_avatar(request $request, User $user)
    {
        $this->authorize('update', $user->profile);
        // $data = $request->validate([
        //     'avatar' => '',
        // ]);

        if ($request->avatar) {
            $avatarPath = $request->avatar->store('profiles', 'public');
            $avatar = Image::make(public_path("storage/{$avatarPath}"))->fit(1000, 1000);
            $avatar->save();
            $imageArray = ['avatar' => $avatarPath];
        }

        dd($request->all());

        auth()->user()->profile->update(array_merge($imageArray ?? [] ));
        return redirect('/profile/'. auth()->user()->id);
    }
}
