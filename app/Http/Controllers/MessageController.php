<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $message = Message::all(); // fetch data from database
        return view('admin.message', compact('message'));
    }
    public function delete(Request $request, $id)
    {
        $message = Message::find($id);
        $message->delete();
        return redirect('/admin/message');
    }
}
