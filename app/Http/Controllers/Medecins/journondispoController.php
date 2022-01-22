<?php

namespace App\Http\Controllers\Medecins;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Patients\retournjndController;
use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class journondispoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->user()->asistant==1){
            $ide =Auth::user()->medcecin_id;

        }
        else {
            $ide =Auth::user()->id;
        }
        $events= Event::where('medecin_id',$ide)->where('rendering','background')->orderByRaw('start DESC')->get();
        $horaire=User::where('id',$ide)->get();
        return view('medecin.jourNondispo',compact('events','horaire'));
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
    //ajouter jour non dispo plus horaire
    public function store(Request $request)
    {
        if (auth()->user()->asistant==1){
            $ide =Auth::user()->medcecin_id;

        }
        else {
            $ide =Auth::user()->id;
        }
        if (isset($request->StartND) &&isset($request->EndND))
        {
            $event = Event::create([
                'title'		=>	'Jour de Non disonibilitée',
                'start'		=>	$request->StartND,
                'end'		    =>	$request->EndND,
                'medecin_id'		=>	$ide,
                //rendre l'evenement sent titre et avec backlgroun color
                'rendering' => 'background',
                'color'=> 'red',
                'allDay' => 'true',
                'validee'=> 'true'
            ]);
        }
                if (isset($request->Duree))
                {
                    $event=User::where('id',$ide)
                        ->update(['duree'=> $request->Duree]);
                }
        if (isset($request->start_horaire)&&isset($request->end_horaire))
        {
            $event=User::where('id',$ide)
                ->update(['start_horaire'=> $request->start_horaire,
                          'end_horaire'=> $request->end_horaire
                ]);
        }
              return redirect(route('medecin.calender.index'))->with('success','Parametre bien Modifier');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $event = Event::find($id)->delete();
        return redirect(route('medecin.personaliser.index'));
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
