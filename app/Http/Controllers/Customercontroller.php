<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Session;


class Customercontroller extends Controller
{
   public  function index() {
      $customers = Customer::get();
      return view('customer.create',compact('customers'));
   }

   public  function index2() {
    $customers = Customer::paginate(10);
    return view('customer.customerList',compact('customers'));
 }

   public function save(Request $request){

        $validatedData =$request->validate([
            'name'=>'required',
            'email'=>'required',
            'mobile_number'=>'required',
            'image'=>'required',
            'gender'=>'required',
        ]);

        $customer=new Customer;
        $customer->name=$request->name;
        $customer->email=$request->email;
        $customer->mobile_number=$request->mobile_number;
        $customer->gender=$request->gender[0];

       if($request->hasFile('image')){
        $validatedData=$request->validate([
            'image'=>'image|mimes:jpeg,png,jpg,gif,svg|max:512',
        ]);

        $image=$request->file('image');
        $new_image_name=date('Y-md-d').time().".".$image->extension();

        $destination_path=public_path('/image');
        $image->move($destination_path,$new_image_name);

        $customer->image_url = "/images/".$new_image_name;

       }
        $customer->save();

        return redirect('list');
    }
    public function edit($id){

        $customer=Customer::find($id);

        return view('customer.edit',compact('customer'));
    }

    public function update(Request $request){


        $customer=Customer::find($request->id);
        $customer->name=$request->name;
        $customer->email=$request->email;
        $customer->mobile_number=$request->mobile_number;
        $customer->gender=$request->gender[0];
        $customer->save();
        Session::flash('update','Customer Record Update Successfully');
        return redirect('list');
    }
    public function delete($id){

        $customer=Customer::find($id);
        $customer->delete();
        Session::flash('delete','Customer Record Deleted Successfully');
        return back();
    }

}
