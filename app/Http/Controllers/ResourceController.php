<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Resources;
use App\Country;
use App\User;
use Auth;

class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() //topic to be added later***
    {
        if(Auth::check())
        {
            $resources=Resources::all();
            $countries=Country::all()->toArray();
            foreach($resources as $cl)
            {
                $cl->Country;
            }
            return view('mentee.dataView', compact('resources','countries'));
        }
        else
        {
            return redirect('mentee/login')->with('errors','You need to login first');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function find(Request $request)  //to change with AJAX later**
    {
        $query=$request['search'];

        $search=Resources::where('title','LIKE', '%'.$query.'%')->get();
        $countries=Country::all()->toArray();

        return view('mentee.dataView', compact('search', 'countries'));
    }

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
