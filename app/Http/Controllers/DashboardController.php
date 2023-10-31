<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Services;

class DashboardController extends Controller
{
    public function index()
    {
        $messagecount = Message::count();
        $servicecount = Services::count(); // count number entries in table
        return view('admin.dashboard', compact('messagecount', 'servicecount'));
    }
}
