<?php

namespace App\Http\Controllers;

use App\Http\Resources\DailyRecordResource;
use App\Model\DailyRecord;
use Illuminate\Http\Request;

class DailyRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return DailyRecordResource::collection(DailyRecord::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DailyRecord::create($request->all());
        return response('Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\DailyRecord  $dailyRecord
     * @return \Illuminate\Http\Response
     */
    public function show(DailyRecord $dailyRecord)
    {
        return $dailyRecord;
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\DailyRecord  $dailyRecord
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DailyRecord $dailyRecord)
    {
        $dailyRecord->update($request->all());
        return response('Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\DailyRecord  $dailyRecord
     * @return \Illuminate\Http\Response
     */
    public function destroy(DailyRecord $dailyRecord)
    {
        $dailyRecord->delete();
        return response(['msg' => 'Deleted'], 200);
    }
}
