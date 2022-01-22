<x-app-layout>
    <x-slot name="header">
        <div class="hidden sm:ml-10 sm:flex ">
            <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{__('Ma consultation')}}
            </x-jet-nav-link>
        </div>
    </x-slot>

    <div class="max-w-7xl mx-auto py-10  lg:px-8 ">
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg " >

            <div class="col-md-12 bg-gray-50">
                <figure class="text-center">
                    <blockquote class="blockquote">
                        <p>les détaille du consultation</p>
                    </blockquote>
                    @foreach($events as $event)
                        <figcaption class="blockquote-footer ">
                            {{$event->name}}
                        </figcaption>
                </figure>
                <!--Nom Complet-->
                <dl class="row mt-10 ">
                    <dt class="col-sm-3 mt-5">Nom Complet</dt>
                    <dd class="col-sm-9 mt-5">{{$event->name}}</dd>
                    <!--CIN-->
                    <dt class="col-sm-3 mt-5">CIN</dt>
                    @if($event->CIN==null)
                        <dd class="col-sm-9 mt-5">
                            <figcaption class="blockquote-footer ">
                                No CIN
                            </figcaption>
                        </dd>
                    @elseif($event->CIN!=null)
                        <dd class="col-sm-9 mt-5">{{$event->CIN}}</dd>
                    @endif

                <!--date de naissence-->
                    <dt class="col-sm-3 mt-5">Date de Naissence</dt>
                    @if($event->date_naissence==null)
                        <dd class="col-sm-9 mt-5">
                            <figcaption class="blockquote-footer ">
                                No Date de Naissence
                            </figcaption>
                        </dd>
                    @elseif($event->date_naissence!=null)
                        <dd class="col-sm-9 mt-5">{{$event->date_naissence}}</dd>
                    @endif


                <!--Profession -->
                    <dt class="col-sm-3 mt-5">Profession</dt>
                    @if($event->profession==null)
                        <dd class="col-sm-9 mt-5">
                            <figcaption class="blockquote-footer ">
                                No profession
                            </figcaption>
                        </dd>
                    @elseif($event->profession!=null)
                        <dd class="col-sm-9 mt-5">{{$event->profession}}</dd>
                    @endif
                <!--Adresse-->
                    <dt class="col-sm-3 mt-5">Adress Medecin</dt>
                    @if($event->Adresse==null)
                        <dd class="col-sm-9 mt-5">
                            <figcaption class="blockquote-footer ">
                                No Adresse
                            </figcaption>
                        </dd>
                    @elseif($event->Adresse!=null)
                        <dd class="col-sm-9 mt-5">{{$event->Adresse}}</dd>
                    @endif
                <!--tel-->
                    <dt class="col-sm-3 mt-5">Numéro de téléphone Medecin</dt>
                    @if($event->phone==null)
                        <dd class="col-sm-9 mt-5">
                            <figcaption class="blockquote-footer ">
                                No phone nember
                            </figcaption>
                        </dd>
                    @elseif($event->phone!=null)
                        <dd class="col-sm-9 mt-5">{{$event->phone}}</dd>
                    @endif
                <!--email-->
                    <dt class="col-sm-3 mt-5">Email</dt>
                    @if($event->email==null)
                        <dd class="col-sm-9 mt-5">
                            <figcaption class="blockquote-footer ">
                                No email
                            </figcaption>
                        </dd>
                    @elseif($event->email!=null)
                        <dd class="col-sm-9 mt-5">{{$event->email}}</dd>
                    @endif
                <!--Caisse_Assurance_sociale-->
                    <dt class="col-sm-3 mt-5">Caisse Assurance sociale</dt>
                    @if($event->Caisse_Assurance_sociale==null)
                        <dd class="col-sm-9 mt-5">
                            <figcaption class="blockquote-footer ">
                                No Caisse_Assurance_sociale
                            </figcaption>
                        </dd>
                    @elseif($event->Caisse_Assurance_sociale!=null)
                        <dd class="col-sm-9 mt-5">{{$event->Caisse_Assurance_sociale}}
                            @if($event->Caisse_Assurance_sociale_N!=null)
                                | Numéro :{{$event->Caisse_Assurance_sociale_N}}
                            @endif</dd>
                    @endif
                <!--Mutuelle-->
                    <dt class="col-sm-3 mt-5">Mutuelle</dt>
                    @if($event->Mutuelle==null)
                        <dd class="col-sm-9 mt-5">
                            <figcaption class="blockquote-footer ">
                                No Mutuelle
                            </figcaption>
                        </dd>
                    @elseif($event->Mutuelle!=null)
                        <dd class="col-sm-9 mt-5">{{$event->Mutuelle}}
                            @if($event->Mutuelle_N!=null)
                                | Numéro :{{$event->Mutuelle_N}}
                            @endif
                        </dd>

                    @endif
                <!--Motifs_de_consultation-->
                    <dt class="col-sm-3 mt-5">Motifs de consultation</dt>
                    @if($event->Motifs_de_consultation==null)
                        <dd class="col-sm-9 mt-5">
                            <figcaption class="blockquote-footer ">
                                No Motifs_de_consultation
                            </figcaption>
                        </dd>
                    @elseif($event->Motifs_de_consultation!=null)
                        <dd class="col-sm-9 mt-5">{{$event->Motifs_de_consultation}}</dd>
                    @endif
                <!--Types_de_consultation-->
                    <dt class="col-sm-3 mt-5">Types de consultation</dt>
                    @if($event->Types_de_consultation==null)
                        <dd class="col-sm-9 mt-5">
                            <figcaption class="blockquote-footer ">
                                No Types_de_consultation
                            </figcaption>
                        </dd>
                    @elseif($event->Types_de_consultation!=null)
                        <dd class="col-sm-9 mt-5">{{$event->Types_de_consultation}}</dd>
                    @endif
                <!--Allergie-->
                    <dt class="col-sm-3 mt-5">Allergie</dt>
                    @if($event->Allergie==null)
                        <dd class="col-sm-9 mt-5">
                            <figcaption class="blockquote-footer ">
                                No Allergie
                            </figcaption>
                        </dd>
                    @elseif($event->Allergie!=null)
                        <dd class="col-sm-9 mt-5">{{$event->Allergie}}</dd>
                    @endif
                <!--Antécédent_médicaux-->
                    <dt class="col-sm-3 mt-5">Antécédent médicaux</dt>
                    @if($event->Antécédent_médicaux==null)
                        <dd class="col-sm-9 mt-5">
                            <figcaption class="blockquote-footer ">
                                No Antécédent_médicaux
                            </figcaption>
                        </dd>
                    @elseif($event->Antécédent_médicaux!=null)
                        <dd class="col-sm-9 mt-5">{{$event->Antécédent_médicaux}}</dd>
                    @endif
                <!--Provenance_Médecin_traitant-->
                    <dt class="col-sm-3 mt-5">Provenance Médecin traitant</dt>
                    @if($event->Provenance_Médecin_traitant==null)
                        <dd class="col-sm-9 mt-5">
                            <figcaption class="blockquote-footer ">
                                No Provenance_Médecin_traitant
                            </figcaption>
                        </dd>
                    @elseif($event->Provenance_Médecin_traitant!=null)
                        <dd class="col-sm-9 mt-5">{{$event->Provenance_Médecin_traitant}}</dd>
                    @endif
                <!--Lien_parenter-->
                    <dt class="col-sm-3 mt-5">Lien parenter</dt>
                    @if($event->Lien_parenter==null)
                        <dd class="col-sm-9 mt-5">
                            <figcaption class="blockquote-footer ">
                                No Lien_parenter
                            </figcaption>
                        </dd>
                    @elseif($event->Lien_parenter!=null)
                        <dd class="col-sm-9 mt-5">{{$event->Lien_parenter}}</dd>
                    @endif
                <!--Adresse_parenter-->
                    <dt class="col-sm-3 mt-5">Adresse parenter</dt>
                    @if($event->Adresse_parenter==null)
                        <dd class="col-sm-9 mt-5">
                            <figcaption class="blockquote-footer ">
                                No Adresse_parenter
                            </figcaption>
                        </dd>
                    @elseif($event->Adresse_parenter!=null)
                        <dd class="col-sm-9 mt-5">{{$event->Adresse_parenter}}</dd>
                    @endif
                <!--tel_parenter-->
                    <dt class="col-sm-3 mt-5">tel parenter</dt>
                    @if($event->tel_parenter==null)
                        <dd class="col-sm-9 mt-5">
                            <figcaption class="blockquote-footer ">
                                No tel_parenter
                            </figcaption>
                        </dd>
                    @elseif($event->tel_parenter!=null)
                        <dd class="col-sm-9 mt-5">{{$event->tel_parenter}}</dd>
                    @endif

                    <dt class="col-sm-3 mt-5">Dernier Consultation</dt>
                    <dd class="col-sm-9 mt-5">{{$event->start}}</dd>

                    <!--Adresse-->

                    <dt class="col-sm-3 mt-5">Spécialité</dt>
                    <dd class="col-sm-9 mt-5">
                        @foreach($specialite as $spec)
                            <p>{{$spec->nom}}</p>
                        @endforeach
                    </dd>

                    <dl class="row mt-5 " style="float: right">
                        <dt class="col-sm-8 mt-5 ">Docteur Consutant </dt>
                        <dd class="col-sm-4 mt-5">TIRGANI Badreddine</dd>
                    </dl>

                </dl>
            </div>
        </div>
        <div class="bootn">
            <button type="submit" class="btnprn btn btn-warning mt-2" style="float: right" onclick="printe();"><a href="{{url('/medecin/Events/9/edit')}}"><span class="iconify" data-icon="cil:print"></span></a></button>
        </div>
    </div>
    </div>
    @endforeach

</x-app-layout>
<script type="text/javascript">
    function printe(){
        print();
    }
</script>
