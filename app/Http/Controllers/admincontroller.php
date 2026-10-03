<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegisterUser;
use App\Models\Product;
use App\Models\Menu;
use App\Models\Employee;
class admincontroller extends Controller
{
   
   public function  addMenu(Request $req){
      $menu= new Menu();
      $file=$req->file('image');
      $fileName = time() . '_' . 
      $file->getClientOriginalName();
      $file->move(public_path('upload'), $fileName);
      $menu->heading= $req->heading;
      $menu->description= $req->description;
      $menu->price= $req->price;
      $menu->image = $fileName;
      $menu->save();
    return view('user.menuupload');
   }
   public function addemployee(Request $req){
      $employee= new Employee();
      $employee->name=$req->name;
      $employee->email=$req->email;
      $employee->password=$req->password;
      $employee->number=$req->number;
      $employee->department=$req->department;
      $employee->save();
      if (
    $req->name !="" &&
    $req->email !="" &&
    $req->password !="" &&
    $req->number !="" &&
    $req->department !=""
) 
   return view('user.employeeform');
}
public function showemployee(){
        $employee=new Employee();
        $allemployee=$employee->all();
        return view('User.employeepanel', compact('allemployee'));
    }
    public function deleteemployee( $id){
      $employee= Employee::find($id);
      
      $employee->delete();
      return view('user.employeepanel');
    }
}