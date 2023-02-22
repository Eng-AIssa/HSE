<?php

namespace App\Http\Controllers;

use App\Models\DrillEvaluation;
use App\Http\Requests\StoreDrillEvaluationRequest;
use App\Http\Requests\UpdateDrillEvaluationRequest;

class DrillEvaluationController extends Controller
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
     * @param  \App\Http\Requests\StoreDrillEvaluationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDrillEvaluationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DrillEvaluation  $drillEvaluation
     * @return \Illuminate\Http\Response
     */
    public function show(DrillEvaluation $drillEvaluation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DrillEvaluation  $drillEvaluation
     * @return \Illuminate\Http\Response
     */
    public function edit(DrillEvaluation $drillEvaluation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDrillEvaluationRequest  $request
     * @param  \App\Models\DrillEvaluation  $drillEvaluation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDrillEvaluationRequest $request, DrillEvaluation $drillEvaluation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DrillEvaluation  $drillEvaluation
     * @return \Illuminate\Http\Response
     */
    public function destroy(DrillEvaluation $drillEvaluation)
    {
        //
    }
}
