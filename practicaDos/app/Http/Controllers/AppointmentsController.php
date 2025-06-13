<?php

namespace App\Http\Controllers;

use App\Models\appointments;
use Illuminate\Http\Request;

class AppointmentsController extends Controller
{
    
    public function index()
    {
       $appointments=Appointment::all();
       return view ('appointments.index',compact('appointments'));
    }

    
    public function create()
    {
        
    }

    
    public function store(Request $request)
    {
        $appointment=new Appointment();
        $appointment->id=$request->id;
        $appointment->car_id=$request->car_id;
        $appointment->service_id=$request->service_id;
        $appointment->appointment_at=$request->appointment_at;
        $appointment->status=$request->status;
    }

   
    public function show(appointments $appointments)
    {  
    }

    
    public function edit(appointments $appointments)
    {
        $appointments = Appointment::find($id);
        return view ('appointments.edit',compact('appointment'));
    }

    public function update(Request $request, appointments $appointments)
    {
        $appointment=Appointment::find($id);
        $appointment->id=$request->id;
        $appointment->car_id=$request->car_id;
        $appointment->service_id=$request->service_id;
        $appointment->appointment_at=$request->appointment_at;
        $appointment->status=$request->status;
    }

    public function destroy(appointments $appointments)
    {
        $appointment = appointment::find($id);
        $appointment->delete();
        return redirect()->route('appointments.index');
    }
}
