<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\customer;
class CustomerController extends Controller
{
    public function index(){
      //return customer::all();
      return view('customers.index',['customer'=>customer::all(),
    ]);
    }

    public function create(){
        return view('customers.create');
    }

    public function store(Request $request){
      $customer = new Customer();
      $customer->name = $request->post('name');
      $customer->email = $request->post('email');
      $customer->password = $request->post('password');

     //save record to database
     $customer->save();
      return redirect(route('index')); //return into index
    }

    public function edit($id){
      $customer = customer::find($id);
      if(!$customer){
        abort(404);  //page not found
      }
      return view('customers.edit',['customer' => $customer]);

    }

    public function update(Request $request, $id){
      $customer = customer::findOrFail($id);
      $customer->name = $request->post('name');
      $customer->email = $request->post('email');
      $customer->password = $request->post('password');
      $customer->save();
      return redirect(route('index'));

    }

    public function delete($id){
      $customer = customer::findOrFail($id);
      $customer->delete();
      return redirect(route('index'));

    }
}
