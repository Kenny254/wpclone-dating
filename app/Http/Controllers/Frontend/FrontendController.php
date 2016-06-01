<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Access\User\User;
use Auth;
use DB;

/**
 * Class FrontendController
 * @package App\Http\Controllers
 */
class FrontendController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {

      // if the user logged in 
      if (Auth::check())
{
          $users_msg = DB::table('messages')
        ->where('received_usr_id', '=', \Auth::user()->id)
        ->count();

         // if the user logged in 

        $users = User::orderByRaw("RAND()")->limit('6')->get();
        return view('frontend.index',compact('users','users_msg'));

} else {
 // if the user logged in 

        $users = User::orderByRaw("RAND()")->limit('6')->get();
        return view('frontend.index',compact('users'));

}


       



    }

    /**
     * @return \Illuminate\View\View
     */
    public function macros()
    {
        return view('frontend.macros');
    }

    public function newsfeed()
    {
      $users = User::latest('created_at')->limit('8')->get(); // get all product

        return view('frontend.newsfeed',compact('users'));
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function contact()
    {
              return view('frontend.contact');
    }


}
