<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\Facades\Image;
use App\User;

class UserSettingsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('user');
    }

    /**
     * Show the users list.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = auth()->user();
        return view('dashboard.user.settings', compact('user'));
    }

    public function update(Request $request)
    {
        $user = auth()->user();
        $this->authorize('update', $user->profile);

        //validate form data and return error
        $data=request()->validate([
            'firstname'=>'required|string|alpha|max:255',
            'lastname'=>'required|string|alpha|max:255',
            'phone'=>'required|numeric|phone:AUTO,KE|unique:users,phone'.$user->id,
            'profileImage'=>'image|max:8000',
        ]);

        //if user wants to change profile image
        if(request('profileImage')){
            $imagePath=request('profileImage')->store('profile', 'public');
            $image=Image::make(public_path("storage/{$imagePath}"))->fit(200,200);
            $image->save();

            $imageArray=['profileImage'=>$imagePath];
        }

       // dd($imagePath);
        //update profiles table
        // $countPhone=User::where('phone', '=', $request->input('phone'))->count() > 0;
        // if ($countPhone) {
        //     // user found
        //     return Redirect::back()->with('status','Phone Number Exists !'.$countPhone);
        // }else{
        //     return Redirect::back()->with('status','not there !');
        // }
        auth()->user()->profile->update(array_merge(
            $data,
            $imageArray ?? []
        ));

        //update users table
        $dataPhone=([
             'phone' => $data['phone'],
         ]);

         auth()->user()->update($dataPhone);

         return Redirect::back()->with('status','Profile Updated Successfully !');
    }

//  update user password
    public function updatePassword()
    {
        $user = User::findorfail(auth()->user()->id);

        $this->authorize('update', $user->profile);

        $data=request()->validate([
            'password'     => 'required',
            'new_password'     => 'required|min:6',
            'confirm_password' => 'required|same:new_password',
        ]);

        if(!\Hash::check($data['password'], $user->password)){
            return back()->with('errorPassword','You have entered wrong password!');
        }else{
            // here you will write password update code
            $ValidatedPassword=([
                'password' => Hash::make($data['new_password']),
            ]);
            auth()->user()->update(array_merge($ValidatedPassword));

            return Redirect::back()->with('successPassword','Your Password was Updated Successfully!');
        }
    }
}
