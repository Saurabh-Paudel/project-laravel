<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsMessageReceived;
use App\Models\Message;
use App\Models\Services;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class FrontendController extends Controller
{
    public function index()
    {
        $services = Services::all();
        $testimonial = Testimonial::all();
        return view('index', compact('services', 'testimonial'));
    }
    public function contact()
    {
        return view('contact');
    }
    public function about()
    {
        return view('about');
    }
    public function service()
    {
        return view('service');
    }
    public function save_contact(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|string',
            'phone_number' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $message = Message::create($validated);
        Mail::to($request->email)->send(new ContactUsMessageReceived($message));
        Session::flash('success', 'Message saved successfully');
        return redirect()->back();
    }
}
