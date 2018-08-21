<?php

namespace App\Http\Controllers;

use App\Relationshiptype;
use Illuminate\Http\Request;

class RelationshiptypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $relationshiptypes= Relationshiptype::all();
        return view('relationshiptypes.index', ['relationshiptypes'=>$relationshiptypes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('relationshiptypes.create');
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
        $relationshiptype= Relationshiptype::create([
            'name'=>$request->input('name')
            
        ]);
        if($relationshiptype){
            return redirect()->route('relationshiptypes.show', ['relationshiptype'=>$relationshiptype->id])
            ->with('success', 'relationship type created successfully');
        }
    
        return back()->withInput()->with('errors', 'Error relationship type not created');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Relationshiptype $relationshiptype
     * @return \Illuminate\Http\Response
     */
    public function show(Relationshiptype $relationshiptype)
    {
        //
        $relationshiptype = Relationshiptype::find($relationshiptype->id);

        return view('relationshiptypes.show', ['relationshiptype'=>$relationshiptype]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Relationshiptype  $relationshiptype
     * @return \Illuminate\Http\Response
     */
    public function edit(Relationshiptype $relationshiptype)
    {
        //
        $Relationshiptype = Relationshiptype::find($relationshiptype->id);

        return view('relationshiptypes.edit', ['relationshiptype'=>$relationshiptype]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Relationshiptype  $relationshiptype
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Relationshiptype $relationshiptype)
    {
        //
        $relationshiptypeUpdate = Relationshiptype::where('id', $relationshiptype->id)
        ->update([
               'name'=>$request->input('name')
        ]);

        if($relationshiptypeUpdate){
        return redirect()->route('relationshiptypes.show', ['relationshiptype'=> $relationshiptype->id])
        ->with('success', 'relationshiptypes updated seccessfully');
            }

        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Relationshiptype  $relationshiptype
     * @return \Illuminate\Http\Response
     */
    public function destroy(Relationshiptype $relationshiptype)
    {
        //
       $findRelationshiptype = Relationshiptype::find($relationshiptype->id);
       if($findRelationshiptype->delete()){

            return redirect()->route('relationshiptypes.index')
            ->with('success', 'relationshiptype deleted successfuly');
       }
       return back()->withInput()->with('error', 'relationshiptypes not deleted');
       }
    }