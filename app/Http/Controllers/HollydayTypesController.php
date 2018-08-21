<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hollydaytypes;

class HollydayTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hollydaytypes = Hollydaytypes::all();
        return view('setup.hollydays.types.index')->with('hollydaytypes',$hollydaytypes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('setup.hollydays.types.create');
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
            'description'=>'required'
        ]);
        
        Hollydaytypes::create([
            'type'=>$request->type,
            'description'=>$request->description
        ]);

        //Session::flash('success','Tag Created Successfully');

        return redirect()->route('hollydaytypes.index');
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
        $hollydaytype = HollydayTypes::find($id);

        return view('setup.hollydays.types.edit')->with('hollydaytype',$hollydaytype);
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
            'description'=>'required'                       
        ]);


        $hollydaytype = HollydayTypes::find($id);

        $hollydaytype->type = $request->type;
        $hollydaytype->description = $request->description;

        $hollydaytype->save();

        //Session::flash('success','Tag Updated Successfully');

        return redirect()->route('hollydaytypes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        HollydayTypes::destroy($id);

        //Session::flash('success','Tag Deleted Seccessfully');

        return redirect()->back();
    }
}
