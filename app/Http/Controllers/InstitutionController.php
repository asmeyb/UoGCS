<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Session;
use Illuminate\Http\Request;
use App\Institution;

class InstitutionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    
    public function index()
    {
        $institute = Institution::all();
        return view('setup.institutionsetups.institution.index')->with('institute', $institute);
    } 

/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create()
    {
        return view('setup.institutionsetups.institution.create');
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

            'name' => 'required|unique:institutions',
            'code' => 'required',
            'description' => 'required'

        ]);
         
        $institution = new Institution;
        $institution->name = $request->name;
        $institution->code = $request->code;
        $institution->description = $request->description;
        $institution->save();
        Session()->flash('notif','Institution Successfully Added');

        return redirect()->route('institute.index');
        //dd($request->all());
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
        $institute = Institution::find($id);
        return view('setup.institutionsetups.institution.edit')->with('institute', $institute);
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

            'name' => 'required|unique:institutions','name',
            'code' => 'required',
            'description' => 'required'

        ]);

        $institute = Institution::find($id);
        
        $institute->name = $request->name;
        $institute->code = $request->code;
        $institute->description = $request->description;
       
        $institute->save();
        Session()->flash('notif','Institution Successfully Updated');
        return redirect()->Route('institute.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $institute = Institution::find($id);
        $institute->delete();

        Session()->flash('notif','You Delete Successfuly');

        return redirect()->Route('institute.index');

    }
}
