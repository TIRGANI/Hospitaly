<?php

namespace App\Http\Controllers\Medecins;

use App\Http\Controllers\Controller;
use App\Mail\annulationrdvmedecinMail;
use App\Mail\annulationrdvpatientMail;
use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class EspaceMedecinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return  view('medecin.acceuil');
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
    //rechercher par CIN
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //Annulée un rendeé-vous
    public function edit($id)
    {
        if (auth()->user()->asistant==1){
            $ide =Auth::user()->medcecin_id;

        }
        else {
            $ide =Auth::user()->id;
        }

        $patient_id=Event::where('id',$id)->get('patient_id');

        $email_patient=User::where('id',$patient_id[0]->patient_id)->get('email');

        $data=Event::where('medecin_id',$ide)->get();
        $email=$email_patient[0]->email;

        Mail::to($email)->send(new annulationrdvmedecinMail($data));
        $event = Event::find($id)->delete();
        return redirect(route('medecin.Events.index'))->with('success','rendez-vous bien Annulée');
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
