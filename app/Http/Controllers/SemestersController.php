<?php

namespace App\Http\Controllers;

use App\Semester;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SemestersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $semesters= Semester::all();
        return view('semesters.index', ['semesters'=>$semesters]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('semesters.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $semester = Semester::create([
            'name'=>$request->input('name')
            
        ]);
        if($semester){
            return redirect()->route('semesters.show', ['semester'=>$semester->id])
            ->with('success', 'semester created successfully');
        }
    
        return back()->withInput()->with('errors', 'Error semester not created');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Semester  $semester
     * @return \Illuminate\Http\Response
     */
    public function show(Semester $semester)
    {
        //
        $semester = Semester::find($semester->id);

        return view('semesters.show', ['semester'=>$semester]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Semester  $semester
     * @return \Illuminate\Http\Response
     */
    public function edit(Semester $semester)
    {
        //
        $semester = Semester::find($semester->id);

        return view('semesters.edit', ['semester'=>$semester]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Semester  $semester
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Semester $semester)
    {
        //
        $semesterUpdate = Semester::where('id', $semester->id)
        ->update([
               'name'=>$request->input('name')
        ]);

        if($semesterUpdate){
        return redirect()->route('semesters.show', ['semester'=> $semester->id])
        ->with('success', 'semester updated seccessfully');
            }

        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Semester  $semester
     * @return \Illuminate\Http\Response
     */
    public function destroy(Semester $semester)
    {
        //
       $findSemester = Semester::find($semester->id);
       if($findSemester->delete()){

            return redirect()->route('semesters.index')
            ->with('success', 'semester deleted successfuly');
       }
       return back()->withInput()->with('error', 'semester not deleted');
       }
    }

