<?php

namespace App\Http\Controllers\Medecins;

use App\Http\Controllers\Controller;
use App\Mail\anullerrdvmedecinMail;
use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\modifierdaterdvMail;
use Illuminate\Support\Facades\DB;
use App\Mail\annulationrdvmedecinMail;
class FullCalenderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //retourner calendrier
    public function index(Request $request)
    {
        if (auth()->user()->asistant==1){
            $ide =Auth::user()->medcecin_id;

        }
        else {
            $ide =Auth::user()->id;
        }
        if($request->ajax())
        {
            $data = Event::whereDate('start', '>=', $request->start)
                ->whereDate('end',   '<=', $request->end)
                ->where('medecin_id',$ide)
                ->get(['id', 'title', 'start', 'end','color','medecin_id','rendering']);

            return response()->json($data);
        }
        return view('medecin.full-calender');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('medecin.add-event');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // gestion des evenement Personnel des Medecin
    public function store(Request $request)
    {
        if (auth()->user()->asistant==1){
            $ide =Auth::user()->medcecin_id;

        }
        else {
            $ide =Auth::user()->id;
        }
        if($request->ajax())
        {
            if($request->type == 'add')
            {
                $event = Event::create([
                    'title'		=>	$request->title,
                    'start'		=>	$request->start,
                    'end'		=>	$request->end,
                    //chanfger le couleur de levents lore de lajoute
                    'color'     => $request->color,
                    'medecin_id'=> $ide,

                ]);

                return response()->json($event);
            }

            if($request->type == 'update')
            {

                $event = Event::find($request->id)->update([
                    'title'		=>	$request->title,
                    'start'		=>	$request->start,
                    'end'		=>	$request->end
                ]);
                $emails=DB::select('SELECT email from users,events where users.id=events.patient_id and events.id=?',[$request->id]);
                $email = $emails[0]->email;
                $data=Event::all()->where('id',$request->id);
                Mail::to($email)->send(new modifierdaterdvMail($data));
                return response()->json($event);
            }

            if($request->type == 'delete')
            {
             /*   $emails=DB::select('SELECT email from users,events where users.id=events.patient_id and events.id=?',[$request->id]);
                $email = $emails[0]->email;
                $data=Event::all()->where('id',$request->id);

                Mail::to($email)->send(new annulationrdvmedecinMail($data));*/
                $event = Event::find($request->id)->delete();
                return response()->json($event);
            }
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //refuser un RDV
    public function show($id)
    {
        $event = Event::find($id)->delete();

        return redirect(route('medecin.Events.index'))->with('success','rendez-vous bien Annulée');
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
