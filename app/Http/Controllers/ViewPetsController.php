<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Pet;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ViewPetsController extends Controller
{
    
    public function index( Request $request)
    {
       
       if ($request->session()->has('user') && $request->session()->get('user')==0) {
           $pets = Pet::where('intUserID', $request->session()->get('userID'))->get();
            return view('/client/viewpets')->with('pets',$pets)->with('userFirstName',$request->session()->get('userFirstName'));
        }else{
            return redirect('main/homepage');
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
