<?php
namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request){
        Contact::create($request->all());
        return back()->with('success','Message Sent!');
    }
    public function index(){
        $contacts = Contact::latest()->get();
        return view('admin.contacts', compact('contacts'));
    }
    public function destroy($id){
        Contact::findOrFail($id)->delete();
        return back();
    }
}
