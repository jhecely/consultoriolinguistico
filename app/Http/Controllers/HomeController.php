<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Appointment;
class HomeController extends Controller
{
    public function redirect()
    {
        if (Auth::id())
        {
            if(Auth::user()->usertype=='1')
            {
                $doctor = doctor::all();
                return view('user.home', compact('doctor'));
            }
            else
            {
                return view('admin.home');
            }
        }
        else
        {
            return redirect()->back();
        }
    }
    public function index()
    {
        if(Auth::id())
        {
            return redirect('home');
        }
        else
        {

        $doctor = doctor::all();
        return view('user.home',compact('doctor'));
        }
    }

    public function appointment (Request $request)
    {
        $data= new appointment;
        $data->name=$request->name;
        $data->ci=$request->ci;
        $data->age=$request->age;
        $data->phone=$request->phone;
        $data->level=$request->level;
        $data->ocupation=$request->ocupation;
        $data->address=$request->address;
        $data->date=$request->date;
        $data->departement=$request->departement;
        $data->message=$request->message;
        $data->statuss='En progreso';

        if(Auth::id()){

        $data->user_id=Auth::user()->id;
        }
        $data->save();
        return redirect()->back()->with('message', 'Su consulta ha sido registrado. Nos contactaremos lo antes posible');
    }


    /*public function myappointment()
    {
        if (Auth::id()) {

            return view('user.my_appointment'); 
        }
        else
        {
            return redirect()->back();
        }
        
    }
    */
    
}
