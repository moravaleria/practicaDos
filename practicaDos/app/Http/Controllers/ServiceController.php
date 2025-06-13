<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function index()
    {
        $services=Service::all();
        return view('services.index',compact('services'));
    }

    
    public function create()
    {
        
    }

    public function store(Request $request)
    {
        $service=new Service();
        $service->id=$request->id;
        $service->name=$request->name;
        $service->description=$request->description;
        $service->prince=$request->prince;
        $service->save();
        return redirect()->route('services.index');
    }

    
    public function show(Service $service)
    {
        
    }

    
    public function edit(Service $service)
    {
        $service= Service::find($id);
        return view ('services.edit',compact('service'));
    }

   
    public function update(Request $request, Service $service)
    {
        $service= Service::find($id);
        $service->id=$request->id;
        $service->name=$request->name;
        $service->description=$request->description;
        $service->prince=$request->prince;
        $service->save();
        return redirect()->route('services.index');
    }

    
    public function destroy(Service $service)
    {
        $service= Service::find($id);
        $service->delete();
        return redirect()->route('services.index');
    }
}
