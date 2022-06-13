<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointment;
use Barryvdh\DomPDF\Facade\Pdf;

class AdminController extends Controller
{
   public function addview()
   {
        return view('admin.add_doctor');
   }


   public function upload(Request $request)
   {

    $doctor=new doctor;

    $image=$request->file('file');

    $imagename=time().'.'.$image->getClientOriginalExtension();



    $request->file->move('doctorimage',$imagename);

    $doctor->image=$imagename;


    $doctor->name=$request->name;
    $doctor->phone=$request->phone;
    $doctor->email=$request->email;
    $doctor->speciality=$request->speciality;
   
    
    $doctor->save();
    return redirect()->back()->with('message', 'Se agregó exitosamente');


   }

   public function showappointment()
   {
    $data=appointment::all();
    return view('admin.showappointment', compact('data'));
   }


    public function deleteappointment($id)
    {
        $data =appointment::find($id);
        $data->delete();
        return redirect()->back();
    }

   public function downloadPDF($id)
   {
    $data = Appointment::find($id);
    $pdf = PDF::loadView('admin.reporte', compact('data'));
    return $pdf->stream();   
    }

    public function showdoctor()
    {
        $data=doctor::all();
        return view('admin.showdoctor', compact('data'));
    }

      public function deletedoctor($id)
    {
        $data =doctor::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function updatedoctor($id)
    {
        $data=doctor::find($id);
        return view('admin.update_doctor', compact('data'));
    }
    
    public function editdoctor(Request $request, $id)
    {
        $doctor= doctor::find($id);
        $doctor->name=$request->name;
        $doctor->phone=$request->phone;
        $doctor->speciality=$request->speciality;
        $doctor->email=$request->email;
        $image=$request->file;
        if ($image) 
        {
       
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->file->move('doctorimage',$imagename);
        $doctor->image=$imagename;
        }

        $doctor->save();
        return redirect()->back()->with('message', 'La actualización se guardado exitosamente');
    }
    


    
}
