<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Zone;
use App\Wereda;
class WeredaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wereda = Wereda::all();
        return view('setup.addresSetup.wereda.index')->with('wereda', $wereda);
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $zone = Zone::all();
        return view('setup.addresSetup.wereda.create')->with('zone', $zone);
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
            'zone_id'=>'required',
            'name'=>'required|unique:weredas',
            'code'=>'required',
            'description'=>'required'
        ]);

        $woreda = new Wereda;
        
        $woreda->zone_id = $request->zone_id;
        $woreda->name = $request->name;        
        $woreda->code = $request->code;
        $woreda->description = $request->description;

        $woreda->save();
        Session()->flash('notif','Wereda SetUp Successfully Added');
        return redirect()->route('wereda.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $wereda = Wereda::find($id);
        return view('setup.addresSetup.wereda.show')->with('wereda',$wereda);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $wereda = Wereda::find($id);
        $zone = Zone::all();

        return view('setup.addresSetup.wereda.edit')->with('zone', $zone)
                                                  ->with('wereda', $wereda);
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
        //dd($request->all());

        $this->validate($request, [
            
            'zone_id'=>'required',
            'name'=>'required',
            'code'=>'required',
            'description'=>'required' 

        ]);
        
        $wereda = Wereda::find($id);
        
        $wereda->name = $request->name;
        $wereda->zone_id = $request->zone_id;
        $wereda->code = $request->code;
        $wereda->description = $request->description;

       
        $wereda->save();
        Session()->flash('notif','Wereda SetUp Successfully Updated');
        return redirect()->Route('wereda.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $wereda = Wereda::find($id);

        $wereda->delete();

        Session()->flash('notif','Deleted Successfuly');

        return redirect()->Route('wereda.index');
    }
}
