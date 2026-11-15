<?php

namespace App\Http\Controllers;

use App\Models\Monitor;
use Illuminate\Http\Request;

class MonitorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     $monitors = Monitor::latest()->get();
    return view('monitors.index', compact('monitors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('monitors.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $data = $request->validate([
        'name' => 'required|max:100',
        'url' => 'required|url',
        'expected_status' => 'required|integer|between:100,599',
    ]);

    Monitor::create($data);

    return redirect()->route('monitors.index')->with('success', 'Monitor added!');
    }

    /**
     * Display the specified resource.
     */
    public function edit(Monitor $monitor)
{
    return view('monitors.edit', compact('monitor'));
}

public function update(Request $request, Monitor $monitor)
{
    $data = $request->validate([
        'name' => 'required|max:100',
        'url' => 'required|url',
        'expected_status' => 'required|integer|between:100,599',
    ]);

    $monitor->update($data);

    return redirect()->route('monitors.index')->with('success', 'Monitor updated!');
}

public function destroy(Monitor $monitor)
{
    $monitor->delete();
    return redirect()->route('monitors.index')->with('success', 'Monitor deleted!');
}
   
}
