<?php

namespace App\Http\Controllers;
// require_once 'vendor/autoload.php';

use Illuminate\Http\Request;
use App\Adherences;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use transit_realtime\FeedMessage;

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
        $data = file_get_contents("http://gtfs.viainfo.net/gtfs-realtime/trapezerealtimefeed.pb");
        $feed = new FeedMessage();
        $feed->parse($data);
        foreach ($feed->getEntityList() as $entity) {
          if ($entity->hasTripUpdate()) {
            error_log("trip: " . $entity->getId());
          }
          dd($entity);
        }
        $data['routes'] = Adherences::where('routes', '2')->paginate(6);
        return view('index')->with($data);
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
