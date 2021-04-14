<?php

namespace App\Http\Controllers;

use App\Http\Resources\MedResource;
use App\Model\Medication;
use Illuminate\Http\Request;

class MedicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return MedResource::collection(Medication::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Medication  $medication
     * @return \Illuminate\Http\Response
     */
    public function show(Medication $medication)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Medication  $medication
     * @return \Illuminate\Http\Response
     */
    public function edit(Medication $medication)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Medication  $medication
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medication $medication)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Medication  $medication
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medication $medication)
    {
        //
    }
}
