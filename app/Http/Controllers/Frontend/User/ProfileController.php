<?php
/*
 * Developer : Ruwan Ranganath
 * Organization : Interlista.com.lk
 * Email : ruwanranganathz@gmail.com
 * bug report : bugs@interlista.com.lk
 * Quality Engineered by Mozilla MozTrap automation tool
 */

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\User\UpdateProfileRequest;
use App\message;
use App\Models\Access\User\User;
use App\report;
use App\Repositories\Frontend\Access\User\UserRepositoryContract;
use Request;
use DB;

/**
 * Class ProfileController
 * @package App\Http\Controllers\Frontend
 */
class ProfileController extends Controller
{
    /**
     * @return mixed
     */
    public function edit()
    {
        return view('frontend.user.profile.edit')
            ->withUser(access()->user());
    }

    /**
     * @param  UserRepositoryContract         $user
     * @param  UpdateProfileRequest $request
     * @return mixed
     */
    public function update(UserRepositoryContract $user, UpdateProfileRequest $request)
    {
        $user->updateProfile(access()->id(), $request->all());
        return redirect()->route('frontend.user.dashboard')->withFlashSuccess(trans('strings.frontend.user.profile_updated'));
    }

    public function messages()
    {
      $users_msg = DB::table('messages')
        ->where('received_usr_id', '=', \Auth::user()->id)
        ->count();

        $messages = message::latest('created_at')
        ->limit('20')
        ->where('received_usr_id', '=', \Auth::user()->id)->get(); // get all product

        return view('frontend.messages',compact('users_msg','messages'))
            ->withUser(access()->user());
    }

    public function myprofile()
    {

         $users_msg = DB::table('messages')
        ->where('received_usr_id', '=', \Auth::user()->id)
        ->count();

        $users_msgs = DB::table('messages')
        ->where('received_usr_id', '=', \Auth::user()->id)
        ->latest('created_at')
        ->distinct()->get();



        $user =User::where('id', '=', \Auth::user()->id)->get();
        return view('frontend.profile',compact('user','users_msg','users_msgs'))
            ->withUser(access()->user());
    }

    public function chat($id)
    {

        $username = User::findOrFail($id);  //get all users



        $user=message::where('sent_usr_id', '=', $id )
                      ->where('received_usr_id', '=', \Auth::user()->id )
                      ->orWhere('sent_usr_id', '=', \Auth::user()->id )
                      ->where('received_usr_id', '=', $id )
                      ->orderBy('updated_at', 'asc')
                      ->get();


        return view('frontend.chat',compact('user','username'));



    }

    public function userprofile($id)
    {

          $usermsgs=message::where('sent_usr_id', '=', $id )
                      ->where('received_usr_id', '=', \Auth::user()->id )
                      ->orWhere('sent_usr_id', '=', \Auth::user()->id )
                      ->where('received_usr_id', '=', $id )
                      ->orderBy('updated_at', 'asc')
                      ->get();

         $users_msgs = DB::table('messages')
        ->where('received_usr_id', '=', \Auth::user()->id)
        ->latest('created_at')
        ->distinct()->get();


         $users_msg = DB::table('messages')
        ->where('received_usr_id', '=', \Auth::user()->id)
        ->count();

        $user = User::findOrFail($id);
        return view('frontend.Userprofile',compact('user','users_msg','usermsgs','users_msgs'));

    }

    public function reportuser($id)
    {
        $user = User::findOrFail($id);
        return view('frontend.reportuser',compact('user'));
    }

    public function reportsave()
    {
        $input = Request::all();
        report::create($input);

        return redirect()->route('frontend.user.dashboard')->withFlashSuccess('Successfully reported');

    }

    public  function sendmessage($id)
    {
        $user = User::findOrFail($id);
        return view('frontend.sendmessage',compact('user'));
    }

    public function messagesend()
    {
        $input = Request::all();
        message::create($input);

        return redirect()->route('frontend.user.profile.myprofile')->withFlashSuccess('Message Send succssfully !');

    }



}
