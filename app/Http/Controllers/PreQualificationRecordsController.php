<?php

namespace App\Http\Controllers;

use App\Models\PreQualificationRecords;
use App\Http\Requests\StorePreQualificationRecordsRequest;
use App\Http\Requests\UpdatePreQualificationRecordsRequest;

class PreQualificationRecordsController extends Controller
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
     * @param  \App\Http\Requests\StorePreQualificationRecordsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePreQualificationRecordsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PreQualificationRecords  $preQualificationRecords
     * @return \Illuminate\Http\Response
     */
    public function show(PreQualificationRecords $preQualificationRecords)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PreQualificationRecords  $preQualificationRecords
     * @return \Illuminate\Http\Response
     */
    public function edit(PreQualificationRecords $preQualificationRecords)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePreQualificationRecordsRequest  $request
     * @param  \App\Models\PreQualificationRecords  $preQualificationRecords
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePreQualificationRecordsRequest $request, PreQualificationRecords $preQualificationRecords)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PreQualificationRecords  $preQualificationRecords
     * @return \Illuminate\Http\Response
     */
    public function destroy(PreQualificationRecords $preQualificationRecords)
    {
        //
    }
}
