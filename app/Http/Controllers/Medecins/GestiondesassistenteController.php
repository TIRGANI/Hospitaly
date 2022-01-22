<?php

namespace App\Http\Controllers\Medecins;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Jetstream\Jetstream;
use Symfony\Component\Console\Input\Input;

class GestiondesassistenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //retourner la liste des assitant par medecin
    public function index()
    {
        if (auth()->user()->asistant==1){
            $ide =Auth::user()->medcecin_id;

        }
        else {
            $ide =Auth::user()->id;
        }
        $liste=User::where('asistant',1)->where('medcecin_id',$ide)->get();
        return view('medecin.gestionAssistant.addAssistant',compact('liste'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //retourner la formuler pour ajouter un nouveau assitant
    public function create()
    {
        return view('medecin.gestionAssistant.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //ajouter un nouveau assistant
    public function store(Request $request)
    {
        $langue = "";
        $Getsion_RDV = "0";
        $Gestion_Calendrier = "0";
        $personnaliser_ajonda = "0";
        foreach ($request->langue as $lang) {
            $langue .= $lang.' ';
        }
        if ($request->Getsion_RDV){$Getsion_RDV='1';}

        if ($request->Gestion_Calendrier){$Gestion_Calendrier='1';}

        if ($request->personnaliser_ajonda){$personnaliser_ajonda='1';}
        if (auth()->user()->asistant==1){
            $ide =Auth::user()->medcecin_id;

        }
        else {
            $ide =Auth::user()->id;
        }
        $events= User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => '3',
            'specialite_id' => $request->specialite_id,
            'Adresse' => $request->Adresse,
            'langue' =>$langue,
            'Getsion_RDV' =>$Getsion_RDV,
            'Gestion_Calendrier' =>$Gestion_Calendrier,
            'personnaliser_ajonda' =>$personnaliser_ajonda,
            'phone' => $request->phone,
            'date_naissence' => $request->date_naissence,
            'Licence' => $request->Licence,
            'Licence_N' => $request->Licence_N,
            'CIN' => $request->CIN,
            'medcecin_id'=>$ide,
            'asistant'=>1
        ]);

    return redirect(route('medecin.addassistant.index')) ;

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
