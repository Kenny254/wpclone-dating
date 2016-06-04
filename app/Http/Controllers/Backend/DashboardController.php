<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use DB;
use App\message;
use App\report;
use App\Models\Access\User\User;

/**
 * Class DashboardController
 * @package App\Http\Controllers\Backend
 */
class DashboardController extends Controller
{






    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {


// Messages

      $users_msg = DB::table('messages')
        ->where('received_usr_id', '=', \Auth::user()->id)
        ->count();

        $messages = message::latest('created_at')->limit('5')->where('received_usr_id', '=', \Auth::user()->id)->get(); // get all product
// messages

    //report
    $usr_reports = DB::table('report')
      ->where('resolved', '=', '0')
      ->count();

      $reports = report::latest('created_at')->limit('5')->where('resolved', '=', '0')->get(); // get all product
    // report



      return view('backend.dashboard',compact('users_msg','messages','usr_reports','reports'));

    }


    public function navbar()
    {


// Messages

      $users_msg = DB::table('messages')
        ->where('received_usr_id', '=', \Auth::user()->id)
        ->count();

        $messages = message::latest('created_at')->limit('5')->where('received_usr_id', '=', \Auth::user()->id)->get(); // get all product
// messages

//report
$usr_reports = DB::table('report')
  ->where('resolved', '=', '0')
  ->count();

  $reports = report::latest('created_at')->limit('5')->where('resolved', '=', '0')->get(); // get all product
// report



      return view('backend.includes.header',compact('users_msg','messages','usr_reports','reports'));

    }



        public function logochange()
    {


// Messages

      $users_msg = DB::table('messages')
        ->where('received_usr_id', '=', \Auth::user()->id)
        ->count();

        $messages = message::latest('created_at')->limit('5')->where('received_usr_id', '=', \Auth::user()->id)->get(); // get all product
// messages

    //report
    $usr_reports = DB::table('report')
      ->where('resolved', '=', '0')
      ->count();

      $reports = report::latest('created_at')->limit('5')->where('resolved', '=', '0')->get(); // get all product
    // report



      return view('backend.logochange',compact('users_msg','messages','usr_reports','reports'));

    }


        public function footerchange()
    {


// Messages

      $users_msg = DB::table('messages')
        ->where('received_usr_id', '=', \Auth::user()->id)
        ->count();

        $messages = message::latest('created_at')->limit('5')->where('received_usr_id', '=', \Auth::user()->id)->get(); // get all product
// messages

    //report
    $usr_reports = DB::table('report')
      ->where('resolved', '=', '0')
      ->count();

      $reports = report::latest('created_at')->limit('5')->where('resolved', '=', '0')->get(); // get all product
    // report



      return view('backend.footerchange',compact('users_msg','messages','usr_reports','reports'));

    }











}
