<?php

namespace App\Http\Controllers;

use App\Models\Appointments;
use App\Http\Requests\StoreAppointmentsRequest;
use App\Http\Requests\UpdateAppointmentsRequest;
use Illuminate\Support\Str;

class AppointmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('appointments.index', [
            'appointments' => Appointments::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('appointments.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param StoreAppointmentsRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreAppointmentsRequest $request)
    {
        $validated = $request->validated();

        // Create the slug from the name
        $validated['slug'] = Str::slug($validated['name']);

        // Store the 'time' field
        $validated['time'] = $request->input('time');

        // Create the appointment
        Appointments::create($validated);

        return redirect()->route('appointments.index')->with('flash.banner', 'Appointment created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Appointments $appointment)
    {
        return view('appointments.show', compact('appointment'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Appointments $appointment)
    {
        return view('appointments.edit', [
            'appointment' => $appointment,
        ]);
    }

    /**
     * Update the specified resource in storage.
     * @param UpdateAppointmentsRequest $request
     * @param Appointments $appointment
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateAppointmentsRequest $request, Appointments $appointment)
    {
        $validated = $request->validated();

        // Create the slug
        $validated['slug'] = Str::slug($validated['name']);

        // Handle the time field (no need for start_time or end_time)
        $validated['time'] = $request->input('time'); // Assuming time is submitted from the form

        // Update the appointment
        $appointment->update($validated);

        return redirect()->route('appointments.index')->with('flash.banner', 'Appointment updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     * @param Appointments $appointment
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Appointments $appointment)
    {
        $modelName = $appointment->name;

        // Delete the appointment
        $appointment->delete();

        session()->flash('flash.bannerStyle', 'danger');

        return redirect()->route('appointments.index')
            ->with('flash.banner', 'Appointment ' . $modelName . ' deleted successfully.');
    }

    /**
     * Fetch events for the calendar.
     */
    public function getEvents()
    {
        $appointments = Appointments::all();
        $events = [];

        foreach ($appointments as $appointment) {
            $events[] = [
                'title' => $appointment->name,
                'start' => $appointment->timeformat('Y-m-d\TH:i:s'),
                'description' => $appointment->description,
                'status' => $appointment->status,
                'email' => $appointment->email,
            ];
        }

        return response()->json($events);
    }
}
