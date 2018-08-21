@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Student Admission </div>
                
                <div class="card-body">
                <form action="{{route('studentAdmission.update',['id'=>$studentAdmission->id])}}" enctype="multipart/form-data" method="POST">
                {{ csrf_field() }}
                    <h2><small>Student Biography</small></h2>
                    <hr class="colorgraph">
                    <div class="row">
                        <div class="col-xs-8 col-sm-6 col-md-4">
                            <label for="firstName">Frist Name</label>
                            <div class="form-group">
                                <input type="text" name="firstName" class="form-control input-lg" value="{{$studentAdmission->firstName}}">
                            </div>
                        </div>
                        <div class="col-xs-8 col-sm-6 col-md-4">
                            <label for="middleName">Middle Namle</label>
                            <div class="form-group">
                                <input type="text" name="middleName" class="form-control input-lg" value="{{$studentAdmission->middleName}}">
                            </div>
                        </div>
                        <div class="col-xs-8 col-sm-6 col-md-4">
                            <label for="lastName">Last Name</label>
                            <div class="form-group">
                                <input type="text" name="lastName" class="form-control input-lg" value="{{$studentAdmission->lastName}}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-8 col-sm-6 col-md-4" >
                            <label for="birthDate">Date of Birth </label>
                            <div class="form-group">
                                <input name="birthDate" type="date" class="form-control input-lg" value="{{$studentAdmission->birthDate}}">
                            </div>
                        </div>
                        <div class="col-xs-8 col-sm-6 col-md-4">
                            <label for="birthPlace">Birth place</label>
                            <div class="form-group">                                
                                <input type="text" name="birthPlace" id="lastName" class="form-control input-lg" value="{{$studentAdmission->birthPlace}}">
                            </div>
                        </div>
                        <div class="col-xs-8 col-sm-6 col-md-4">
                            <label for="sex">Sex</label>
                            <div class="form-group">                                
                                <select name="sex" class="form-control form-control-lg">
                                    <option value="0">Please select</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 col-sm-6 col-md-4">
                        <label for="motherTongue">Mother Tongue</label>
                            <div class="form-group">                                
                                <select name="motherTongue" class="form-control form-control-lg">
                                    <option value="0">Please select</option>
                                    <option value="am">Amharic</option>
                                    <option value="en">English</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-8 col-sm-6 col-md-4">
                            <label for="photo">Student Photo</label>
                            <input name="photo" type="file" class="form-control-file input-lg" value="{{$studentAdmission->photo}}">
                        </div>
                    </div>
                    <br>
                    <h2><small>Student Address</small></h2>
                    <hr class="colorgraph">
                    <div class="row">
                        <div class="col-xs-8 col-sm-6 col-md-4">
                            <label for="studentCountry">Country</label>
                            <div class="form-group">                                
                                <select name="studentCountry" class="form-control form-control-lg">
                                    <option value="{{$studentAdmission->name}}">{{$studentAdmission->name}}</option>
                                    @foreach($countrys as $country)
                                        <option value="{{$country->name}}">{{$country->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                          
                        <div class="col-xs-8 col-sm-6 col-md-4">
                            <label for="studentRegion">Region</label>
                            <div class="form-group">                                
                                <select name="studentRegion" class="form-control form-control-lg">
                                    <option value="{{$studentAdmission->name}}">{{$studentAdmission->name}}</option>
                                    @foreach($regions as $region)
                                        <option value="{{$region->name}}">{{$region->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-8 col-sm-6 col-md-4">
                            <label for="studentZone">Zone</label>
                            <div class="form-group">                                
                                <select name="studentZone" class="form-control form-control-lg">
                                    <option value="{{$studentAdmission->name}}">{{$studentAdmission->name}}</option>
                                    @foreach($zones as $zone)
                                        <option value="{{$zone->name}}">{{$zone->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>  
                        <div class="col-xs-8 col-sm-6 col-md-4">
                            <label for="studentWoreda">Woreda</label>
                            <div class="form-group">                                
                                <select name="studentWoreda" class="form-control form-control-lg">
                                    <option value="{{$studentAdmission->name}}">{{$studentAdmission->name}}</option>
                                    @foreach($woredas as $woreda)
                                        <option value="{{$woreda->name}}">{{$woreda->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-8 col-sm-6 col-md-4">
                            <label for="studentKebele">Kebele</label>
                            <input type="text" name="studentKebele" class="form-control input-lg" value="{{$studentAdmission->kebele}}">
                        </div> 
                        <div class="col-xs-8 col-sm-6 col-md-4">
                            <label for="name">Email</label>
                            <div class="form-group">                                
                            <input type="email" name="email" id="firstName" class="form-control input-lg" value="{{$studentAdmission->email}}">
                            </div>
                        </div>
                        <div class="col-xs-8 col-sm-6 col-md-4">
                            <label for="name">Phone</label>
                            <div class="form-group">                                
                            <input type="text" name="phone" class="form-control input-lg" value="{{$studentAdmission->phone}}">
                            </div>
                        </div>                                   
                    </div>    

                    <h2><small>Emergency</small></h2>
                    <hr class="colorgraph">
                    <div class="row">
                        <div class="col-xs-8 col-sm-8 col-md-6">
                            <label for="studentEmergencyFullName">Full Name</label>
                            <div class="form-group">
                                <input type="text" name="studentEmergencyFullName" class="form-control input-lg" value="{{$studentAdmission->studentEmergencyFullName}}">
                            </div>
                        </div>
                        <div class="col-xs-8 col-sm-8 col-md-6">
                            <label for="studentEmergencyAddress">Address</label>
                            <div class="form-group">
                                <input type="text" name="studentEmergencyAddress" class="form-control input-lg" value="{{$studentAdmission->studentEmergencyAddress}}">
                            </div>
                        </div>
                        <div class="col-xs-8 col-sm-6 col-md-4">
                            <label for="studentEmergencyRelation">Relation</label>
                            <div class="form-group">
                                <input type="text" name="studentEmergencyRelation" class="form-control input-lg" value="{{$studentAdmission->studentEmergencyRelation}}">
                            </div>
                        </div>
                        <div class="col-xs-8 col-sm-6 col-md-4">
                            <label for="studentEmergencyEmail">Email</label>
                            <div class="form-group">
                                <input type="email" name="studentEmergencyEmail" class="form-control input-lg" value="{{$studentAdmission->studentEmergencyEmail}}">
                            </div>
                        </div>
                        <div class="col-xs-8 col-sm-6 col-md-4">
                            <label for="studentEmergencyPhone">Phone Number</label>
                            <div class="form-group">
                                <input type="text" name="studentEmergencyPhone" class="form-control input-lg" value="{{$studentAdmission->studentEmergencyPhone}}">
                            </div>
                        </div>
                    </div>

                     <h2><small>Grade Information </small></h2>
                    <hr class="colorgraph">
                    <div class="row">
                        <div class="col-xs-8 col-sm-6 col-md-4">
                        <label for="name">Student Type</label>
                            <div class="form-group">                                
                                <select class="form-control form-control-lg">
                                    <option>Please select</option>
                                </select>
                            </div>
                        </div> 
                        <div class="col-xs-8 col-sm-6 col-md-4">
                        <label for="name">Campus </label>
                            <div class="form-group">                                
                                <select class="form-control form-control-lg">
                                    <option>Please select</option>
                                </select>
                            </div>
                        </div> 
                        <div class="col-xs-8 col-sm-6 col-md-4">
                        <label for="name">Grade / Level </label>
                            <div class="form-group">                                
                                <select class="form-control form-control-lg">
                                    <option>Please select</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-8 col-sm-6 col-md-4">
                        <label for="name">Section  </label>
                            <div class="form-group">                                
                                <select class="form-control form-control-lg">
                                    <option>Please select</option>
                                </select>
                            </div>
                        </div> 
                        <div class="col-xs-8 col-sm-6 col-md-4">
                        <label for="name">Acadamic Year </label>
                            <div class="form-group">                                
                                <select class="form-control form-control-lg">
                                    <option>Please select</option>
                                </select>
                            </div>
                        </div>
                        
                    </div>
                    <br>
                    <div class="text-center">
                        <button class="btn btn-primary" type="submit">Update Student</button>                        
                    </div>
                    <div><br/></br/></div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection