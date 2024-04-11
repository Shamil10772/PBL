<?php

namespace App\Http\Controllers;

use App\Models\Consumer;
use Illuminate\Http\Request;

class ConsumerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consumers = Consumer::all();
        return view('consumers.index', compact('consumers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('consumers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:consumers',
            'phone' => 'nullable|numeric',
        ]);

        Consumer::create($request->all());
        return redirect()->route('consumers.index')->with('success', 'Consumer created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Consumer $consumer)
    {
        return view('consumers.show', compact('consumer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Consumer $consumer)
    {
        return view('consumers.edit', compact('consumer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Consumer $consumer)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:consumers,email,' . $consumer->id,
            'phone' => 'nullable|numeric',
        ]);

        $consumer->update($request->all());
        return redirect()->route('consumers.index')->with('success', 'Consumer updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Consumer $consumer)
    {
        $consumer->delete();
        return redirect()->route('consumers.index')->with('success', 'Consumer deleted successfully.');
    }
}
