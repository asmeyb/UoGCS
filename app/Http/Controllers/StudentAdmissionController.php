<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StudentAdmission;
use App\Country;
use App\Region;
use App\Zone;
use App\Wereda;


class StudentAdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('studentAdmission.index')->with('students',StudentAdmission::all()); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('studentAdmission.create')->with('countrys',Country::all())
        ->with('regions',Region::all())
        ->with('zones',Zone::all())
        ->with('woredas',Wereda::all())
        ->with('studentAdmission',StudentAdmission::all()); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'firstName'=>'required',
            'middleName'=>'required',            
            'lastName'=>'required',
            'sex'=>'required',
            'studentEmergencyFullName'=>'required',
            'studentEmergencyPhone'=>'required'
        ]);

        $photo = $request->photo;

        $photoNewName = time().$photo->getClientOriginalName();

        $photo->move('uploads/studentphoto',$photoNewName);

        $studentAdmission = StudentAdmission::create([
            'firstName'=>$request->firstName,            
            'middleName'=>$request->middleName,
            'lastName'=>$request->lastName,
            'birthDate'=>$request->birthDate,
            'birthPlace'=>$request->birthPlace,
            'sex'=>$request->sex,
            'motherTongue'=>$request->motherTongue,
            'photo'=> 'uploads/studentphoto/'.$photoNewName,  
            
            'studentCountry'=>$request->studentCountry, 
            'studentRegion'=>$request->studentRegion,
            'studentZone'=>$request->studentZone,
            'studentWoreda'=>$request->studentWoreda,
            'studentKebele'=>$request->studentKebele,
            
            'studentEmergencyFullName'=>$request->studentEmergencyFullName,
            'studentEmergencyAddress'=>$request->studentEmergencyAddress,
            'studentEmergencyRelation'=>$request->studentEmergencyRelation,
            'studentEmergencyEmail'=>$request->studentEmergencyEmail,
            'studentEmergencyPhone'=>$request->studentEmergencyPhone       
            
             
            
            
              

        ]);

        return redirect()->back();

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
        $studentAdmission = StudentAdmission::find($id);

        return view('studentAdmission.edit')->with('countrys',Country::all())
                                            ->with('regions',Region::all())
                                            ->with('zones',Zone::all())
                                            ->with('woredas',Wereda::all())
                                            ->with('studentAdmission',$studentAdmission);
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
        $this->validate($request,[
            'firstName'=>'required',
            'middleName'=>'required',            
            'lastName'=>'required',
            'sex'=>'required',
            'studentEmergencyFullName'=>'required',
            'studentEmergencyPhone'=>'required'
        ]);
        
        $studentAdmission = StudentAdmission::find($id);

        if($request->hasFile('photo'))
        {
            $photo = $request->featured;

            $photoNewName = time().$photo.getClientOriginalName();

            $photo->move('uploads/studentadmission',$photoNewName);

            $studentAdmission->photo = 'uploads/studentadmission'.$featured_new_name;
        }

        $studentAdmission->firstName = $request->firstName;           
        $studentAdmission->middleName = $request->middleName;
        $studentAdmission->lastName = $request->lastName;
        $studentAdmission->birthDate = $request->birthDate;
        $studentAdmission->birthPlace = $request->birthPlace;
        $studentAdmission->sex = $request->sex;
        $studentAdmission->motherTongue = $request->motherTongue;
        //$studentAdmission->photo => 'uploads/studentphoto/'.$photoNewName,  
            
        $studentAdmission->studentCountry = $request->studentCountry;
        $studentAdmission->studentRegion = $request->studentRegion;
        $studentAdmission->studentZone = $request->studentZone;
        $studentAdmission->studentWoreda = $request->studentWoreda;
        $studentAdmission->studentKebele = $request->studentKebele;
            
        $studentAdmission->studentEmergencyFullName = $request->studentEmergencyFullName;
        $studentAdmission->studentEmergencyAddress = $request->studentEmergencyAddress;
        $studentAdmission->studentEmergencyRelation = $request->studentEmergencyRelation;
        $studentAdmission->studentEmergencyEmail = $request->studentEmergencyEmail;
        $studentAdmission->studentEmergencyPhone = $request->studentEmergencyPhone;

        $studentAdmission->save();

        return redirect()->route('studentAdmission.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
