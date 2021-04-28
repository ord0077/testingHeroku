<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\models\User;
use Auth;

// use Illuminate\Support\Facades\Hash;
class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        //return view('home');
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createUser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    $request->validate([
        'name'=> 'required',
        'email'=> 'required',
        'password'=> 'required',
        
    ]);

    $user=User::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>$request->password,
        'role_id'=>1

    ]);

    if($user){
        return redirect('home')->with('userAdd','User has been added successfully! ');
    }
        // dd($user);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    ///
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      
         $test=User::find($id);
       return view("edit",["user" =>$test]);
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user=User::find($id);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;
        if($user->save()){
            return redirect('home')->with('userAdd','User has been updated successfully! ');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $user=User::find($id);
       if($user->delete()){
           return redirect("home")->with('userAdd','User has been deleted successfully!');
       }
    }
}
