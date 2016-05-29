<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Access\User\User;

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

        $users = User::orderByRaw("RAND()")->limit('6')->get();
        return view('frontend.index',compact('users'));
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
              return "Need Contact Page";
    }


}
