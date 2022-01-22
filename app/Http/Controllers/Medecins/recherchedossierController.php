<?php

namespace App\Http\Controllers\Medecins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class recherchedossierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $CIN = $request->val;
        if (auth()->user()->asistant==1){
            $var =auth()->user()->medcecin_id;
        }
        else {$var =auth()->user()->id;}

        if($request->ajax())
        {
            if ($request->type=='Nom')
            {

                $events =DB::select("select events.id as id, users.name as name, events.start as start,events.phone as phone,events.CIN as CIN from events,users where events.patient_id=users.id and name like ? and medecin_id = ? and events.validee like 'true'",[$CIN,$var]);
               // $events=$request->type.' '.$CIN.' '.$var;
                return response()->json($events);
            }
            if ($request->type=='CIN')
            {
                $events =DB::select("select events.id as id, users.name as name, events.start as start,events.phone as phone,events.CIN as CIN from events,users where events.patient_id=users.id and events.CIN like ? and medecin_id = ? and events.validee like 'true'",[$CIN,$var]);
                return response()->json($events);
            }
            if ($request->type=='start')
            {
                $events =DB::select("select events.id as id, users.name as name, events.start as start,events.phone as phone,events.CIN as CIN from events,users where events.patient_id=users.id and start like ? and medecin_id = ? and events.validee like 'true'",[$CIN,$var]);
                return response()->json($events);
            }
            if ($request->type=='phone')
            {
                $events =DB::select("select events.id as id, users.name as name, events.start as start,events.phone as phone,events.CIN as CIN from events,users where events.patient_id=users.id and events.phone like ? and medecin_id = ? and events.validee like 'true'",[$CIN,$var]);
                return response()->json($events);
            }
        }
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
