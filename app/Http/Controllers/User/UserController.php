<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $data['index'] = 1;
        $data['users'] = User::select('*')->paginate(5);
        //$product=Product::all();

        return view('userdetails.index', $data);

    }

    /**
     *
     */
    public function name()
    {
        $names = array('Ram', 'sita', 'Hari');
        $ages = array('Ram' => '22', 'Sita' => '21','name'=>'Hari');
        $colleges=array(array('Ram',1,2),array('Shyam',1,4),array('hari',1,5));
        /*foreach ($names as $name) {
            echo($name.' ');
        }*/
/*
        foreach($colleges as $key=>$college)
        {
            foreach($college as $key => $val){
                echo($key.'  =  '.$val.'');
            }
        };*/
        for($row=0;$row<3;$row++){
            for($col=0;$col<3;$col++){
                echo $colleges[$row][$col].'  ';
            }
        }


       /*foreach ($ages as $key=>$age) {
            echo(''.$key.' - '. $age.' ');
        }*/

        $int=10;
        $name="Priyanka";
        $float=10.2;

        PI:3.14;
        HEIGHT:12;

        $studentMarks= array('Science'=>100,'Maths'=>70,'Computer'=>90, 'Nepali'=>80,'OptionalMaths'=>90);

     $total=0;
     foreach($studentMarks as $key=>$val){

       $total= $val + $total;

   }
    $percentage=($total/5);

        if($percentage<50 && $percentage>40 ){
            echo("You have got grade E");
        }
        elseif($percentage<60 && $percentage>50){
            echo("You have got grade D");
        }
        elseif($percentage<70 && $percentage>60){
            echo("You have got grade C");
        }
        elseif($percentage<80 && $percentage>70){
            echo("You have got grade B");
        }
        elseif( $percentage>80){
            echo("You have got grade A");
        }
        else{
            echo("You have failed");
        }


        foreach($studentMarks as $key => $val){
            echo($key.'  =  '.$val.' ');
        }


        foreach($studentMarks as $key => $val){
            echo($key );
        }


        $count = 0;
        foreach ($studentMarks as $key => $val) {
            if ($count == 3)
                echo($key . '  =  ' . $val . '');
            $count++;
        }





        for($i=1;$i<1001;$i++){
            echo $i.'';
        }

        $j = 0;
        do {

            $j = $j + 1;
            echo $j;

} while ($j < 100);


        function add($a,$b){
            $c= ($a+$b);
            echo($c);
        }
      add(10,11);


        function calculate($a,$b, $operation){


            if($operation=='add'){
                $result=$a+$b;
            }
            else
            {
                $result=$a-$b;
            }
            echo("the result is ".$result);
        }

        calculate(20,15,'11');





    }

    public function welcome()
    {
        return view('userdetails.welcome');
    }

    public function login()
    {


        return view('userdetails.login');


    }


    public function checkUser(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        $request->validate([
            'email' => 'email|email',
            'password' => 'required',
        ]);
        if (Auth::attempt(['email' => $email, 'password' => $password])) {

            return redirect()->route('user.dashboard')->with('success', 'Successfully Logged In !!');
        } else {
            return redirect()->back()->with('success', 'Enter correct username and password !!');

        }


    }

    public function dashboard()
    {
        return view('userdetails.dashboard');

    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('user.login')->with('success', 'Successfully Logged Out !!');
    }


    public function create()
    {


        return view('userdetails.create');

    }


    public function store(Request $request)
    {


        $user = new User();
        $user->firstname = $request->input('firstname');
        $user->middlename = $request->input('middlename');
        $user->lastname = $request->input('lastname');
        $user->mobilenumber = $request->input('mobilenumber');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->dateofbirth = $request->input('dateofbirth');
        $user->gender = $request->input('gender');


        $request->validate([
            'firstname' => 'required|max:255',
            'middlename' => 'required',
            'lastname' => 'required',
            'mobilenumber' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'dateofbirth' => 'required',
            'gender' => 'required',
        ]);


        $user->save();
        return redirect()->route('user.login')->with('success', 'Account created sucessfully');


    }

    public function edit($id)
    {
        $data['user'] = User::findOrFail($id);
        // $data['user']=User::select('*')->where('id',$id)->first();
        // dd($data);
        return view('user.edit', $data);
    }

    public function update(Request $request, $id)
    {
        //dd($request->all());
        $user = User::findOrFail($id);
        $user->firstname = $request->input('firstname');
        $user->middlename = $request->input('middlename');
        $user->lastname = $request->input('lastname');
        $user->mobilenumber = $request->input('mobilenumber');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->dateofbirth = $request->input('dateofbirth');
        $user->gender = $request->input('gender');


        $user->save();
        return redirect()->route('user.index')->with('success', 'Data updated sucessfully');


    }

    public function delete($id)
    {
        $delete = User::select('*')->where('id', $id)->delete();
        return redirect()->route('user.index')->with('success', 'Data deleted successfully');
    }


}
