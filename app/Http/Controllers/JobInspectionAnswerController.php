<?php

namespace App\Http\Controllers;

use App\Models\JobInspectionAnswer;
use App\Http\Requests\StoreJobInspectionAnswerRequest;
use App\Http\Requests\UpdateJobInspectionAnswerRequest;

class JobInspectionAnswerController extends Controller
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
     * @param  \App\Http\Requests\StoreJobInspectionAnswerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJobInspectionAnswerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JobInspectionAnswer  $jobInspectionAnswer
     * @return \Illuminate\Http\Response
     */
    public function show(JobInspectionAnswer $jobInspectionAnswer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JobInspectionAnswer  $jobInspectionAnswer
     * @return \Illuminate\Http\Response
     */
    public function edit(JobInspectionAnswer $jobInspectionAnswer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJobInspectionAnswerRequest  $request
     * @param  \App\Models\JobInspectionAnswer  $jobInspectionAnswer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJobInspectionAnswerRequest $request, JobInspectionAnswer $jobInspectionAnswer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JobInspectionAnswer  $jobInspectionAnswer
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobInspectionAnswer $jobInspectionAnswer)
    {
        //
    }
}
