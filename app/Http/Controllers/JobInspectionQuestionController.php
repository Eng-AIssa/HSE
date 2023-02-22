<?php

namespace App\Http\Controllers;

use App\Models\JobInspectionQuestion;
use App\Http\Requests\StoreJobInspectionQuestionRequest;
use App\Http\Requests\UpdateJobInspectionQuestionRequest;

class JobInspectionQuestionController extends Controller
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
     * @param  \App\Http\Requests\StoreJobInspectionQuestionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJobInspectionQuestionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JobInspectionQuestion  $jobInspectionQuestion
     * @return \Illuminate\Http\Response
     */
    public function show(JobInspectionQuestion $jobInspectionQuestion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JobInspectionQuestion  $jobInspectionQuestion
     * @return \Illuminate\Http\Response
     */
    public function edit(JobInspectionQuestion $jobInspectionQuestion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJobInspectionQuestionRequest  $request
     * @param  \App\Models\JobInspectionQuestion  $jobInspectionQuestion
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJobInspectionQuestionRequest $request, JobInspectionQuestion $jobInspectionQuestion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JobInspectionQuestion  $jobInspectionQuestion
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobInspectionQuestion $jobInspectionQuestion)
    {
        //
    }
}
