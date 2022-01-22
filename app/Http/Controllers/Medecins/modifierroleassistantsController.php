<?php

namespace App\Http\Controllers\Medecins;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class modifierroleassistantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       if($request->ajax()) {
            if ($request->role == 'Getsion_RDV') {
                $event = User::find($request->id)->update([
                    'Getsion_RDV' => $request->validation,
                ]);
                return response()->json($event);
            }
           if ($request->role == 'Gestion_Calendrier') {
               $event = User::find($request->id)->update([
                   'Gestion_Calendrier' => $request->validation,
               ]);
               return response()->json($event);
           }
           if ($request->role == 'personnaliser_ajonda') {
               $event = User::find($request->id)->update([
                   'personnaliser_ajonda' => $request->validation,
               ]);
               return response()->json($event);
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



    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

        $event=User::where('id',$id)->get();
        return view('medecin.gestionAssistant.profile',compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = User::find($id)->delete();

       return redirect(route('medecin.addassistant.index'));
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
