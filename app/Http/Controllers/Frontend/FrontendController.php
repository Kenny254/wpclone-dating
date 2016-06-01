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

          $users_msgs = DB::table('messages')
        ->where('received_usr_id', '=', \Auth::user()->id)
        ->latest('created_at')
        ->distinct()->get();

         // if the user logged in 

        $users = User::orderByRaw("RAND()")->limit('6')->get();
        return view('frontend.index',compact('users','users_msg','users_msgs'));

    } else {
     // if the user logged in 

        $users = User::orderByRaw("RAND()")->limit('6')->get();
        return view('frontend.index',compact('users'));

  }



    }


    public function newsfeed()
    {



       if (Auth::check())
    {
          $users_msg = DB::table('messages')
        ->where('received_usr_id', '=', \Auth::user()->id)
        ->count();


                  $users_msgs = DB::table('messages')
        ->where('received_usr_id', '=', \Auth::user()->id)
        ->latest('created_at')
        ->distinct()->get();


         // if the user logged in 

    

      $users = User::latest('created_at')->limit('8')->get(); // get all product

        return view('frontend.newsfeed',compact('users','users_msg','users_msgs'));


    } else {

      $users = User::latest('created_at')->limit('8')->get(); // get all product

        return view('frontend.newsfeed',compact('users'));


    }



    }

    public function about()
    {


           if (Auth::check())
    {
          $users_msg = DB::table('messages')
        ->where('received_usr_id', '=', \Auth::user()->id)
        ->count();


                  $users_msgs = DB::table('messages')
        ->where('received_usr_id', '=', \Auth::user()->id)
        ->latest('created_at')
        ->distinct()->get();


         // if the user logged in 

    
        return view('frontend.about',compact('users_msg','users_msgs'));
   
    } else {

       return view('frontend.about');
    }

<<<<<<< HEAD
//wha
=======
//test git
>>>>>>> demo


       
    }

    public function contact()
    {

       if (Auth::check())
    {
          $users_msg = DB::table('messages')
        ->where('received_usr_id', '=', \Auth::user()->id)
        ->count();


                  $users_msgs = DB::table('messages')
        ->where('received_usr_id', '=', \Auth::user()->id)
        ->latest('created_at')
        ->distinct()->get();


         // if the user logged in 

    
        return view('frontend.contact',compact('users_msg','users_msgs'));
   
    } else {

      return view('frontend.contact');
    }
              
    }


}
