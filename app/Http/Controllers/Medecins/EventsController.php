<?php

namespace App\Http\Controllers\Medecins;

use App\Http\Controllers\Controller;
use App\Mail\avie;
use App\Mail\aviemedecinmoit24;
use App\Mail\patientvalidationMail;
use App\Models\Event;
use App\Models\specialitee;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;


class EventsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //retourner la page de validation de RDV
    public function index()
    {
        if (auth()->user()->asistant==1){
            $ide =Auth::user()->medcecin_id;

        }
        else {
            $ide =Auth::user()->id;
        }
       // $events=Event::all()->where('medecin_id',$var);
        $events=DB::select('select users.name  as name,events.Types_de_consultation as Types_de_consultation,start,end,users.phone as phone,events.CIN as CIN,events.id as id,events.RDV as RDV,events.validee as validee from users,events where users.id=events.patient_id and events.medecin_id = :medecin_id',['medecin_id'=>$ide]);
         return view('medecin.valideRDV',compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //liste Consultation
    public function create()
    {
        if (auth()->user()->asistant==1){
            $ide =Auth::user()->medcecin_id;

        }
        else {
            $ide =Auth::user()->id;
        }
       // $events = DB::select("select * from events where medecin_id = ? && validee like 'true'",[auth()->user()->id]);
        $events=DB::select("select users.name as name,start,end,users.phone as phone,events.CIN as CIN,events.id as id,events.RDV as RDV,events.validee as validee from users,events where users.id=events.patient_id and events.medecin_id = :medecin_id and validee like 'true'",['medecin_id'=>$ide]);
//--------------------mail moin de 24h--------------------------
        foreach ($events as $event)
        {
            $id_med=$ide;
            $mail=User::where('id',$id_med)->get('email');
            //-------------
            $datsaisie = Carbon::parse($event->start);
            $today = Carbon::now();
            $diference=$today->diffInDays($datsaisie,false);
            if ($diference == 0)
            {
                //echo $mail[0]->email;
                $data=Event::where('medecin_id',$ide)->get();
                Mail::to(Auth::user()->email)->send(new avie($data));
                Mail::to($mail[0]->email)->send(new aviemedecinmoit24($data));

            }

        }
//------------------------------------


        return view('medecin.consultation',compact('events'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //creation de RDV depuit le medecin
    public function store(Request $request)
    {
        if (auth()->user()->asistant==1){
            $ide =Auth::user()->medcecin_id;

        }
        else {
            $ide =Auth::user()->id;
        }
          $event = Event::create([
              'title'=> $request->title,
              'start'=> $request->start_date.'T'.$request->start_heur,
              'end'=>$request->start_date.'T'.$request->start_heur,
              'color'=>'#C8B410',
              'date_naissence'=> $request->date_naissence,
              'Adresse'=>$request->region_ville,
              'phone'=>$request->phone,
              'CIN'=>$request->CIN,
              'RDV'=>'true',
              'medecin_id'=>$ide,
              'patient_id'=>$ide,
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
       if ($event ) return redirect(route('medecin.calender.index'))->with('success','rendez-vous bien ajouter')  ;
       else return 'erreur';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //valider RDV
    public function show($id)
    {
        $events = Event::find($id);
       $event = Event::find($id)->update([
            'validee'	=>	'true',
            'color'     => '#27ae60',
        ]);
        $emails=DB::select('SELECT users.email as email from users,events where users.id=events.patient_id and events.id=?',[$id]);
        $email = $emails[0]->email;
        $data=Event::all()->where('id',$id);
        Mail::to($email)->send(new patientvalidationMail($data));
        return redirect(route('medecin.Events.index') )->with('success','rendez-vous bien validée');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //dossier patient
    public function edit($id)
    {
        $specialite=specialitee::all()->where('id',auth()->user()->specialite_id);
        $events=DB::select("select users.name as name,tel_parenter,Adresse_parenter,Lien_parenter,profession,Provenance_Médecin_traitant,Antécédent_médicaux,events.email,Allergie,Types_de_consultation,Mutuelle,Mutuelle_N,Motifs_de_consultation,start,Caisse_Assurance_sociale,Caisse_Assurance_sociale_N,end,users.phone as phone,events.date_naissence as date_naissence,events.Adresse as Adresse,events.CIN as CIN,events.id as id,events.RDV as RDV,events.validee as validee from users,events where users.id=events.patient_id and events.id = :id",[$id]);
       // $event = Event::find($id);
        return view('medecin.Dossier-Patient',compact('events','specialite'));

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

    }
}
