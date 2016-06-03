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

use Illuminate\Support\Facades\Input;
use Validator;
use Redirect;
use Session;


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


  $users_msg = DB::table('messages')
        ->groupBy('sent_usr_id')
        ->where('readed', '=', '0')
        ->where('received_usr_id', '=', \Auth::user()->id)
        ->count();

        $users_msgs = DB::table('messages')
        ->where('received_usr_id', '=', \Auth::user()->id)
        ->latest('created_at')
        ->groupBy('sent_usr_id')
        ->distinct('send_usr_id')->get();



        $user =User::where('id', '=', \Auth::user()->id)->get();



        return view('frontend.user.profile.edit',compact('user','users_msg','users_msgs'))
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
        ->groupBy('sent_usr_id')
        ->where('readed', '=', '0')
        ->where('received_usr_id', '=', \Auth::user()->id)
        ->count();

        $users_msgs = DB::table('messages')
        ->where('received_usr_id', '=', \Auth::user()->id)
        ->latest('created_at')
        ->groupBy('sent_usr_id')
        ->distinct('send_usr_id')->get();



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


        public function search()
    {


  $users_msg = DB::table('messages')
        ->groupBy('sent_usr_id')
        ->where('readed', '=', '0')
        ->where('received_usr_id', '=', \Auth::user()->id)
        ->count();

        $users_msgs = DB::table('messages')
        ->where('received_usr_id', '=', \Auth::user()->id)
        ->latest('created_at')
        ->groupBy('sent_usr_id')
        ->distinct('send_usr_id')->get();



        $user =User::where('id', '=', \Auth::user()->id)->get();



        $input = Request::all();
        $gender = Request('gender');
        $country = Request('country');
        $propic = Request('propic');

    /*     $searching = User::where('gender','=',$gender)
         ->where('country','=',$country)
         ->where('haveprofilepic','=',$propic)
        ->orderBy('name')
        ->paginate(20); */

        $searching = User::get();
        return view('frontend.search',compact('searching','user','users_msg','users_msgs'));
       // return($searching);



    }





    public function upload() {
  // getting all of the post data
  $file = array('image' => Input::file('image'));
  // setting up rules
  $rules = array('image' => 'required',); //mimes:jpeg,bmp,png and for max size max:10000
  // doing the validation, passing post data, rules and the messages
  $validator = Validator::make($file, $rules);
  if ($validator->fails()) {
    // send back to the page with the input data and errors
    return Redirect::to('upload')->withInput()->withErrors($validator);
  }
  else {
    // checking file is valid.
    if (Input::file('image')->isValid()) {
      $destinationPath = 'uploads/profiles'; // upload path
      $extension = Input::file('image')->getClientOriginalExtension(); // getting image extension
      $fileName = rand(11111,99999).'.'.$extension; // renameing image
      Input::file('image')->move($destinationPath, $fileName); // uploading file to given path
      // sending back with message

      DB::table('users')
            ->where('id', \Auth::user()->id)
            ->update(['profilepicurl' => $fileName]);

      Session::flash('success', 'Upload successfully'); 
      return Redirect::to('profile/edit')->withFlashSuccess('Photo upload succssfully !');
    }
    else {
      // sending back with error message.
      Session::flash('error', 'uploaded file is not valid');
      return Redirect::to('profile.edit');
    }
  }
}



}
