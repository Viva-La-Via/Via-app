<?php

namespace App\Http\Controllers;
// require_once 'vendor/autoload.php';

use Illuminate\Http\Request;
use App\Adherences;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use transit_realtime\FeedMessage;

use DB;

class AdherencesController extends Controller
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


    public function values(){

        $data = [];

        $data['minRoutes'] = (DB::table('adherences')->selectRaw('ServiceDate, VehicleNumber, Routes, MIN(ScheduledTimeS-ArrivalTimeS)')->groupBy('Routes')->orderBy('VehicleNumber','desc')->get());

        $data['avgRoutes'] = (DB::table('adherences')->selectRaw('ServiceDate, VehicleNumber, Routes, AVG(ScheduledTimeS-ArrivalTimeS)')->groupBy('Routes')->orderBy('VehicleNumber','desc')->get());

        $data['maxRoutes'] = (DB::table('adherences')->selectRaw('ServiceDate, VehicleNumber, Routes, MAX(ScheduledTimeS-ArrivalTimeS)')->groupBy('Routes')->orderBy('VehicleNumber','desc')->get());

        $data['minVehicle'] = (DB::table('adherences')->selectRaw('ServiceDate, VehicleNumber, Routes, MIN(ScheduledTimeS-ArrivalTimeS)')->groupBy('VehicleNumber')->orderBy('Routes','desc')->get());

        $data['avgVehicle'] = (DB::table('adherences')->selectRaw('ServiceDate, VehicleNumber, Routes, AVG(ScheduledTimeS-ArrivalTimeS)')->groupBy('VehicleNumber')->orderBy('Routes','desc')->get());

        $data['maxVehicle'] = (DB::table('adherences')->selectRaw('ServiceDate, VehicleNumber, Routes, MAX(ScheduledTimeS-ArrivalTimeS)')->groupBy('VehicleNumber')->orderBy('Routes','desc')->get());

        return view('test')->with($data);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
