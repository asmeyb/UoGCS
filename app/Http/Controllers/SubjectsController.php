<?php

namespace App\Http\Controllers;

use App\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $subjects= Subject::all();
        return view('subjects.index', ['subjects'=>$subjects]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('subjects.create');
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
        $subject = Subject::create([
            'name'=>$request->input('name')
            
        ]);
        if($subject){
            return redirect()->route('subjects.show', ['subject'=>$subject->id])
            ->with('success', 'subject created successfully');
        }
    
        return back()->withInput()->with('errors', 'Error subject not created');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function show(Subject $subject)
    {
        //
        $subject = Subject::find($subject->id);

        return view('subjects.show', ['subject'=>$subject]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit(Subject $subject)
    {
        //
        $subject = Subject::find($subject->id);

        return view('subjects.edit', ['subject'=>$subject]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subject $subject)
    {
        //
        $subjectUpdate = Subject::where('id', $subject->id)
        ->update([
               'name'=>$request->input('name')
        ]);

        if($subjectUpdate){
        return redirect()->route('subjects.show', ['subject'=> $subject->id])
        ->with('success', 'subject updated seccessfully');
            }

        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subject $subject)
    {
        //
       $findSubject = Subject::find($subject->id);
       if($findSubject->delete()){

            return redirect()->route('subjects.index')
            ->with('success', 'subject deleted successfuly');
       }
       return back()->withInput()->with('error', 'subject not deleted');
       }
    }

