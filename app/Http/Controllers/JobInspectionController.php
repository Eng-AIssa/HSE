<?php

namespace App\Http\Controllers;

use App\Models\JobInspection;
use App\Http\Requests\StoreJobInspectionRequest;
use App\Http\Requests\UpdateJobInspectionRequest;

class JobInspectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreJobInspectionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJobInspectionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JobInspection  $jobInspection
     * @return \Illuminate\Http\Response
     */
    public function show(JobInspection $jobInspection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JobInspection  $jobInspection
     * @return \Illuminate\Http\Response
     */
    public function edit(JobInspection $jobInspection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJobInspectionRequest  $request
     * @param  \App\Models\JobInspection  $jobInspection
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJobInspectionRequest $request, JobInspection $jobInspection)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JobInspection  $jobInspection
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobInspection $jobInspection)
    {
        //
    }
}
