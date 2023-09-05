<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;


class AppointmentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required|numeric', 
            'appointment_date' => 'required|date',
            'appointment_time' => 'required',
            'service' => 'required',
        ]);

        $appointment = new Appointment([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone_number' => $request->get('phone_number'),
            'appointment_date' => $request->get('appointment_date'),
            'appointment_time' => $request->get('appointment_time'),
            'service' => $request->get('service'),
        ]);

        $appointment->save();
        return redirect('/book')->with('success', 'Appointment booked!');
    }

    public function index()
    {
        $appointments = Appointment::where('status', 'Pending')->get();
        return view('admin', compact('appointments'));
    }

    public function confirm($id)
    {
        $appointment = Appointment::find($id);
        $appointment->status = 'Confirmed';
        $appointment->save();
        // Here you can add logic to send an email or SMS confirmation
        return redirect('/admin')->with('success', 'Appointment confirmed!');
    }

    public function create()
    {
        return view('book');
    }



}
