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
            'date' => 'required|after_or_equal:today',
            'time' => 'required',
            'service' => 'nullable',
            'status' => 'required',
        ]);

        Appointment::create($request->all());
        return back()->with('success', 'Thank you for booking at Elegance Salon! We will reach you soon. Our team will contact you shortly.');
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
