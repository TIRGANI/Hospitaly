<?php

namespace App\Http\Controllers\Patients;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class modifierrdvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return 'hi';
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
    //modifier le rendez-vous selectionner
    public function store(Request $request)
    {

        /*  echo $request->id;
            echo $request->title.'<br>';
            echo $request->start.'<br>';
            echo $request->date_naissence.'<br>';
            echo $request->Adresse.'<br>';
            echo $request->phone.'<br>';
            echo $request->CIN.'<br>';
            //-------------------------*/
        $end =$request->input('start');
        $event = Event::find($request->id)->update([
            'title'		=>	$request->input('title'),
            'start'		=>	$request->input('start'),
            'end'		    =>	$end,
            'date_naissence'		=>	$request->input('date_naissence'),
            'Adresse'		=>	$request->input('Adresse'),
            'phone'		=>	$request->input('phone'),
            'CIN'		=>	$request->CIN,
            'color' => "#C8B410",
            'RDV' => 'true',
            'email'		=>	$request->email,
            'Caisse_Assurance_sociale'		=>	$request->Caisse_Assurance_sociale,
            'Caisse_Assurance_sociale_N'		=>	$request->Caisse_Assurance_sociale_N,
            'Mutuelle'		=>	$request->Mutuelle,
            'Mutuelle_N'		=>	$request->Mutuelle_N,
            'Motifs_de_consultation'		=>	$request->Motifs_de_consultation,
            'Types_de_consultation'		=>	$request->Types_de_consultation,
            'Allergie'		=>	$request->Allergie,
            'Antécédent_médicaux'		=>	$request->Antécédent_médicaux,
            'Provenance_Médecin_traitant'		=>	$request->Provenance_Médecin_traitant,
            'profession'		=>	$request->profession,
            'Lien_parenter'		=>	$request->Lien_parenter,
            'Adresse_parenter'		=>	$request->Adresse_parenter,
            'tel_parenter'		=>	$request->tel_parenter,
        ]);
        if ($event ) return redirect(route('patient.showcalendar.create')) ;
        else return 'erreur';

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
