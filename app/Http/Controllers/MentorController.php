<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\Mentor;
use App\User;
use App\Requests;

class MentorController extends Controller
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
        return view('mentor.mentorApply');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mentor=$this->validate(request(),[
                'name' => 'required',
                'email' => 'required',
                'organization' => 'required',
                'why' => 'required'
            ]);
        Mentor::create($mentor);

        return redirect('mentor/registered');
    }

    public function registered()
    {
        return view('mentor.registered');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function menteeList()
    {
        if(Auth::check())
        {
            $user=Requests::where('mentor_id', 2)->where('status', 0)->get();
            
            if($user)
            {
                foreach ($user as $u) 
                {
                    $u->User;
                }
            }
            return view('mentor.requestList', compact('user'));
        }
        else
        {
            return redirect('mentee/login')->with('errors','You need to login first');
        }
    }

    public function show($id)
    {
        if(Auth::check())
        {
            $mentor=Mentor::find($id);
            return view('mentee.mentorProfile', compact('mentor'));
        }
        else
        {
            return redirect('mentee/login')->with('errors','You need to login first');
        } 
    }

    public function acceptRequest(Request $request)
    {
        $req=Requests::where('mentor_id', 2)->where('users_id', $request['users_id'])->first();
        $req['status']=1;
        $req->save();

        return redirect('mentor/requestlist')->with('status', 'Mentee accepted successfully!');
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
