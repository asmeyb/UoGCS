<?php

namespace App\Http\Controllers;

use App\Admittype;
use Illuminate\Http\Request;

class AdmittypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $admittypes= Admittype::all();
        return view('admittypes.index', ['admittypes'=>$admittypes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admittypes.create');
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
        $admittype = Admittype::create([
            'name'=>$request->input('name')
            
        ]);
        if($admittype){
            return redirect()->route('admittypes.show', ['admittype'=>$admittype->id])
            ->with('success', 'admittype created successfully');
        }
    
        return back()->withInput()->with('errors', 'Error admittype not created');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admittype  $admittype
     * @return \Illuminate\Http\Response
     */
    public function show(Admittype $admittype)
    {
        //
        $admittype = Admittype::find($admittype->id);

        return view('admittypes.show', ['admittype'=>$admittype]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admittype  $admittype
     * @return \Illuminate\Http\Response
     */
    public function edit(Admittype $admittype)
    {
        //
        $admittype = Admittype::find($admittype->id);

        return view('admittypes.edit', ['admittype'=>$admittype]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admittype  $admittype
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admittype $admittype)
    {
        //
        $admittypeUpdate = Admittype::where('id', $admittype->id)
        ->update([
               'name'=>$request->input('name')
        ]);

        if($admittypeUpdate){
        return redirect()->route('admittypes.show', ['admittype'=> $admittype->id])
        ->with('success', 'admittype updated seccessfully');
            }

        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admittype  $admittype
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admittype $admittype)
    {
        //
       $findAdmittype = Admittype::find($admittype->id);
       if($findAdmittype->delete()){

            return redirect()->route('admittypes.index')
            ->with('success', 'admittype deleted successfuly');
       }
       return back()->withInput()->with('error', 'admittype not deleted');
       }
    }
