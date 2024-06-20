<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Auth , Hash , DB;
use App\Models\Doctor ;
use App\Models\Specialization ;
use App\Models\Clinic ;
use App\Models\Patient ;
use App\Models\Government ;
use App\Models\Requests ;
use App\Mail\ConfirmAppointment ;


class HomeController extends Controller
{
    public function index()
    {
        $specialization = Specialization::paginate(6) ;
        $doctors = Doctor::where('status' ,  1)->paginate(10) ;
        return view('website.home.index' , compact('specialization', 'doctors')) ;
    }
    // register patient or user
    public function register(Request $request)
    {
        $image = 'default/png' ;
        if ($request->image){
            $path_image = $request->file('image')->getClientOriginalName();
            $image = $request->file('image')->StoreAs('patient' /*name folder*/,$path_image/*name of image */,'patients' /*name disk in filesystem*/);
        }
        Patient::create([
            'name' => $request->name ,
            'email' => $request->email ,
            'password' => Hash::make($request->password) ,
            'gender' => $request->gender ,
            'phone' => $request->phone ,
            'age' => $request->age ,
            'image' => $image ,
            'gov_id' => $request->gov_id ,
        ]);

        return redirect()->back('success' , 'تم تسجيل بنجاح');
    }
    public function doctors()
    {
        $doctors = Doctor::all();
        return view('website.doctors.index' , compact('doctors')) ;
    }

    // profile of doctor on website
    public function profile($id)
    {
        $doctor = Doctor::where('id' , $id )->first() ;
        $appointments = Doctor::join('appointments' , 'appointments.doctor_id' , '=' , 'doctors.id')->where('doctors.id' , $id)->get() ;
        return view('website.profile-doctor.profile-doctor' , compact('doctor' , 'appointments')) ;
    }

    // public function rateing($id,$rate)
    // {
    //     Doctor::where('id' , $id)->update(['rate' => $rate]);
    //     return redirect()->back()->with('success' , 'successfully rateing') ;
    // }
    public function appointment(Request $request)
    {
        $appointment = Requests::create([
            'date' => '2024-06-27' ,
            'day' => $request->day ,
            'doctor_id' => $request->doctor_id ,
            'oclock' => $request->oclock ,
            'patient_id' => Auth::user()->id ,
        ]);
        Mail::to('abdelrahimmahmoud6@gmail.com')->send(new ConfirmAppointment($appointment)) ;
        return redirect()->back()->with('success' , 'Confirm your booking') ;
    }


    public function userProfile()
    {
        $user_id = auth()->user()->id ;
        $user = Patient::where('id' , $user_id)->first();
        $appointments_user = Requests::where('patient_id' , $user_id)->get() ;
        return view('website.profile-user.index' , compact('user' , 'appointments_user'));
    }

    public function updateProfile(Request $request , $id)
    {

        $user = Patient::find($id) ;
        $image = $user->image ;
        if ($request->image){
            $path_image = $request->file('image')->getClientOriginalName();
            $image = $request->file('image')->StoreAs('patient' /*name folder*/,$path_image/*name of image */,'patients' /*name disk in filesystem*/);
        }
        $user->update([
            'name' => $request->name ,
            'email' => $request->email ,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'image' => $image
        ]);
        return redirect()->back()->with(['success' => __(key:'site.updated_successfully')]);
    }


    public function department()
    {
        $specialization = Specialization::all();
        return view('website.department.index' , compact('specialization')) ;
    }
}
