<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Staff;
class StaffController extends Controller
{
    public function create(){

        return view('staffdetails.create');
    }

    public function index(){
        $data['index'] =1;
        $data['staffs']=Staff::select('*')->paginate(5);
        return view('staffdetails.index',$data);

    }
    public function store(Request $request){


        $staff = new Staff();
        $staff->name=$request->input('name');
        $staff->address=$request->input('address');
        $staff->phone=$request->input('phone');
        $staff->email=$request->input('email');
        $staff->staff_photo=$request->input('staff_photo');
        $staff->gender=$request->input('gender');
        $staff->salary=$request->input('salary');
        $staff->designation=$request->input('designation');
        $staff->age=$request->input('age');


        $request->validate([
            'name' => 'required|max:255',
            'address' => 'required',
            'phone'=>'required',
            'email'=>'required',
           'staff_photo'=>'required',
            'gender'=>'required',
            'salary'=>'required',
            'designation'=>'required',
            'age'=>'required',




        ]);



        if($request->hasFile('staff_photo')){
            $file = $request->file('staff_photo');
            $filename = $file->getClientOriginalName();
            $path = 'uploads/staff-photo/';
            $file->move($path, $filename);
            $staff->staff_photo=$filename;
        }






        $staff->save();
        return redirect()->route('staff.index')->with('success','Data inserted sucessfully');

    }

    public function edit ($id ){

        $data['staff']=Staff::findOrFail($id);
        //$data['staff']=Staff::select('*')->where('id',$id)->first();


        return view('staffdetails.edit',$data);
    }

    public function update(Request $request ,$id){

        $staff = Staff::findOrFail($id);
        $staff->name=$request->input('name');
        $staff->address=$request->input('address');
        $staff->phone=$request->input('phone');
        $staff->email=$request->input('email');
        $staff->staff_photo=$request->input('staff_photo');
        $staff->gender=$request->input('gender');
        $staff->salary=$request->input('salary');
        $staff->designation=$request->input('designation');
        $staff->age=$request->input('age');




        if($request->hasFile('staff_photo')){

            $file = $request->file('staff_photo');
            $filename = $file->getClientOriginalName();
            $path = 'uploads/staff-photo/';
            $file->move($path, $filename);
            $staff->staff_photo=$filename;
        }
        $staff->save();
        return redirect()->route('staff.index')->with('success','Data updated sucessfully');

    }

    public function delete($id){

        $delete=Staff::select('*')->where('id',$id)->delete();
        return redirect()->route('staff.index')->with('success','Data deleted successfully');
    }
}
