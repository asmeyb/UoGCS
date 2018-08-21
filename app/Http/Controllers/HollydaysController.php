<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hollydays;
use App\Hollydaytypes;

class HollydaysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $hollydaytypes = Hollydaytypes::all();
       $hollydays = Hollydays::all();
       return view('setup.hollydays.theday.index')->with('hollydays',$hollydays)
                                                  ->with('hollydaytypes',$hollydaytypes); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hollydaytypes = Hollydaytypes::all();
        return view('setup.hollydays.theday.create')->with('hollydaytypes',$hollydaytypes);
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
            'type'=>'required',
            'name'=>'required',
            'theday'=>'required'
        ]);
        
        Hollydays::create([
            'type'=>$request->type,
            'name'=>$request->name,
            'theday'=>$request->theday
        ]);

        //Session::flash('success','Tag Created Successfully');

        return redirect()->route('hollydays.index');
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
       $hollydaytypes = Hollydaytypes::all();
       $hollyday = Hollydays::find($id);
       return view('setup.hollydays.theday.edit')->with('hollyday',$hollyday)
                                                  ->with('hollydaytypes',$hollydaytypes);
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
        $this->validate($request,[            
            'type'=>'required',
            'name'=>'required',
            'theday'=>'required'                       
        ]);


        $hollyday = Hollydays::find($id);

        $hollyday->type = $request->type;
        $hollyday->name = $request->name;
        $hollyday->theday = $request->theday;

        $hollyday->save();

        //Session::flash('success','Tag Updated Successfully');

        return redirect()->route('hollydays.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Hollydays::destroy($id);

        //Session::flash('success','Tag Deleted Seccessfully');

        return redirect()->back();
    }
}
