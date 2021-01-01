<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $data['index'] =1;
        $data['products']=Product::select('*')->with('user')->paginate(5);
        //dd($data);
        return view('productdetails.index',$data);

    }
    public function create(){

        $data['allUsers']=User::select('*')->get();

        return view('productdetails.create',$data);

    }

    public function store(Request $request){
       // dd($request->all());

        $product = new Product();
        $product->name=$request->input('name');
        $product->description=$request->input('description');
        $product->color=$request->input('color');
        $product->price=$request->input('price');
        $product->size=$request->input('size');
        $product->type=$request->input('type');
        $product->user_id=$request->input('user_id');

        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'color'=>'required',
            'price'=>'required',
            'size'=>'required',
            'type'=>'required',
            'product_photo'=>'required|image|mimes:jpeg,png,gif',



        ]);
        if($request->hasFile('product_photo')){
            $file = $request->file('product_photo');
            $filename = $file->getClientOriginalName();
            $path = 'uploads/product-photo/';
            $file->move($path, $filename);
            $product->product_photo=$filename;
        }


        $product->save();
        return redirect()->route('product.index')->with('success','Data inserted successfully');;



    }
    public function edit ($id ){

        $data['product']=Product::select('*')->where('id',$id)->first();
       // dd($data);
        return view('productdetails.edit',$data);
    }
    public function update(Request $request ,$id){
       // dd($request->all());
        $product = Product::findOrFail($id);
        $product->name=$request->input('name');
        $product->description=$request->input('description');
        $product->color=$request->input('color');
        $product->price=$request->input('price');
        $product->size=$request->input('size');
        $product->type=$request->input('type');

        if($request->hasFile('product_photo')){

            $file = $request->file('product_photo');
            $filename = $file->getClientOriginalName();
            $path = 'uploads/product-photo/';
            $file->move($path, $filename);
            $product->product_photo=$filename;
        }
        $product->save();
        return redirect()->route('product.index')->with('success','Data edited successfully');





    }
    public function delete($id){
        $delete=Product::select('*')->where('id',$id)->delete();

        return redirect()->route('product.index')->with('success','Data deleted successfully');
    }


}

