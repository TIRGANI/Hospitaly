<x-app-layout>
    <x-slot name="header">
        <div class="hidden sm:ml-10 sm:flex ">
            <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{__('Mais rendez-vous')}}
            </x-jet-nav-link>
        </div>
    </x-slot>

    <div class="max-w-7xl mx-auto py-10  lg:px-8 ">
        <!-- This example requires Tailwind CSS v2.0+ -->
        @if(\Session::has('success'))
            <div class="alert alert-success">
                <p>{{\Session::get('success')}}</p>
            </div>
        @endif
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg max-w-6xl" >

                    <table class="table ">
                        <thead class="bg-gray-50 ">
                        <tr>
                            <th ></th>
                            <th >Nom Medecin</th>
                            <th>date RDV</th>
                            <th>adress</th>
                            <th>Valider</th>
                            <th>jour restant</th>
                            <th></th>
                        </tr>
                        </thead>
                        <input type="hidden" value="{{$rd=0}}">
                        @foreach($events as $event)
                            @if($event->RDV!=null )
                                <input type="hidden" value="{{$rd++}}">
                            <input type="hidden" value="{{  $datsaisie = Illuminate\Support\Carbon::parse($event->start)}}">
                            <input type="hidden" value="{{  $today = Illuminate\Support\Carbon::now()}}">
                            <input type="hidden" value="{{  $diference=$today->diffInDays($datsaisie,false)}}">

                                <tbody>
                                <tr class="alert" role="alert">
                                    <th @if($diference == 0) style="border-left: 5px solid green; " @elseif($diference > 0 and $diference <= 2) style="border-left: 5px solid lawngreen;" @elseif($diference > 2 )style="border-left: 5px solid yellow;"  @elseif($diference < 0 ) style="border-left: 5px solid red;" @endif ></th>
                                    <th scope="row" >{{$event->title}}</th>
                                    <td >{{$event->start}}</td>
                                    <td>{{$event->Adresse}}</td>
                                    <td>@if($event->validee!=null)Validée @endif @if($event->validee==null) Non validée @endif</td>
                                    <td > @if($diference<0) <p style="color :red" > rendez-vous éxpirer</p> @elseif($diference > 0 and $diference <= 2) moin de 48h @elseif($diference == 0) moin de 24h @else  {{$diference}} jour @endif </td>
                                    <td>
                                        <div style="float: right">
                                            @if($event->validee==null) <a href="{{route('patient.espacepatient.edit',$event->id)}}"><button  @if($diference<0)  hidden @endif type="submit" type="submit" class="btn btn-primary btn-sm w-8"><i class="bx bx-pen"></i></button></a>@endif
                                            <a href="{{route('patient.gestionrdv.show',$event->id)}}"> <button type="submit" class="btn btn-outline-dark btn-sm w-18 "><i class="bx bx-show"></i></button></a>
                                            <a href="{{route('patient.showcalendar.edit',$event->id)}}"> <button type="submit" class="btn btn-danger btn-sm w-18 "><i class="bx bx-trash"></i></button></a>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            @endif

                        @endforeach

                    </table>
                    @if($rd==0)
                        <div class="card-title text-center">
                            vous avez aucun rendez vous !!
                        </div>
                    @endif
                </div>
            </div>
        </div>


</x-app-layout>
