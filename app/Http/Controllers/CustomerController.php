<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\customer;


class CustomerController extends Controller
{

    public function index()
    {
      $customer = customer::all();
      return view('customers.index',compact('customer'));
    }




    public function create()
    {
        return view('customers.create');
    }

    public function store(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'image'=>'required',
            'email'=>'required|unique:customers',
            'password'=>'required|min:6',
            'confpassword'=>'required|same:password',
            'phone'=>'required'
        ]);
             $customer = new Customer();
             $data = $request->only($customer->getFillable());
             $data['password'] = bcrypt($request->password);
             Customer::query()->create($data);
             return redirect(route('index'));

    }

    public function edit($id){
      $customer = customer::find($id);
      if(!$customer){
        abort(404);  //page not found
      }
      return view('customers.edit',['customer' => $customer]);

    }

    public function update(Request $request, $id){
        $customer = customer::find($id);
        $data = $request->only($customer->getFillable());
        $data['password'] = bcrypt($request->password);
        $data['confpassword'] = bcrypt($request->confpassword);
        $customer->update($data);
      return redirect(route('index'));

    }

    public function delete($id){
      $customer = customer::findOrFail($id);
      $customer->delete();
      return redirect(route('index'));

    }

}
