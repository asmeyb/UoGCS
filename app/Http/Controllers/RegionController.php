<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Country;
use App\Region;
class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $region = Region::all();
        return view('setup.addresSetup.region.index')->with('region', $region);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $country =Country::all();
        return view('setup.addresSetup.region.create')->with('country', $country);
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'=>'required|unique:regions',
            'code'=>'required',
            'country_id'=>'required',
            'description'=>'required'
        ]);
        $region = new Region;
        
        $region->name = $request->name;        
        $region->code = $request->code;
        $region->country_id = $request->country_id;
        $region->description = $request->description;

        $region->save();
        session()->flash('notif','Region SetUp Successfully Added');
        return redirect()->Route('region.index'); 
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
        $country =Country::all();
        $region = Region::find($id);

        return view('setup.addresSetup.region.edit')->with('region', $region)
                                                     ->with('country', $country); 
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
  
            'country_id'=>'required',
            'name'=>'required',
            'code'=>'required',
            'description'=>'required'
        ]);

        $region = Region::find($id);
        
        $region->name = $request->name;
        $region->code = $request->code;
        $region->country_id = $request->country_id;
        $region->description = $request->description;
       
        $region->save();
        session()->flash('notif','Region SetUp Successfully Updated');
        return redirect()->Route('region.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $region = Region::find($id);

        $region->delete();

        Session()->flash('notif','Deleted Successfuly');

        return redirect()->Route('region.index');
    }
}
