<?php

namespace App\Http\Controllers;

use App\Models\EquipmentInspection;
use App\Http\Requests\StoreEquipmentInspectionRequest;
use App\Http\Requests\UpdateEquipmentInspectionRequest;

class EquipmentInspectionController extends Controller
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
     * @param  \App\Http\Requests\StoreEquipmentInspectionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEquipmentInspectionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EquipmentInspection  $equipmentInspection
     * @return \Illuminate\Http\Response
     */
    public function show(EquipmentInspection $equipmentInspection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EquipmentInspection  $equipmentInspection
     * @return \Illuminate\Http\Response
     */
    public function edit(EquipmentInspection $equipmentInspection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEquipmentInspectionRequest  $request
     * @param  \App\Models\EquipmentInspection  $equipmentInspection
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEquipmentInspectionRequest $request, EquipmentInspection $equipmentInspection)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EquipmentInspection  $equipmentInspection
     * @return \Illuminate\Http\Response
     */
    public function destroy(EquipmentInspection $equipmentInspection)
    {
        //
    }
}
