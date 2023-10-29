<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $service = Services::all(); // Fetch data from the database
        return view('admin.service.index', compact('service'));
    }

    public function edit($id)
    {

        $service = Services::find($id);
        return view('admin.service.edit', compact('service'));
    }

    public function update(Request $request, $id)
    {
        $service = Services::find($id);
        $service->update([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
        ]);
        return redirect('/admin/service');
    }
}
