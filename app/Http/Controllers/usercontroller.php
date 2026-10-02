<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Menu;

class usercontroller extends Controller
{
    
public function showmenu(){
    $menu=new Menu();
    $allmenu=$menu->all();
    return view('user.menu', compact('allmenu'));
}
}
