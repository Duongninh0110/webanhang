<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $categories =Category::All();


        // return view('Categories/index')->with('categories', $categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('Users.Register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate the data
        $this->validate($request, array(
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:6|confirmed',
                
            ));

        //store in the database
        $user = new User;
        $user->name = $request->name;
        $user->email=$request->email;
        $user->password=$request->password;
        

       

        $user->save();

        
        Session::flash('success', 'your account is successfully saved!');

        //redirect to another pages
        return redirect('/');
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
    public function edit($id)
    {
        //
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
        //
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

   
    public function postlogin(Request $request)
    {
        $validatedData = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
        ]);

        // dd($validatedData);

        $email=$request->input('email');
        $password=$request->input('password');
        $user=User::where('email', $email)
        ->where('password', $password)
        ->first();

        // dd($user);
        
        if($user) { 

            $user = json_decode($user);
            $request->session()->put ('user', $user);

        }else{
            return redirect('/register');
            Session::flash('sucess', 'Email or Password is incorrect');

        }

        // dd(session('user'));


       
        return redirect("/");

        
    }

    public function logout (Request $request)
    {
        $request->session()->forget('user');
        return view('contact');
    }
}
