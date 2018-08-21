<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Region;
use App\Zone;
class ZoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $zone =Zone::all();
        return view('setup.addresSetup.zone.index')->with('zone', $zone);
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $region = Region::all();

        return view('setup.addresSetup.zone.create')->with('region', $region); 
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $this->validate($request,[
            'region_id'=>'required',
            'name'=>'required|unique:zones',
            'code'=>'required',
            'description'=>'required'            
        ]);

        $zone = zone::create([
            'region_id'=>$request->region_id,
            'name'=>$request->name,
            'code'=>$request->code,
            'description'=>$request->description,
            ]);
        
        Session()->flash('notif','Zone SetUp Successfully Added');
        return redirect()->Route('zone.index');
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
       
        $region = Region::all();
        $zone = Zone::find($id);

        return view('setup.addresSetup.zone.edit')->with('zone', $zone)
                                                  ->with('region', $region); 
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
      //  dd($request->all());

        $this->validate($request, [
            
            'region_id'=>'required',
            'name'=>'required',
            'code'=>'required',
            'description'=>'required'  

        ]);
        
        $zone = Zone::find($id);
        
        $zone->name = $request->name;
        $zone->code = $request->code;
        $zone->region_id = $request->region_id;
        $zone->description = $request->description;

       
        $zone->save();

        return redirect()->Route('zone.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $zone = Zone::find($id);

        $zone->delete();

        Session()->flash('notif','Deleted Successfuly');

        return redirect()->Route('zone.index');
    }
}
