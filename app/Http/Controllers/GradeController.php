<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;

use Illuminate\Http\Request;
use App\Grade;


class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grade = Grade::all();
        return view('setup.institutionsetups.gradesetup.index')->with('grade', $grade);
    }

    public function front()
    {
        return view('setup.class.front');
    } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('setup.institutionsetups.gradesetup.create'); 
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

            'grade' => 'required|max:3|unique:grades',
            'description' => 'required',

        ]);
        
        $class = new Grade;
        $class->grade = $request->grade;
        $class->description = $request->description;
        $class->save();

        Session()->flash('notif','Grade Successfully Added');
        return redirect()->route('grade.index');
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
       
        $grade = Grade::find($id);
        return view('setup.institutionsetups.gradesetup.edit')->with('grade', $grade);

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
     
                'grade' => 'required|max:3',
                'description' => 'required',
     
         ]);
     
         $classupdate = Grade::find($id);
         
         $classupdate->grade = $request->grade;
         $classupdate->description = $request->description;
         $classupdate->save();
 
         Session()->flash('notif','Grade Successfully Updated');
         return redirect()->route('grade.index');
     
         
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dradedelete = Grade::find($id);

        $dradedelete->delete();

        Session()->flash('notif','Deleted Successfuly');

        return redirect()->Route('grade.index');
    }
}
