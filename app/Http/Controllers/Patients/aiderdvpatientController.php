<?php

namespace App\Http\Controllers\Patients;

use App\Http\Controllers\Controller;
use App\Mail\annulationrdvmedecinMail;
use App\Mail\annulationrdvpatientMail;
use App\Mail\avie;
use App\Mail\aviemedecinmoit24;
use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use SebastianBergmann\CodeCoverage\Driver\Selector;

class aiderdvpatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //afficher calendrier du medecin pour prendre rdv
    public function index(int $id)
    {
        $data = Event::where('medecin_id',$id)
        ->get(['id', 'title', 'start', 'end','color','medecin_id']);
        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //afficher mais rendez-vous
    public function create()
    {
       // $events=Event::where('patient_id',Auth::user()->id)->orderBy('start','desc')->get();
        $events=DB::select('select events.id as id,events.RDV as RDV,users.name as title,events.start as start,users.region_ville as Adresse, events.validee as validee from users , events where users.id=events.medecin_id and events.patient_id=? order by start desc',[Auth::user()->id]);
       // $eventss=DB::select('select * from events where patient_id=?',Auth::user()->id);
        //envoier email a patien et medecin ci le rdv a moin de 24h

     /*  foreach ($events as $event)
       {
           $id_med=$event->medecin_id;
           $mail=User::where('id',$id_med)->get('email');
           //-------------
           $datsaisie = Carbon::parse($event->start);
           $today = Carbon::now();
           $diference=$today->diffInDays($datsaisie,false);
           if ($diference == 0)
           {
               //echo $mail[0]->email;
               $data=Event::where('patient_id',Auth::user()->id)->get();
               Mail::to(Auth::user()->email)->send(new avie($data));
               Mail::to($mail[0]->email)->send(new aviemedecinmoit24($data));

           }

       }*/

        //return $events;
        return view('Patient.afficherrdv',compact('events'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //ajouter un rdv annulée !!!
    public function store(Request $request)
    {
        /*
        $events=Event::create([
            'title'=> $request->title,
            'start'=> $request->start_date.'T'.$request->start_heur,
            'end'=>$request->start_date.'T'.$request->start_heur,
            'color'=>'#C8B410',
            'date_naissence'=> $request->date_naissence,
            'Adresse'=>$request->region_ville,
            'phone'=>$request->phone,
            'CIN'=>$request->CIN,
            'RDV'=>'true',
            'medecin_id'=>$request->id,
            'patient_id'=>Auth::user()->id,
            'email'=>$request->email,
            'Caisse_Assurance_sociale'=>$request->Caisse_Assurance_sociale,
            'Caisse_Assurance_sociale_N'=>$request->Caisse_Assurance_sociale_N,
            'Mutuelle'=>$request->Mutuelle,
            'Mutuelle_N'=>$request->Mutuelle_N,
            'Motifs_de_consultation'=>$request->Motifs_de_consultation,
            'Types_de_consultation'=>$request->Types_de_consultation,
            'Allergie'=>$request->Allergie,
            'Antécédent_médicaux'=>$request->Antécédent_médicaux,
            'Provenance_Médecin_traitant'=>$request->Provenance_Médecin_traitant,
            'Lien_parenter'=>$request->Lien_parenter,
            'Adresse_parenter'=>$request->Adresse_parenter,
            'tel_parenter'=>$request->tel_parenter,
            'profession'=>$request->profession,
        ]);

            return redirect(route('patient.showcalendar.create'));
        */

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //retourner les jour non dispo dans le calendrier
    public function show($id)
    {
        $data = Event::where('medecin_id',$id)
            //->where('rendering','background')
            ->where('validee','true')
            ->get(['id', 'start', 'end','color','rendering','medecin_id']);

        return response()->json($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //buton supprimer un rendez vous depius patient
    public function edit($id)
    {

        $medecin_id=Event::where('id',$id)->get('medecin_id');
        $email_medecin=User::where('id',$medecin_id[0]->medecin_id)->get('email');
        $data=Event::where('patient_id',Auth::user()->id)->get();
        $email=$email_medecin[0]->email;

                Mail::to($email)->send(new annulationrdvpatientMail($data));
                 $event= Event::find($id)->delete();
                return redirect(route('patient.showcalendar.create'));



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
