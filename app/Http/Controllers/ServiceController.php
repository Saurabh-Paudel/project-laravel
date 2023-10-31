<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
    public function create()
    {
        return view('admin.service.add-service');
    }
    public function store(Request $request)
    {
        $image = Storage::disk('local')->put('public/services', $request->image);
        $imageurl = Storage::url($image);
        // return $imageurl;
        Services::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'image' => 'http://localhost:8000' . $imageurl,
        ]);
        return redirect('/admin/service');
    }

    public function delete(Request $request, $id)
    {
        $service = Services::find($id);
        $service->delete();
        return redirect('/admin/service');
    }
}
