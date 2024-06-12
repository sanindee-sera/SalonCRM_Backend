<?php

namespace App\Http\Controllers;

use App\Models\Appointments;
use App\Http\Requests\StoreAppointmentsRequest;
use App\Http\Requests\UpdateAppointmentsRequest;

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
     * @param $appointment
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreAppointmentsRequest $request, $appointment)
    {
        $validated = $request->validated();

        //create the slug
        $validated['slug'] = \Illuminate\Support\Str::slug($validated['name']);

        $appointment->create($validated);

        return redirect()->route('appointments.index')->with('flash.banner', 'Appointment created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Appointments $appointment)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Appointments $appointment)
    {
        $appointment->date = \Illuminate\Support\Carbon::createFromFormat('Y-m-d', $appointment->date);

        return view('appointments.edit', [
            'appointment' => $appointment,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAppointmentsRequest $request, Appointments $appointment)
    {


        $validated = $request->validated();

        //create the slug
        $validated['slug'] = \Illuminate\Support\Str::slug($validated['name']);

        $appointment->update($validated);


        return redirect()->route('appointments.index')->with('flash.banner', 'Appointment updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Appointments $appointment)
    {
        $model = $appointment;

        $appointment->delete();

        //set the banner status to danger
        session()->flash('flash.bannerStyle', 'danger');

        return redirect()->route('appointments.index')
            ->with('flash.banner', 'Appointment ' . $model->name . 'deleted successfully.');
    }
}
