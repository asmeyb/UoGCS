<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Campus;
class CampusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $campus = Campus::all();
        return view('setup.institutionsetups.campussetup.index')->with('campus', $campus);
    }
     
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('setup.institutionsetups.campussetup.create');
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
            
            'name' => 'required|unique:campuses','name',
            'code' => 'required',
            'description' => 'required'

        ]);
        //dd($request->all());
        
        $campus = new Campus;
        $campus->name = $request->name;
        $campus->code = $request->code;
        $campus->description = $request->description;
        $campus->save();
        Session()->flash('notif','Campus Successfully Added');

        return redirect()->route('campus.index');
    
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
        $campus = Campus::find($id);
        return view('setup.institutionsetups.campussetup.edit')->with('campus', $campus);
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
       // dd($request->all());

        $this->validate($request, [
 
            'name' => 'required',
            'code' => 'required',
            'description' => 'required'

        ]);

        $campus = Campus::find($id);
        
        $campus->name = $request->name;
        $campus->code = $request->code;
        $campus->description = $request->description;
        $campus->save();
        Session()->flash('notif','Campus Successfully Updated');
        return redirect()->Route('campus.index');
    

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $campus = Campus::find($id);
        $campus->delete();

        Session()->flash('notif','You Delete Successfuly');

        return redirect()->Route('campus.index');
    }
}
