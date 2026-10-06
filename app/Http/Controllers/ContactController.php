<?php
namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request){
    $request->validate([
        'name' => 'required',
        'phone' => 'required',
        'email' => 'required|email',
        'message' => 'required'
    ]);

    Contact::create($request->only('name','phone','email','message'));

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
