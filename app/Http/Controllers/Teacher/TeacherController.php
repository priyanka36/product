<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    public function create(){

        return view('teacherdetails.create');
    }

    public function index(){
        $data['index'] =1;
        $data['teachers']=Teacher::select('*')->paginate(5);
        return view('teacherdetails.index',$data);

    }
    public function store(Request $request){

        $teacher = new Teacher();
        $teacher->student_id=$request->input('student_id');
        $teacher->name=$request->input('name');
        $teacher->email=$request->input('email');
        $teacher->phone=$request->input('phone');
        $teacher->address=$request->input('address');
        $teacher->dateofbirth=$request->input('dateofbirth');
        $teacher->faculty=$request->input('faculty');
        $teacher->gender=$request->input('gender');
        $teacher->age=$request->input('age');
        $teacher->teacher_photo=$request->input('teacher_photo');

        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required',
            'phone'=>'required',
            'address'=>'required',
            'dateofbirth'=>'required',
            'faculty'=>'required',
            'gender'=>'required',
            'age'=>'required',
            'teacher_photo'=>'required',




        ]);


        if($request->hasFile('teacher_photo')){
            $file = $request->file('teacher_photo');
            $filename = $file->getClientOriginalName();
            $path = 'uploads/teacher-photo/';
            $file->move($path, $filename);
            $teacher->teacher_photo=$filename;
        }







        $teacher->save();
        return redirect()->route('teacher.index')->with('success','Data inserted sucessfully');

    }

    public function edit ($id ){

        $data['teacher']=Teacher::findOrFail($id);
        //$data['teacher']=Teacher::select('*')->where('id',$id)->first();


        return view('teacherdetails.edit',$data);
    }

    public function update(Request $request ,$id){

        $teacher = Teacher::findOrFail($id);
        $teacher->student_id=$request->input('student_id');
        $teacher->name=$request->input('name');
        $teacher->email=$request->input('email');
        $teacher->phone=$request->input('phone');
        $teacher->address=$request->input('address');
        $teacher->dateofbirth=$request->input('dateofbirth');
        $teacher->faculty=$request->input('faculty');



        if($request->hasFile('teacher_photo')){

            $file = $request->file('teacher_photo');
            $filename = $file->getClientOriginalName();
            $path = 'uploads/teacher-photo/';
            $file->move($path, $filename);
            $teacher->teacher_photo=$filename;
        }
        $teacher->save();
        return redirect()->route('teacher.index')->with('success','Data updated sucessfully');

    }

    public function delete($id){

        $delete=Teacher::select('*')->where('id',$id)->delete();
        return redirect()->route('teacher.index')->with('success','Data deleted successfully');
    }
}
