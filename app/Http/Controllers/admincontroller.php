<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegisterUser;
use App\Models\Product;
use App\Models\Menu;
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
      $menu->category = $req->category;
      $menu->save();
    return view('user.menuupload');
   }
}
