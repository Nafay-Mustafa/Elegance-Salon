<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegisterUser;
use App\Models\Product;
use App\Models\Menu;
use App\Models\Employee;
class admincontroller extends Controller
{
    // MENU FUNCTIONS AND LOGICS
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
  public function showmenutable(){
    $menu=new Menu();
    $allmenu=$menu->all();
    return view('user.menutable', compact('allmenu'));
}
public function editmenulogic(Request $req, $id)
{
    $menu = Menu::find($id);

    if (!$menu) {
        return redirect()->back()->with('error', 'Menu not found');
    }

    $menu->heading = $req->heading;
    $menu->description = $req->description;
    $menu->price = $req->price;

    if ($req->hasFile('image')) {

        $file = $req->file('image');

        $fileName = time() . '_' . $file->getClientOriginalName();

        $file->move(public_path('upload'), $fileName);

        $menu->image = $fileName;
    }

    $menu->save();

    return redirect('menutable')->with('success', 'Menu updated successfully');
}
public function editmenu($id)
{
    $menu = Menu::find($id);
    return view('user.editmenuform', compact('menu'));
}

// employee functions 
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
   
}