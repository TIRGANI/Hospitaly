<?php

namespace App\Http\Controllers\Patients;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\specialitee;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class gestionrdvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //liste region depan specialiter
    public function index(Request $request)
    {

     //   $da=DB::select("SELECT * FROM `users` WHERE `specialite_id`=?  GROUP BY `users`.`region_ville` ",$request->id)->get()->toArray();
        $data = User::select('region_ville')->where('specialite_id',$request->id)->where('role_id','3')->where('gestion_Assistants','1')->take(100)->distinct()->get()->toArray();

        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   // liste tarif depon region et specialiter
    public function create(Request $request)
    {
        $specialite= specialitee::all();
        $medecin = User::where('role_id','3')->where('gestion_Assistants','1')->where('name',$request->nom)->get();
        return view('Patient.add-Event',compact('specialite','medecin'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //liste speciliéter depant region
    public function store(Request $request)
    {
        $data = User::all()->where('specialite_id',$request->sp_id )->where('region_ville',$request->rg_id)->get()->toArray();
        return response()->json($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //afficher les detaille consultation
    public function show($id)
    {
        $medecin=Event::where('id',$id)->get('medecin_id');
        $specialite=specialitee::all()->where('id',$medecin[0]->medecin_id);
        $events=DB::select("select users.name as name,tel_parenter,Adresse_parenter,Lien_parenter,profession,Provenance_Médecin_traitant,Antécédent_médicaux,events.email,Allergie,Types_de_consultation,Mutuelle,Mutuelle_N,Motifs_de_consultation,start,Caisse_Assurance_sociale,Caisse_Assurance_sociale_N,end,users.phone as phone,events.date_naissence as date_naissence,events.Adresse as Adresse,events.CIN as CIN,events.id as id,events.RDV as RDV,events.validee as validee from users,events where users.id=events.medecin_id and events.id = :id",[$id]);

     return view('patient.afficherdossierpatient',compact('events','specialite'));



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
