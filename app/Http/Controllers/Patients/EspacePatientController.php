<?php

namespace App\Http\Controllers\Patients;

use App\Http\Controllers\Controller;
use App\Mail\modifierdaterdvMail;
use App\Mail\patientvalidationMail;
use App\Models\Event;
use App\Models\specialitee;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use phpDocumentor\Reflection\Types\Expression;

use Illuminate\Support\Carbon;

class EspacePatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return  view('Patient.acceuil');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //retourner la liste des specialiter
    public function create()
    {
       // $events=User::all()->where('role_id',3);
        $specialite= specialitee::all();
        $medecin = User::where('role_id','3')->where('gestion_Assistants','1')->get();
        return view('Patient.add-Event',compact('specialite','medecin'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //ajouter un render-vous directe dynamique
    public function store(Request $request)
    {
        if($request->ajax())
        {
            if($request->type == 'add')
            {
                $event = Event::create([
                    'title'		=>	Auth::user()->name,
                    'start'		=>	$request->start,
                    'end'		=>	$request->end,
                    'CIN' =>$request->CIN,
                    'phone'=>$request->phone,
                    'date_naissence'=>$request->date_naissence,
                    'profession'=>$request->profession,
                    'Adresse'=>$request->Adresse,
                    'email'=>$request->email,
                    'Caisse_Assurance_sociale'=>$request->Caisse_Assurance_sociale,
                    'Caisse_Assurance_sociale_N'=>$request->Caisse_Assurance_sociale_N,
                    'Mutuelle'=>$request->Mutuelle,
                    'Mutuelle_N'=>$request->Mutuelle_N,
                    'Motifs_de_consultation'=>$request->Motifs_de_consultation,
                    'Types_de_consultation'=>$request->Types_de_consultation,
                    'Allergie'=>$request->Allergie,
                    'Antecedent_medicaux'=>$request->Antecedent_medicaux,
                    'Provenance_Medecin_traitant'=>$request->Provenance_Medecin_traitant,
                    'Lien_parenter'=>$request->Lien_parenter,
                    'Adresse_parenter'=>$request->Adresse_parenter,
                    'patient_id'=> Auth::user()->id,

                    //chanfger le couleur de levents lore de lajoute
                    'color'     => '#C8B410',
                    'medecin_id'=> $request->id_med,

                    'RDV'=> 'true',

                    'tarif'=>$request->tarif_med,

                ]);

                return response()->json($event);
            }


            if($request->type == 'update')
            {
                $event = Event::find($request->id)->update([
                    'title'		=>	Auth::user()->name,
                    'start'		=>	$request->start,
                    'end'		=>	$request->end
                ]);

                return response()->json($event);
            }

            if($request->type == 'delete')
            {
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
    public function show()
    {


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //le buton editer un rendez-vous depuit le patient
    public function edit($id)
    {
       $events = Event::all()->where('id',$id);
       return view('patient.editerRDV',compact('events'));

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
