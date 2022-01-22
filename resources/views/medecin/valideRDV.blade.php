<x-app-layout>
    <x-slot name="header">
        <div class="hidden sm:ml-10 sm:flex ">
            <x-jet-nav-link >
                {{__('Validée RDV')}}
            </x-jet-nav-link>
        </div>
    </x-slot>
        <div class="max-w-6xl mx-auto py-10  lg:px-8 ">

                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg " >
                            @if(\Session::has('success'))
                                <div class="alert alert-success">
                                    <p>{{\Session::get('success')}}</p>
                                </div>
                            @endif
                                <div class="col-md-12">
                                    <div class="table-wrap">
                                        <table class="table ">
                                            <thead class="bg-gray-50 ">
                                            <tr>
                                                <th>Nom Complet</th>
                                                <th>date RDV</th>
                                                <th>phone</th>

                                                <th>Types de consultation</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <input type="hidden" value="{{$rd=0}}">
                                            @foreach($events as $event)
                                                @if($event->RDV!=null && $event->validee==null)
                                                    <input type="hidden" value="{{$rd++}}">
                                            <tbody>
                                            <tr class="alert" role="alert">
                                                <th scope="row">{{$event->name}}</th>
                                                <td>{{$event->start}}</td>
                                                <td>{{$event->phone}}</td>
                                                <td>{{$event->Types_de_consultation}}</td>
                                                <td>
                                                    <div style="float: right">
                                                    <button type="submit" class="btn btn-success btn-sm w-20"><a href="{{route('medecin.Events.show',$event->id)}}">Accepter</a></button>
                                                    <button type="submit" class="btn btn-dark btn-sm w-20"><a href="{{route('medecin.Events.edit',$event->id)}}">Afficher</a></button>
                                                        <button type="submit" class="btn btn-danger btn-sm w-20"><a href="{{route('medecin.espacemedecin.edit',$event->id)}}">Refuser</a></button>
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

        </div>
    </div>
</x-app-layout>
