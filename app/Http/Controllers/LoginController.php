<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Hash;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
    }
    public function register()
    {
       return view('register');
    }
    public function dashboard()
    {
       return view('admindash');
    }
    
    public function loginvalidate(Request $request)
    {
       $request->validate([
        'email'=>'required',
        'passowrd'=>'password',
       ]);
       $data=DB::table('useperson')->where('email','=',$request->email)->first();
       //$password=Hash::make($request->password);
       $password=$request->password;
       $roleall=$data->role;
       if($roleall=="admin")
       {    
           if(Hash::check($password, $data->password))
           {
                $request->session()->put('email',$request->email);
                return redirect('/admindash');
           }
           else
           {
            return redirect('/')->with('error',"Enter Correct or Valid password");
           }
       }
       else if($roleall=='employee')
       {
            if(Hash::check($password, $data->password))
            {
                $request->session()->put('email',$request->email);
                return redirect('/empdash');
            }
            else
           {
            return redirect('/')->with('error',"Enter Correct or Valid password");
           }
       }
       else if($roleall=='customer')
       {    
            if(Hash::check($password, $data->password))
            {
                $request->session()->put('email',$request->email);
                return redirect('/custdash');
            }
            else
            {
                 return redirect('/')->with('error',"Enter Correct or Valid password");
            }
       }
       else{
            return redirect('/')->with('error',"Enter Correct or Valid Email");
       }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:6|max:10',
        ]);
        DB::table('useperson')->insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'gender'=>$request->gender,
            'address'=>$request->address,
            'mobileno'=>$request->mobileno,
            'password'=>Hash::make($request->password),
            'role'=>$request->role,
        ]);
        return redirect('/')->with('success',"adding success");
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
        return redirect('/');
    }
}
