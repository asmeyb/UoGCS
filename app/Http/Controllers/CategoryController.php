<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

use App\Category;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::all();
        return view('setup.institutionsetups.studenttype.index')->with('categoryes', $category);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('setup.institutionsetups.studenttype.create');
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

            'category' => 'required|unique:categories',
            'description' => 'required'

        ]);
         
        $categorys = new Category;
        $categorys->category = $request->category;
        $categorys->description = $request->description;
        $categorys->save();
        Session()->flash('notif','Category Added Successfuly');

        return redirect()->route('studenttype.index');
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
        $category = Category::find($id);
        return view('setup.institutionsetups.studenttype.edit')->with('category', $category);

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

        'category' => 'required',
        'description' => 'required'

    ]);

    $categoryupdate = Category::find($id);
    
    $categoryupdate->category = $request->category;
    $categoryupdate->description = $request->description;
    $categoryupdate->save();
    Session()->flash('notif','Category Updated Successfuly');

    return redirect()->Route('studenttype.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categorydelete = Category::find($id);
        $categorydelete->delete();

        Session()->flash('notif','Delete Successfuly');

        return redirect()->Route('studenttype.index');
    }
}
