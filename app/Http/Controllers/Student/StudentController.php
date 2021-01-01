<?php

namespace App\Http\Controllers\Student;
use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;


class StudentController extends Controller
{
     public function create(){
		 $data['students']=Student::select('*')->get();
              	return view('studentdetails.create');
              }

              public function index(){
				  $data['index'] =1;
           		$data['students']=Student::select('*')->paginate(5);
               return view('studentdetails.index',$data);

           	}
           	public function store(Request $request){

           		$student = new Student();
           		$student->name=$request->input('name');
           		$student->address=$request->input('address');
           		$student->rollno=$request->input('rollno');
           		$student->faculty=$request->input('faculty');
           		$student->school=$request->input('school');
           		$student->age=$request->input('age');
           		$student->gender=$request->input('gender');
           		$student->fathername=$request->input('fathername');
           		$student->mothername=$request->input('mothername');
           		$student->hobbies=$request->input('hobbies');



				$request->validate([
					'name' => 'required|max:255',
					'address' => 'required',
					'rollno'=>'required',
					'faculty'=>'required',
					'school'=>'required',
					'age'=>'required|gt:0|max:100',
					'fathername'=>'required',
					'mothername'=>'required',
					'hobbies'=>'required',
					'profile_photo'=>'required|image|mimes:jpeg,png,gif',


				],
					[
						'name.required'=>'name is required'	,
						'address.required'=>'address is required',
						'roll.required'=>'roll is required',
						'faculty.required'=>'faculty is required',
						'school.required'=>'school is required',
						'age.required'=>'age is required',
						'fathername.required'=>'fathers name is required',
						'mothername.required'=>'mothers name is required',
						'hobbies.required'=>'hobbies are required',
						'gender.required'=>'gender is required',
					]

				);
					if($request->hasFile('profile_photo')){
						$file = $request->file('profile_photo');
						$filename = $file->getClientOriginalName();
						$path = 'uploads/student-profile/';
						$file->move($path, $filename);
						$student->profile_photo=$filename;
					}


           		$student->save();
           		return redirect()->route('student.index')->with('success','Data inserted sucessfully');

           	}

           	public function edit ($id ){

				$data['student']=Student::findOrFail($id);
           		//$data['student']=Student::select('*')->where('id',$id)->first();


           		return view('studentdetails.edit',$data);
           	}

           	public function update(Request $request ,$id){

           		            $student = Student::findOrFail($id);
           		            $student->name=$request->input('name');
                       		$student->address=$request->input('address');
                       		$student->rollno=$request->input('rollno');
                       		$student->faculty=$request->input('faculty');
                       		$student->school=$request->input('school');
                       		$student->age=$request->input('age');
                       		$student->gender=$request->input('gender');
                       		$student->fathername=$request->input('fathername');
                       		$student->mothername=$request->input('mothername');
							$student->hobbies=$request->input('hobbies');

							if($request->hasFile('profile_photo')){

								$file = $request->file('profile_photo');
								$filename = $file->getClientOriginalName();
								$path = 'uploads/student-profile/';
								$file->move($path, $filename);
								$student->profile_photo=$filename;
							}
                       		$student->save();
           		            return redirect()->route('student.index')->with('success','Data updated sucessfully');

           	}

           	public function delete($id){

           		$delete=Student::select('*')->where('id',$id)->delete();
           		return redirect()->route('student.index')->with('success','Data deleted successfully');
           	}


           }

