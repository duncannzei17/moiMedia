<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Preference;

use Auth;

use DB;

class PreferencesController extends Controller
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
        //Submitted preference values
        $loggedUser = Auth::user()->email;
        $academia =  $request->input('academia');
        $news = $request->input('news_room');
        $leisure = $request->input('leisure');
        $clubs = $request->input('clubs');
        $community =  $request->input('community');
        // Check if user exists
        $sql = DB::table('preferences')->where('email', $loggedUser)->get();
        
        if(count($sql)>0)
        {
        //Update preferene for existing user
        $preference = Preference::find(Auth::user()->id);
        $preference->email = $loggedUser;
        $preference->academia = $academia;
        $preference->news_room = $news;
        $preference->leisure = $leisure; 
        $preference->clubs = $clubs; 
        $preference->community = $community;
        $preference->save();
        $message = "Preference has been updated succesfully";
        return view('/home')->with('message', $message);
       

        }else{
        //Create preference for new user
        $preference = new Preference;
        $preference->email = $loggedUser;
        $preference->academia = $academia;
        $preference->news_room = $news;
        $preference->leisure = $leisure; 
        $preference->clubs = $clubs; 
        $preference->community = $community;
        $preference->save();

        $message = "Preference has been updated succesfully";
        return view('/home')->with('message', $message);
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
