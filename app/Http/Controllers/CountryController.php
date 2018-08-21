<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;

use Illuminate\Http\Request;
use App\Country;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $country = Country::all();
        return view('setup.addresSetup.country.index')->with('country',$country);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('setup.addresSetup.country.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        
        $this->validate($request, [
            'name'=>'required|unique:countries',
            'code'=>'required|unique:countries',
            'description'=>'required'
        ]);

        $country = new Country;
        
        $country->name = $request->name;
        $country->code = $request->code;
        $country->description = $request->description;

        $country->save();

        Session()->flash('notif','Country SetUp Successfully Added');
       // return view('setup.addresSetup.country.index'); 
        return redirect()->route('country.index');
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
        $countrys = Country::find($id);
        return view('setup.addresSetup.country.edit')->with('country', $countrys); 
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
        //dd($request->all());

        $this->validate($request, [

            'name'=>'required',
            'code'=>'required',
            'description'=>'required'

        ]);

        $country = Country::find($id);
        
        $country->name = $request->name;
        $country->code = $request->code;
        $country->description = $request->description;
       
        $country->save();
        Session()->flash('notif','Country SetUp Successfully Updated');

        return redirect()->Route('country.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $country = Country::find($id);

        $country->delete();

        Session()->flash('notif','You Delete The Country Successfuly');

        return redirect()->Route('country.index');
    }
}
