<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BloodGroup;

class BloodGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bloodGroups = BloodGroup::all();
        return view('setup.bloodgroup.index')->with('bloodGroups',$bloodGroups);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('setup.bloodgroup.create');
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
        
        BloodGroup::create([
            'type'=>$request->type,
            'description'=>$request->description
        ]);

        //Session::flash('success','Tag Created Successfully');

        return redirect()->route('bloodgroup.index');
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
        $bloodGroup = BloodGroup::find($id);

        return view('setup.bloodgroup.edit')->with('bloodgroup',$bloodGroup);
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


        $bloodgroup = BloodGroup::find($id);

        $bloodgroup->type = $request->type;
        $bloodgroup->description = $request->description;

        $bloodgroup->save();

        //Session::flash('success','Tag Updated Successfully');

        return redirect()->route('bloodgroup.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        BloodGroup::destroy($id);

        //Session::flash('success','Tag Deleted Seccessfully');

        return redirect()->back();
    }
}
