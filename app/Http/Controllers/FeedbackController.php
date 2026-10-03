<?php
namespace App\Http\Controllers;
use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        Feedback::create($request->only('name','phone','email','message'));

        return back()->with('success', 'Feedback sent!');
    }

    public function index(){
        
        $feedbacks = Feedback::latest()->get();
        return view('admin.feedbacks', compact('feedbacks'));
    }
    public function destroy($id){
    Feedback::findOrFail($id)->delete();
    return back()->with('success','Deleted');
}
}