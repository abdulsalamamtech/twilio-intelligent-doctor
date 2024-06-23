<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmergencyMessageRequest;
use App\Http\Requests\UpdateEmergencyMessageRequest;
use App\Models\EmergencyMessage;

class EmergencyMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmergencyMessageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(EmergencyMessage $emergencyMessage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EmergencyMessage $emergencyMessage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmergencyMessageRequest $request, EmergencyMessage $emergencyMessage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EmergencyMessage $emergencyMessage)
    {
        //
    }
}
