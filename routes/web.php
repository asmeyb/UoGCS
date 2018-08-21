<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
/*meserets Route*/
Route::get('/home', ['uses'=>'HomeController@index', 'as'=>'home']);
Route::get('/institute/index', ['uses' => 'InstitutionController@index','as' => 'institute.index']);
Route::get('/institute/create', ['uses' => 'InstitutionController@create','as' => 'institute.create']);
Route::post('/institute/store', ['uses' => 'InstitutionController@store', 'as' => 'institute.store']);
Route::get('/institute/edit/{id}', ['uses' => 'InstitutionController@edit','as' => 'institute.edit']);
Route::post('/institute/update/{id}', ['uses' => 'InstitutionController@update','as' => 'institute.update']);
Route::get('/institute/destroy/{id}', ['uses' => 'InstitutionController@destroy','as' => 'institute.destroy']);

Route::get('/campus/index', ['uses' => 'CampusController@index','as' => 'campus.index']);
Route::get('/campus/create', ['uses' => 'CampusController@create','as' => 'campus.create']);
Route::post('/campus/store', ['uses' => 'CampusController@store', 'as' => 'campus.store']);
Route::get('/campus/edit/{id}', ['uses' => 'CampusController@edit','as' => 'campus.edit']);
Route::post('/campus/update/{id}', ['uses' => 'CampusController@update','as' => 'campus.update']);
Route::get('/campus/destroy/{id}', ['uses' => 'CampusController@destroy','as' => 'campus.destroy']);

Route::get('/grade/index', ['uses' => 'GradeController@index','as' => 'grade.index']);
Route::get('/grade/create', ['uses' => 'GradeController@create','as' => 'grade.create']);
Route::post('/grade/store', ['uses' => 'GradeController@store', 'as' => 'grade.store']);
Route::get('/grade/edit/{id}', ['uses' => 'GradeController@edit','as' => 'grade.edit']);
Route::post('/grade/update/{id}', ['uses' => 'GradeController@update','as' => 'grade.update']);
Route::get('/grade/destroy/{id}', ['uses' => 'GradeController@destroy','as' => 'grade.destroy']);


Route::get('/studenttype/index', ['uses' => 'CategoryController@index','as' => 'studenttype.index']);
Route::get('/studenttype/create', ['uses' => 'CategoryController@create','as' => 'studenttype.create']);
Route::post('/studenttype/store', ['uses' => 'CategoryController@store', 'as' => 'studenttype.store']);
Route::get('/studenttype/edit/{id}', ['uses' => 'CategoryController@edit','as' => 'studenttype.edit']);
Route::post('/studenttype/update/{id}', ['uses' => 'CategoryController@update','as' => 'studenttype.update']);
Route::get('/studenttype/destroy/{id}', ['uses' => 'CategoryController@destroy','as' => 'studenttype.destroy']);

Route::get('/year/index', ['uses' => 'YearController@index','as' => 'year.index']);
Route::get('/year/create', ['uses' => 'YearController@create','as' => 'year.create']);
Route::post('/year/store', ['uses' => 'YearController@store', 'as' => 'year.store']);
Route::get('/year/edit/{id}', ['uses' => 'YearController@edit','as' => 'year.edit']);
Route::post('/year/update/{id}', ['uses' => 'YearController@update','as' => 'year.update']);
Route::get('/year/destroy/{id}', ['uses' => 'YearController@destroy','as' => 'year.destroy']);

/* Endalk Route*/
Route::get('/country/index', ['uses' => 'CountryController@index','as' => 'country.index']);
Route::get('/country/create', ['uses' => 'CountryController@create','as' => 'country.create']);
Route::post('/country/store', ['uses' => 'CountryController@store', 'as' => 'country.store']);
Route::get('/country/edit/{id}', ['uses' => 'CountryController@edit','as' => 'country.edit']);
Route::post('/country/update/{id}', ['uses' => 'CountryController@update','as' => 'country.update']);
Route::get('/country/destroy/{id}', ['uses' => 'CountryController@destroy','as' => 'country.destroy']);

Route::get('/region/index', ['uses' => 'RegionController@index','as' => 'region.index']);
Route::get('/region/create', ['uses' => 'RegionController@create','as' => 'region.create']);
Route::post('/region/store', ['uses' => 'RegionController@store', 'as' => 'region.store']);
Route::get('/region/edit/{id}', ['uses' => 'RegionController@edit','as' => 'region.edit']);
Route::post('/region/update/{id}', ['uses' => 'RegionController@update','as' => 'region.update']);
Route::get('/region/destroy/{id}', ['uses' => 'RegionController@destroy','as' => 'region.destroy']);

Route::get('/zone/index', ['uses' => 'ZoneController@index','as' => 'zone.index']);
Route::get('/zone/create', ['uses' => 'ZoneController@create','as' => 'zone.create']);
Route::post('/zone/store', ['uses' => 'ZoneController@store', 'as' => 'zone.store']);
Route::get('/zone/edit/{id}', ['uses' => 'ZoneController@edit','as' => 'zone.edit']);
Route::post('/zone/update/{id}', ['uses' => 'ZoneController@update','as' => 'zone.update']);
Route::get('/zone/destroy/{id}', ['uses' => 'ZoneController@destroy','as' => 'zone.destroy']);

Route::get('/wereda/index', ['uses' => 'WeredaController@index','as' => 'wereda.index']);
Route::get('/wereda/create', ['uses' => 'WeredaController@create','as' => 'wereda.create']);
Route::post('/weredazone/store', ['uses' => 'WeredaController@store', 'as' => 'wereda.store']);
Route::get('/wereda/edit/{id}', ['uses' => 'WeredaController@edit','as' => 'wereda.edit']);
Route::post('/wereda/update/{id}', ['uses' => 'WeredaController@update','as' => 'wereda.update']);
Route::get('/wereda/destroy/{id}', ['uses' => 'WeredaController@destroy','as' => 'wereda.destroy']);

/*addisu  route */
Route::get('setup/occupation', ['uses'=>'OccupationController@index','as'=>'setup.occupation']);
Route::post('/addOccupation',['uses'=>'OccupationController@store','as'=>'occupation.store']);

Route::get('setup/class', ['uses'=>'RoomController@index', 'as'=> 'setup.class']);
Route::post('/addRoom',['uses'=>'RoomController@store','as'=>'room.store']);

Route::get('setup/marital', ['uses'=>'MaritalController@index', 'as'=>'setup.marital']);
Route::post('/addMaritals',['uses'=>'MaritalController@store','as'=>'marital.store']);

Route::post('/addStaff',['uses'=>'StaffController@store','as'=>'staffs.store']);
Route::get('setup/staffs', ['uses'=>'StaffController@index', 'as'=>'setup.staffs']);


/*Asmamaw Yismaw Route*/
	Route::get('/bloodgroup',['uses'=>'BloodGroupController@index','as'=>'bloodgroup.index']);
	Route::get('/bloodgroup/create',['uses'=>'BloodGroupController@create','as'=>'bloodgroup.create']);
	Route::get('/bloodgroup/edit/{id}',['uses'=>'BloodGroupController@edit','as'=>'bloodgroup.edit']);
	Route::post('/bloodgroup/update/{id}',['uses'=>'BloodGroupController@update','as'=>'bloodgroup.update']);
	Route::post('/bloodgroup/store',['uses'=>'BloodGroupController@store','as'=>'bloodgroup.store']);
	Route::get('/bloodgroup/delete/{id}',['uses'=>'BloodGroupController@destroy','as'=>'bloodgroup.destroy']);


	Route::get('/attendance',['uses'=>'AttendanceController@index','as'=>'attendance.index']);
	Route::get('/attendance/create',['uses'=>'AttendanceController@create','as'=>'attendance.create']);
	Route::get('/attendance/edit/{id}',['uses'=>'AttendanceController@edit','as'=>'attendance.edit']);
	Route::post('/attendance/update/{id}',['uses'=>'AttendanceController@update','as'=>'attendance.update']);
	Route::post('/attendance/store',['uses'=>'AttendanceController@store','as'=>'attendance.store']);
	Route::get('/attendance/delete/{id}',['uses'=>'AttendanceController@destroy','as'=>'attendance.destroy']);

	Route::get('/hollydaytypes',['uses'=>'HollydayTypesController@index','as'=>'hollydaytypes.index']);
	Route::get('/hollydaytypes/create',['uses'=>'HollydayTypesController@create','as'=>'hollydaytypes.create']);
	Route::get('/hollydaytypes/edit/{id}',['uses'=>'HollydayTypesController@edit','as'=>'hollydaytypes.edit']);
	Route::post('/hollydaytypes/update/{id}',['uses'=>'HollydayTypesController@update','as'=>'hollydaytypes.update']);
	Route::post('/hollydaytypes/store',['uses'=>'HollydayTypesController@store','as'=>'hollydaytypes.store']);
	Route::get('/hollydaytypes/delete/{id}',['uses'=>'HollydayTypesController@destroy','as'=>'hollydaytypes.destroy']);

	Route::get('/hollydays',['uses'=>'HollydaysController@index','as'=>'hollydays.index']);
	Route::get('/hollydays/create',['uses'=>'HollydaysController@create','as'=>'hollydays.create']);
	Route::get('/hollydays/edit/{id}',['uses'=>'HollydaysController@edit','as'=>'hollydays.edit']);
	Route::post('/hollydays/update/{id}',['uses'=>'HollydaysController@update','as'=>'hollydays.update']);
	Route::post('/hollydays/store',['uses'=>'HollydaysController@store','as'=>'hollydays.store']);
	Route::get('/hollydays/delete/{id}',['uses'=>'HollydaysController@destroy','as'=>'hollydays.destroy']);
/* End of Asmamaw Yismaw Route */


	// sudent admission

	Route::get('/studentAdmission',['uses'=>'StudentAdmissionController@index','as'=>'studentAdmission.index']);
	Route::get('/studentAdmission/create',['uses'=>'StudentAdmissionController@create','as'=>'studentAdmission.create']);
	Route::get('/studentAdmission/edit/{id}',['uses'=>'StudentAdmissionController@edit','as'=>'studentAdmission.edit']);
	Route::post('/studentAdmission/update/{id}',['uses'=>'StudentAdmissionController@update','as'=>'studentAdmission.update']);
	Route::post('/studentAdmission/store',['uses'=>'StudentAdmissionController@store','as'=>'studentAdmission.store']);
	Route::get('/studentAdmission/delete/{id}',['uses'=>'StudentAdmissionController@destroy','as'=>'studentAdmission.destroy']);


	Route::get('/studentAddress',['uses'=>'StudentAddressController@index','as'=>'studentAddress.index']);
	Route::get('/studentAddress/create',['uses'=>'StudentAddressController@create','as'=>'studentAddress.create']);
	Route::get('/studentAddress/edit/{id}',['uses'=>'StudentAddressController@edit','as'=>'studentAddress.edit']);
	Route::post('/studentAddress/update/{id}',['uses'=>'StudentAddressController@update','as'=>'studentAddress.update']);
	Route::post('/studentAddress/store',['uses'=>'StudentAddressController@store','as'=>'studentAddress.store']);
	Route::get('/studentAddress/delete/{id}',['uses'=>'StudentAddressController@destroy','as'=>'studentAddress.destroy']);

	Route::get('/studentBioGraphy',['uses'=>'StudentBioGraphyController@index','as'=>'studentBioGraphy.index']);
	Route::get('/studentBioGraphy/create',['uses'=>'StudentBioGraphyController@create','as'=>'studentBioGraphy.create']);
	Route::get('/studentBioGraphy/edit/{id}',['uses'=>'StudentBioGraphyController@edit','as'=>'studentBioGraphy.edit']);
	Route::post('/studentBioGraphy/update/{id}',['uses'=>'StudentBioGraphyController@update','as'=>'studentBioGraphy.update']);
	Route::post('/studentBioGraphy/store',['uses'=>'StudentBioGraphyController@store','as'=>'studentBioGraphy.store']);
	Route::get('/studentBioGraphy/delete/{id}',['uses'=>'StudentBioGraphyController@destroy','as'=>'studentBioGraphy.destroy']);

	Route::get('/studentEmergencyContact',['uses'=>'StudentEmergencyContactController@index','as'=>'studentEmergencyContact.index']);
	Route::get('/studentEmergencyContact/create',['uses'=>'StudentEmergencyContactController@create','as'=>'studentEmergencyContact.create']);
	Route::get('/studentEmergencyContact/edit/{id}',['uses'=>'StudentEmergencyContactController@edit','as'=>'studentEmergencyContact.edit']);
	Route::post('/studentEmergencyContact/update/{id}',['uses'=>'StudentEmergencyContactController@update','as'=>'studentEmergencyContact.update']);
	Route::post('/studentEmergencyContact/store',['uses'=>'StudentEmergencyContactController@store','as'=>'studentEmergencyContact.store']);
	Route::get('/studentEmergencyContact/delete/{id}',['uses'=>'StudentEmergencyContactController@destroy','as'=>'studentEmergencyContact.destroy']);

	Route::get('/studentGradeInformation',['uses'=>'StudentGradeInformationController@index','as'=>'studentGradeInformation.index']);
	Route::get('/studentGradeInformation/create',['uses'=>'StudentGradeInformationContactController@create','as'=>'studentGradeInformation.create']);
	Route::get('/studentGradeInformation/edit/{id}',['uses'=>'StudentGradeInformationContactController@edit','as'=>'studentGradeInformation.edit']);
	Route::post('/studentGradeInformation/update/{id}',['uses'=>'StudentGradeInformationContactController@update','as'=>'studentGradeInformation.update']);
	Route::post('/studentGradeInformation/store',['uses'=>'SStudentGradeInformationController@store','as'=>'studentGradeInformation.store']);
	Route::get('/studentGradeInformation/delete/{id}',['uses'=>'StudentGradeInformationController@destroy','as'=>'studentGradeInformation.destroy']);

});