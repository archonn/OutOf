<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
use Auth;
use Mail;
use Session;
use App\Mail\RegisterVerification;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mentee.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user=$this->validate(request(),[
                'name' => 'required',
                'email' => 'required',
                'password' => 'required',
                'country' => 'required',
                'status' => 'numeric',
                '_token' => 'required',
                'confirmPassword' => 'required|same:password'
            ]);

        $user['password']=Hash::make($user['password']);
        User::create($user);
        Mail::to($user['email'])->send(new RegisterVerification($user));

        Session::regenerateToken();

        return back()->with('success','Verification mail sent. Check your mail and verify your account.');
    }

    public function verifyUser($token)
    {
        $user=User::where('_token',$token)->first();
        if(isset($user))
        {
            if($user['status']==0)
            {
                $user['status']=1;
                $user->save();
                $status='User account verified successfully';
            }
            else
            {
                $status='You have already verified!';
            }
        }
        else
        {
            return redirect('login')->with('error','Your email cannot be verified.');
        }
        return redirect('login')->with('status', $status);
    }

    public function login()
    {
        return view('mentee.login');
    }

    public function loginAuth(Request $request)
    {
        $email=$request['email'];
        $password=$request['password'];

        $user=User::where('email',$email)->first();

        if(Auth::attempt(["email" => $email, "password" => $password]))
        {
            if($user['status']==0)
            {
                return back()->with('errors','Your account has not been verified yet.');
            }
            else
            {
                return "Success!";
            } 
        }
        else
        {
            return back()->with('errors','Incorrect email or password!');
        }
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
}
