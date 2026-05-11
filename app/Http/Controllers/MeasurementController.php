<?php

namespace App\Http\Controllers;

use App\Models\Measurement;
use Illuminate\Http\Request;

class MeasurementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $measurements = Measurement::latest()->paginate(12);

        return view("measurements.index", compact("measurements"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("measurements.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "weight" => "nullable|numeric",
            "systolic" => "nullable|integer",
            "diastolic" => "nullable|integer",
            "heart_rate" => "nullable|integer",
            "temperature" => "nullable|numeric",
            "spo2" => "nullable|integer|min:0|max:100",
            "notes" => "nullable|string",
            "measured_at" => "nullable|date",
        ]);

        Measurement::create($data);

        return redirect()
            ->route("measurements.index")
            ->with("success", "Medição criada.");
    }

    /**
     * Display the specified resource.
     */
    public function show(Measurement $measurement)
    {
        return view("measurements.show", compact("measurement"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Measurement $measurement)
    {
        return view("measurements.edit", compact("measurement"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Measurement $measurement)
    {
        $data = $request->validate([
            "weight" => "nullable|numeric",
            "systolic" => "nullable|integer",
            "diastolic" => "nullable|integer",
            "heart_rate" => "nullable|integer",
            "temperature" => "nullable|numeric",
            "spo2" => "nullable|integer|min:0|max:100",
            "notes" => "nullable|string",
            "measured_at" => "nullable|date",
        ]);

        $measurement->update($data);

        return redirect()
            ->route("measurements.index")
            ->with("success", "Medição atualizada.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Measurement $measurement)
    {
        $measurement->delete();

        return redirect()
            ->route("measurements.index")
            ->with("success", "Medição removida.");
    }
}
