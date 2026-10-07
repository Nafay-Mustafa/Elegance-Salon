<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Employee;
use App\Models\Appointment;
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
public function deletemenulogic($id){
    $menu= Menu::find($id);
    $menu->delete();
    return redirect('menutable');
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
    public function editemployeelogic(Request $req, $id){
     $employee = Employee::find($id);
        return view('user.editemployee', compact('employee'));  
    }   
    public function updateemployee(Request $req, $id){
        $employee=Employee::find($id);
        $employee->name = $req->name;
         $employee->email = $req->email;
          $employee->password = $req->password;
           $employee->number = $req->number;
           $employee->save();
            if (
    $req->name !="" &&
    $req->email !="" &&
    $req->password !="" &&
    $req->number !="" &&
    $req->department !=""
) 
          return redirect('/staffportal/' . $employee->id);
    }
    public function staffportal($id)
{
    $employee     = Employee::findOrFail($id);
    $appointments = Appointment::latest()->get();

    return view('user.staffhome', compact('employee', 'appointments'));
}
   public function employeelogin(Request $req )
{
    $employee = Employee::where('email', $req->email)
                        ->where('password', $req->password)
                        ->first();
    if ($employee) {
        return redirect('/staffportal/' . $employee->id);
    }
    return back()->with('error', 'Invalid email or password');
}

}