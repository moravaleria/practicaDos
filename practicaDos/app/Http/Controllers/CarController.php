<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
   
    public function index()
    {
        $cars=Car::all();
        return view('cars.index',compact('cars'));
    }

    
    public function create()
    {

    }

    public function store(Request $request)
    {
        $car=new Car();
        $car->id=$request->id;
        $car->license_plate=$request->license_plate;
        $car->brand=$request->brand;
        $car->model=$request->model;
        $car->save();
        return redirect()->route('cars.index');
    }

   
    public function show(Car $car)
    {
        
    }

    
    public function edit(Car $car)
    {
        $car=Cars::find($id);
        return view ('cars.edit',compact('car'));
    }

    
    public function update(Request $request, Car $cars)
    {
        $car= Car::find($id);
        $car->id=$request->id;
        $car->license_plate=$request->license_plate;
        $car->brand=$request->brand;
        $car->model=$request->model;
        $car->save();
        return redirect()->route('cars.index'); 
    }

    
    public function destroy(Car $car)
    {
        $car=Car::find($id);
        $car->delete();
        return redirect()->route('cars.index');
    }
}
