<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Topic;
use App\Country;
use App\Mentor;

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
        $country=Country::all()->toArray();
        return view('mentee.registerLogin', compact('country'));
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
        //Mail::to($user['email'])->send(new RegisterVerification($user));

        Session::regenerateToken();

        //return back()->with('success','Verification mail sent. Check your mail and verify your account.');
        return redirect('mentee/login')->with('status', 'User account created successfully');
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
        $country=Country::all()->toArray();
        return view('mentee.registerLogin', compact('country'));
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
                return redirect('mentee/getstarted');
            } 
        }
        else
        {
            return back()->with('errors','Incorrect email or password!');
        }
    }
    public function getStarted()
    {
        if(Auth::check())
        {
            if(Auth::user()->prefTopic==0 && Auth::user()->prefCountry==0)
            {
                $topic=Topic::all()->toArray();
                $countries=Country::all()->toArray();

                return view('mentee.getstarted1',compact('topic','countries'));
            }
            return redirect('data');
        }
        else
        {
            return redirect('mentee/login')->with('errors','You need to login first');
        }
        
    }

    public function recordPreference(Request $request)
    {
        $topic=$request['topic'];
        $country=$request['country'];

        $user=User::find(Auth::user()->id);
        $user->prefTopic=$topic;
        $user->prefCountry=$country;
        $user->save();

        return redirect('data');
    }

    public function apply()
    {
        return view('mentee.mentorApply');
    }

    public function findMentor()
    {
        $mentor=Mentor::all();
        return view('mentee.findMentor', compact('mentor'));
    }

    public function sendMentorRequest($id)
    {
        return $id;
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Display the specified mentor
     *
     * @param int $mentorid
     * @return view with specified mentor data
     */
    public function showMentor($id)
    {
        $mentor=Mentor::find($id);
        return view('mentee.mentorProfile', compact('mentor'));
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
