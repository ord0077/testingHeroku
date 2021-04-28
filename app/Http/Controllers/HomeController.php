<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\UserRepo;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // index(UserRepo $user)
    public function index(UserRepo $user)
    {
        // $user = new UserRepo(); 
      
        return view('home', ['user' => $user->user]);
         //$user=User::where('role_id',1)->orderBy("id","desc")->simplePaginate(15);
        // dd($user);
        //return view('home',['user'=>$user]);
       
    }
    
   
}
