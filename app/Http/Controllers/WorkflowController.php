<?php

namespace App\Http\Controllers;

use App\Models\Workflow;
use App\Http\Requests\StoreWorkflowRequest;
use App\Http\Requests\UpdateWorkflowRequest;

class WorkflowController extends Controller
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
     * @param  \App\Http\Requests\StoreWorkflowRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWorkflowRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Workflow  $workflow
     * @return \Illuminate\Http\Response
     */
    public function show(Workflow $workflow)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Workflow  $workflow
     * @return \Illuminate\Http\Response
     */
    public function edit(Workflow $workflow)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWorkflowRequest  $request
     * @param  \App\Models\Workflow  $workflow
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWorkflowRequest $request, Workflow $workflow)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Workflow  $workflow
     * @return \Illuminate\Http\Response
     */
    public function destroy(Workflow $workflow)
    {
        //
    }
}
