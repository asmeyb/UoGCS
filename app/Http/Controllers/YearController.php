<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Year;

class YearController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $year = Year::all();
        return view('setup.institutionsetups.yearsetup.index')->with('year', $year);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('setup.institutionsetups.yearsetup.create');
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
            
            'year' => 'required|max:4|unique:years',
            'description' => 'required',

        ]);
        
        $year = new Year;
        $year->year = $request->year;
        $year->description = $request->description;
        $year->save();
        
        Session()->flash('notif','Year SetUp Successfully Added');
        return redirect()->Route('year.index');
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
        $year = Year::find($id);
        return view('setup.institutionsetups.yearsetup.edit')->with('year', $year);
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

        'year' => 'required|max:4',
        'description' => 'required',

    ]);

        $year = Year::find($id);
        $year->year = $request->year;
        $year->description = $request->description;
        $year->save();

        Session()->flash('notif','Year SetUp Successfully Updated');
        return redirect()->Route('year.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $year = Year::find($id);

        $year->delete();

        Session()->flash('notif','Deleted Successfuly');

        return redirect()->Route('year.index');
    }
}
