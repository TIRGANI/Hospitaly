<x-app-layout>
    <x-slot name="header">
        <div class="hidden sm:ml-10 sm:flex ">
            <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{__('Ajouter RDV')}}
            </x-jet-nav-link>
        </div>
    </x-slot>
    <div>
        <div class="mx-auto py-10 sm:px-6 lg:px-8 max-w-6xl ">
            <!-- This example requires Tailwind CSS v2.0+ -->
            <form action="{{ route("medecin.Events.store") }}" method="POST" enctype="multipart/form-data">
                @csrf

                        <div class="shadow overflow-hidden border-b border-gray-200  sm:rounded-lg pt-6 pb-5 ml-12 pl-5 mr-3 ">
                            <div class="card-header" style="text-align: center">
                                Formulaire de Demande de RV
                            </div>

                            <div class="input-group mt-3 ">

                                <div class="input-group-prepend">
                                    <span class="input-group-text text-sm" style="width: 12rem" id="basic-addon3">Nom Complet </span>
                                </div>

                                <div class="input-group-prepend">
                                    <span class="input-group-text text-sm" id="basic-addon3"><i class='bx bx-calendar'></i> </span>
                                </div>

                                <input type="text" required name="title" class="text-sm w-50" style="border-radius: 10px" id="basic-url" aria-describedby="basic-addon3">
                            </div>
                            <div class="input-group mt-3 ">
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-sm" style="width: 12rem" id="basic-addon3">CIN</span>
                                </div>
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon3"><i class='bx bx-calendar'></i> </span>
                                </div>
                                <input type="text" required name="CIN" class="text-sm w-50" style="border-radius: 10px" id="basic-url" aria-describedby="basic-addon3">
                            </div>
                            <div class="input-group mt-3">
                                <div class="input-group-prepend ">
                                    <span class="input-group-text text-sm "  style="width: 12rem" id="basic-addon3">date de naissence</span>
                                </div>
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-sm" id="basic-addon3"><i class='bx bx-calendar'></i> </span>
                                </div>
                                <input type="date"  name="date_naissence" style="border-radius: 10px" class="text-sm w-50" id="basic-url" aria-describedby="basic-addon3">
                            </div>
                            <div class="input-group mt-3 ">
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-sm"  style="width: 12rem" id="basic-addon3">profession</span>
                                </div>
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-sm" id="basic-addon3"><i class='bx bx-calendar'></i> </span>
                                </div>
                                <input type="text"  name="profession" style="border-radius: 10px" id="basic-url" class="text-sm w-50" aria-describedby="basic-addon3">
                            </div>
                            <div class="input-group mt-3 ">
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-sm"  style="width: 12rem" id="basic-addon3">Adresse</span>
                                </div>
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-sm" id="basic-addon3"><i class='bx bx-calendar'></i> </span>
                                </div>
                                <input type="text"  name="Adresse" style="border-radius: 10px" id="basic-url" class="text-sm w-50" aria-describedby="basic-addon3">
                            </div>
                            <div class="input-group mt-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-sm"  style="width: 12rem" id="basic-addon3">phone</span>
                                </div>
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-sm"  id="basic-addon3"><i class='bx bx-calendar'></i> </span>
                                </div>
                                <input type="tel" required name="phone" style="border-radius: 10px" placeholder=" Format : 0612345678" class="text-smw-50" id="basic-url" aria-describedby="basic-addon3">
                            </div>
                            <div class="input-group mt-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-sm"  style="width: 12rem" id="basic-addon3">email</span>
                                </div>
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-sm"  id="basic-addon3"><i class='bx bx-calendar'></i> </span>
                                </div>
                                <input type="email" required name="email" style="border-radius: 10px"  class="text-sm w-50" id="basic-url" aria-describedby="basic-addon3">
                            </div>
                            <div class="input-group mt-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-sm"  style="width: 12rem" id="basic-addon3">Caisse Assurance sociale </span>
                                </div>
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-sm"  id="basic-addon3"><i class='bx bx-calendar'></i> </span>
                                </div>
                                <input type="text"  name="Caisse_Assurance_sociale" style="border-radius: 10px"  class="text-sm w-15" id="basic-url" aria-describedby="basic-addon3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-sm"  style="border-radius: 5px" id="basic-addon3">N</span>
                                </div>
                                <input type="text"  name="Caisse_Assurance_sociale_N" style="border-radius: 10px"  class="text-sm w-15" id="basic-url" aria-describedby="basic-addon3">
                            </div>

                            <div class="input-group mt-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-sm"  style="width: 12rem" id="basic-addon3">Mutuelle</span>
                                </div>
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-sm"  id="basic-addon3"><i class='bx bx-calendar'></i> </span>
                                </div>
                                <input type="text"  name="Mutuelle" style="border-radius: 10px"  class="text-sm w-15" id="basic-url" aria-describedby="basic-addon3">

                                <div class="input-group-prepend">
                                    <span class="input-group-text text-sm"  style="border-radius: 5px" id="basic-addon3">N</span>
                                </div>
                                <input type="text"  name="Mutuelle_N" style="border-radius: 10px"  class="text-sm w-15" id="basic-url" aria-describedby="basic-addon3">
                            </div>
                            <div class="input-group mt-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-sm"  style="width: 12rem" id="basic-addon3">Motifs de consultation</span>
                                </div>
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-sm"  id="basic-addon3"><i class='bx bx-calendar'></i> </span>
                                </div>
                                <!---->
                                <div class="form-floating ">
                                    <textarea class="form-control text-sm" placeholder="Leave a comment here" required name="Motifs_de_consultation" style="border-radius: 10px;height: 12rem;width: 30rem" ></textarea>
                                </div>
                                <!---->
                            </div>
                            <div class="input-group mt-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-sm"  style="width: 12rem" id="basic-addon3">Types de consultation </span>
                                </div>
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-sm"  id="basic-addon3"><i class='bx bx-calendar'></i> </span>
                                </div>

                                <select required name="Types_de_consultation"  style="border-radius: 10px"  class="text-sm w-50" >
                                    <option value="Physique">Physique </option>
                                    <option value="domicile">à domicile </option>
                                    <option value="En_ligne">En ligne </option>
                                </select>
                            </div>
                            <!--radio-->
                            <div class="input-group mt-3 ">
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-sm" style="width: 12rem"  id="basic-addon3">Allergie </span>
                                </div>
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-sm" id="basic-addon3"><i class='bx bx-calendar'></i> </span>
                                </div>
                                <div class="form-check form-check-inline ml-4">
                                    <input class="form-check-input text-sm w-4" type="radio" name="Allergie" id="inlineRadio1" value="Oui">
                                    <label class="form-check-label text-sm " for="inlineRadio1">Oui</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input text-sm w-4" type="radio" name="Allergie" id="inlineRadio2" value="Non">
                                    <label class="form-check-label text-sm" for="inlineRadio2">Non</label>
                                </div>
                            </div>
                            <!---->
                            <div class="input-group mt-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-sm"  style="width: 12rem" id="basic-addon3">Antécédent médicaux </span>
                                </div>
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-sm"  id="basic-addon3"><i class='bx bx-calendar'></i> </span>
                                </div>
                                <input type="text"  name="Antécédent_médicaux" style="border-radius: 10px"  class="text-sm w-50" id="basic-url" aria-describedby="basic-addon3">
                            </div>
                            <div class="input-group mt-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-sm"  style="width: 12rem" id="basic-addon3">Provenance Médecin traitant</span>
                                </div>
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-sm"  id="basic-addon3"><i class='bx bx-calendar'></i> </span>
                                </div>
                                <input type="text"  name="Provenance_Médecin_traitant" style="border-radius: 10px"  class="text-sm w-50" id="basic-url" aria-describedby="basic-addon3">
                            </div>
                            <div class="input-group mt-3  ">
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-sm" style="width: 12rem" id="basic-addon3">Date RDV</span>
                                </div>
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-sm" id="basic-addon3"><i class='bx bx-calendar'></i> </span>
                                </div>
                                <input type="date" required  name="start_date" style="border-radius: 10px; width: 12rem" class="text-sm start w-25" id="start" aria-describedby="basic-addon3" >
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-sm" style="width: 6rem" id="basic-addon3">heur RDV</span>
                                </div>
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-sm " id="basic-addon3"><i class='bx bx-calendar'></i> </span>
                                </div>

                                    <input type="time" required min="{{Auth::user()->start_horaire}}" max="{{Auth::user()->end_horaire}}"  name="start_heur" style="border-radius: 10px" class="text-sm start w-25" id="start" aria-describedby="basic-addon3" >


                            </div>

                            <div class="mt-3">
                                Personne à prévenir :
                                <hr class="mt-1 " style="width: 10rem;color: blue">
                            </div>
                            <!--lien de parenter-->
                            <div class="input-group mt-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-sm"  style="width: 10rem" id="basic-addon3">•	Nom et prénom</span>
                                </div>
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-sm"  id="basic-addon3"><i class='bx bx-calendar'></i> </span>
                                </div>
                                <input type="text"  name="Provenance_Médecin_traitant" style="border-radius: 10px"  class="text-sm" id="basic-url" aria-describedby="basic-addon3">
                            </div>
                            <div class="input-group mt-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-sm"  style="width: 10rem" id="basic-addon3">•	Lien de parenté</span>
                                </div>
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-sm"  id="basic-addon3"><i class='bx bx-calendar'></i> </span>
                                </div>
                                <input type="text"  name="Lien_parenter" style="border-radius: 10px"  class="text-sm" id="basic-url" aria-describedby="basic-addon3">
                            </div>
                            <div class="input-group mt-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-sm"  style="width: 10rem" id="basic-addon3">•	Adresse </span>
                                </div>
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-sm"  id="basic-addon3"><i class='bx bx-calendar'></i> </span>
                                </div>
                                <input type="text"  name="Adresse_parenter" style="border-radius: 10px"  class="text-sm" id="basic-url" aria-describedby="basic-addon3">
                            </div>
                            <div class="input-group mt-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-sm"  style="width: 10rem" id="basic-addon3">•	Tél</span>
                                </div>
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-sm"  id="basic-addon3"><i class='bx bx-calendar'></i> </span>
                                </div>
                                <input type="text"  name="tel_parenter" style="border-radius: 10px"  class="text-sm" id="basic-url" aria-describedby="basic-addon3">
                            </div>
                            <!---->
                        </div>

                        <button type="submit" class="btn btn-secondary btn-lg" style="margin-top: 50px">save</button>
            </form>
        </div>
    </div>
</x-app-layout>
