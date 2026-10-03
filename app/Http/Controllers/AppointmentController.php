<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Appointment;

class AppointmentController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'date' => 'required',
            'time' => 'required',
            'service' => 'required'
        ]);

        Appointment::create($request->all());
        return back()->with('success', 'Appointment Booked!');
    }

    public function index(){
        $appointments = Appointment::latest()->get();
        return view('admin.appointments', compact('appointments'));
    }
    public function destroy($id){
    $appointment = Appointment::findOrFail($id);
    $appointment->delete();
    return back()->with('success','Appointment Deleted');
}
}
