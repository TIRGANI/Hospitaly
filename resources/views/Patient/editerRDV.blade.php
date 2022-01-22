@foreach($events as $event)
<x-app-layout>
    <x-slot name="header">
        <div class="hidden sm:ml-10 sm:flex ">
            <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{__('Modifier ton rendez-vous du : ').$event->start}}
            </x-jet-nav-link>
        </div>
    </x-slot>
    <div>
        <div class=" mx-auto py-10 sm:px-6 lg:px-8 max-w-6xl">
            <!-- This example requires Tailwind CSS v2.0+ -->
            <form action="{{ route("patient.modifierrdv.store") }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="{{$event->id}}" name="id">
                <input type="hidden" value="{{$event->medecin_id}}" name="medecin_id">
                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg pt-6 pb-4 pl-5">
                                <!--Nom Complet-->
                                <div class="input-group mt-3 ml-4 mr-3  ">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text text-sm"  style="width: 190px"  id="basic-addon3">Nom Complet </span>
                                    </div>
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3"><i class='bx bx-calendar'></i> </span>
                                    </div>

                                    <input type="text" name="title" value="{{$event->title}}"  class="text-sm w-50" id="basic-url" aria-describedby="basic-addon3">
                                </div>
                                <!--date rdv-->
                                <div class="input-group mt-3 ml-4 mr-3 ">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text text-sm"  style="width: 190px" id="basic-addon3">Date RDV</span>
                                    </div>
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3"><i class='bx bx-calendar'></i> </span>
                                    </div>
                                    <input type="datetime-local" required value="{{$event->start}}" name="start" class="text-sm w-50" id="basic-url" aria-describedby="basic-addon3">
                                </div>
                                <hr class="mt-3 mb-3 " style="margin-right: 100px">
                                <!--date_naissence-->
                                <div class="input-group mt-3 ml-4 mr-3">
                                    <div class="input-group-prepend ">
                                        <span class="input-group-text text-sm"  style="width: 190px" id="basic-addon3">date de naissence</span>
                                    </div>
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3"><i class='bx bx-calendar'></i> </span>
                                    </div>
                                    <input type="date" required name="date_naissence" value="{{$event->date_naissence}}" class="text-sm w-50" id="basic-url" aria-describedby="basic-addon3">
                                </div>
                                <!--adresse-->
                                <div class="input-group mt-3 ml-4 mr-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text text-sm"  style="width: 190px" id="basic-addon3">Adresse</span>
                                    </div>
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3"><i class='bx bx-calendar'></i> </span>
                                    </div>
                                    <input type="text" name="Adresse" value="{{$event->Adresse}}" class="text-sm w-50" id="basic-url" aria-describedby="basic-addon3">
                                </div>
                                <!--phone-->
                                <div class="input-group mt-3 ml-4 mr-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text text-sm"  style="width: 190px" id="basic-addon3">phone</span>
                                    </div>
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"  id="basic-addon3"><i class='bx bx-calendar'></i> </span>
                                    </div>
                                    <input type="tel" name="phone" value="{{$event->phone}}" class="text-sm w-50" id="basic-url" aria-describedby="basic-addon3">
                                </div>
                                <!--CIN-->
                                <div class="input-group mt-3 ml-4 mr-3 ">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text text-sm" style="width: 190px" id="basic-addon3">CIN</span>
                                    </div>
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3"><i class='bx bx-calendar'></i> </span>
                                    </div>
                                    <input type="text" name="CIN" value="{{$event->CIN}}" class="text-sm w-50" id="basic-url" aria-describedby="basic-addon3">
                                </div>
                                <!--email-->
                                <div class="input-group mt-3 ml-4 mr-3  ">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text text-sm"  style="width: 190px"  id="basic-addon3">Email</span>
                                    </div>
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3"><i class='bx bx-calendar'></i> </span>
                                    </div>

                                    <input type="email" name="email" value="{{$event->email}}"  class="text-sm w-50" id="basic-url" aria-describedby="basic-addon3">
                                </div>
                                <!--Caisse_Assurance_sociale-->
                                <div class="input-group mt-3 ml-4 mr-3  ">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text text-sm"  style="width: 190px"  id="basic-addon3">Caisse Assurance sociale</span>
                                    </div>
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3"><i class='bx bx-calendar'></i> </span>
                                    </div>

                                    <input type="text" name="Caisse_Assurance_sociale" value="{{$event->Caisse_Assurance_sociale}}"  class="text-sm w-50" id="basic-url" aria-describedby="basic-addon3">
                                </div>
                                <!--Caisse_Assurance_sociale_N-->
                                <div class="input-group mt-3 ml-4 mr-3  ">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text text-sm"  style="width: 190px"  id="basic-addon3">Numéro de la Caisse Assurance sociale</span>
                                    </div>
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3"><i class='bx bx-calendar'></i> </span>
                                    </div>

                                    <input type="text" name="Caisse_Assurance_sociale_N" value="{{$event->Caisse_Assurance_sociale_N}}"  class="text-sm w-50" id="basic-url" aria-describedby="basic-addon3">
                                </div>
                                <!--Mutuelle-->
                                <div class="input-group mt-3 ml-4 mr-3  ">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text text-sm"  style="width: 190px"  id="basic-addon3">Mutuelle</span>
                                    </div>
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3"><i class='bx bx-calendar'></i> </span>
                                    </div>

                                    <input type="text" name="Mutuelle" value="{{$event->Mutuelle}}"  class="text-sm w-50" id="basic-url" aria-describedby="basic-addon3">
                                </div>
                                <!--Mutuelle_N-->
                                <div class="input-group mt-3 ml-4 mr-3  ">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text text-sm"  style="width: 190px"  id="basic-addon3">Numéro Mutuelle</span>
                                    </div>
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3"><i class='bx bx-calendar'></i> </span>
                                    </div>

                                    <input type="text" name="Mutuelle_N" value="{{$event->Mutuelle_N}}"  class="text-sm w-50" id="basic-url" aria-describedby="basic-addon3">
                                </div>
                                <!--Motifs_de_consultation-->
                                <div class="input-group mt-3 ml-4 mr-3  ">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text text-sm"  style="width: 190px"  id="basic-addon3">Motifs de consultation</span>
                                    </div>
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3"><i class='bx bx-calendar'></i> </span>
                                    </div>

                                    <textarea type="text" name="Motifs_de_consultation" value="{{$event->Motifs_de_consultation}}"  class="text-sm w-50" style="height: 10rem" id="basic-url" aria-describedby="basic-addon3">
                                        {{$event->Motifs_de_consultation}}
                                    </textarea>
                                </div>
                                <!--Types_de_consultation-->
                                <div class="input-group mt-3 ml-4 mr-3  ">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text text-sm"  style="width: 190px"  id="basic-addon3">Types de consultation</span>
                                    </div>
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3"><i class='bx bx-calendar'></i> </span>
                                    </div>

                                    <input type="text" name="Types_de_consultation" value="{{$event->Types_de_consultation}}"  class="text-sm w-50" id="basic-url" aria-describedby="basic-addon3">
                                </div>
                                <!--Allergie-->
                                <div class="input-group mt-3 ml-4 mr-3  ">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text text-sm"  style="width: 190px"  id="basic-addon3">Allergie</span>
                                    </div>
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3"><i class='bx bx-calendar'></i> </span>
                                    </div>

                                    <input type="text" name="Allergie" value="{{$event->Allergie}}"  class="text-sm w-50" id="basic-url" aria-describedby="basic-addon3">
                                </div>
                                <!--Antécédent_médicaux-->
                                <div class="input-group mt-3 ml-4 mr-3  ">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text text-sm"  style="width: 190px"  id="basic-addon3">Antécédent médicaux</span>
                                    </div>
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3"><i class='bx bx-calendar'></i> </span>
                                    </div>

                                    <input type="text" name="Antécédent_médicaux" value="{{$event->Antécédent_médicaux}}"  class="text-sm w-50" id="basic-url" aria-describedby="basic-addon3">
                                </div>
                                <!--Provenance_Médecin_traitant-->
                                <div class="input-group mt-3 ml-4 mr-3  ">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text text-sm"  style="width: 190px"  id="basic-addon3">Provenance Médecin traitant</span>
                                    </div>
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3"><i class='bx bx-calendar'></i> </span>
                                    </div>

                                    <input type="text" name="Provenance_Médecin_traitant" value="{{$event->Provenance_Médecin_traitant}}"  class="text-sm w-50" id="basic-url" aria-describedby="basic-addon3">
                                </div>
                                <!--profession-->
                                <div class="input-group mt-3 ml-4 mr-3  ">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text text-sm"  style="width: 190px"  id="basic-addon3">profession</span>
                                    </div>
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3"><i class='bx bx-calendar'></i> </span>
                                    </div>

                                    <input type="text" name="profession" value="{{$event->profession}}"  class="text-sm w-50" id="basic-url" aria-describedby="basic-addon3">
                                </div>
                                <!--Lien_parenter-->
                                <div class="input-group mt-3 ml-4 mr-3  ">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text text-sm"  style="width: 190px"  id="basic-addon3">Lien parenter</span>
                                    </div>
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3"><i class='bx bx-calendar'></i> </span>
                                    </div>

                                    <input type="text" name="Lien_parenter" value="{{$event->Lien_parenter}}"  class="text-sm w-50" id="basic-url" aria-describedby="basic-addon3">
                                </div>
                                <!--Adresse_parenter-->
                                <div class="input-group mt-3 ml-4 mr-3  ">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text text-sm"  style="width: 190px"  id="basic-addon3">Adresse parenter</span>
                                    </div>
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3"><i class='bx bx-calendar'></i> </span>
                                    </div>

                                    <input type="text" name="Adresse_parenter" value="{{$event->Adresse_parenter}}"  class="text-sm w-50" id="basic-url" aria-describedby="basic-addon3">
                                </div>
                                <!--tel_parenter-->
                                <div class="input-group mt-3 ml-4 mr-3  ">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text text-sm"  style="width: 190px"  id="basic-addon3">tel parenter</span>
                                    </div>
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3"><i class='bx bx-calendar'></i> </span>
                                    </div>

                                    <input type="text" name="tel_parenter" value="{{$event->tel_parenter}}"  class="text-sm w-50" id="basic-url" aria-describedby="basic-addon3">
                                </div>
                                <!--end-->
                            </div>
                            <button type="submit" class="btn btn-secondary btn-lg" style="margin-top: 50px">save</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
@endforeach
