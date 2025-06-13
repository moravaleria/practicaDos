<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Service;

class AppointmentController extends Controller
{
    
    public function index()
    {

       $appointments=Appointment::with(['car','service'])->get();
       $cars=Car::all();
       $services=Service::all();
       return view ('appointments.index',compact('appointments','cars','services'));
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
        $appointment->save();
        return redirect()->route('cars.index');
    }

   
    public function show(Appointment $appointment)
    {  
    }

    
    public function edit(Appointment $appointment)
    {
        $appointments = Appointment::find($id);
        return view ('appointments.edit',compact('appointment'));
    }

    public function update(Request $request, Appointment $appointment)
    {
        $appointment=Appointment::find($id);
        $appointment->id=$request->id;
        $appointment->car_id=$request->car_id;
        $appointment->service_id=$request->service_id;
        $appointment->appointment_at=$request->appointment_at;
        $appointment->save();
        return redirect()->route('cars.index');
    }

    public function destroy(Appointment $appointment)
    {
        $appointment = Appointment::find($id);
        $appointment->delete();
        return redirect()->route('appointments.index');
    }
}
