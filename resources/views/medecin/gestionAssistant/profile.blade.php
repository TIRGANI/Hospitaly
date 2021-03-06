<x-app-layout>
    <x-slot name="header">
        <div class="hidden sm:ml-10 sm:flex ">
            <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{__('Gestion des Assitants')}}
            </x-jet-nav-link>
        </div>
    </x-slot>
    <div class="mx-auto py-10 sm:px-6 lg:px-8 max-w-6xl ">
        <!-- This example requires Tailwind CSS v2.0+ -->
        <form action="{{ route("medecin.addassistant.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="shadow overflow-hidden border-b border-gray-200  sm:rounded-lg pt-6 pb-5 ml-12 pl-5 mr-3 ">
                <div class="card-header" style="text-align: center">
                    Formulaire d'ajoute d'un Assistent Medicale
                </div>

                <div class="input-group mt-3 ">

                    <div class="input-group-prepend">
                        <span class="input-group-text text-sm" style="width: 10rem" id="basic-addon3">Nom Complet </span>
                    </div>

                    <div class="input-group-prepend">
                        <span class="input-group-text text-sm" id="basic-addon3"><i class='bx bx-calendar'></i> </span>
                    </div>

                    <input type="text" required name="name" class="text-sm" style="border-radius: 10px" id="basic-url" aria-describedby="basic-addon3">
                </div>
                <div class="input-group mt-3 ">
                    <div class="input-group-prepend">
                        <span class="input-group-text text-sm" style="width: 10rem" id="basic-addon3">CIN</span>
                    </div>
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon3"><i class='bx bx-calendar'></i> </span>
                    </div>
                    <input type="text" required name="CIN" class="text-sm " style="border-radius: 10px" id="basic-url" aria-describedby="basic-addon3">
                </div>
                <div class="input-group mt-3">
                    <div class="input-group-prepend ">
                        <span class="input-group-text text-sm "  style="width: 10rem" id="basic-addon3">date de naissence</span>
                    </div>
                    <div class="input-group-prepend">
                        <span class="input-group-text text-sm" id="basic-addon3"><i class='bx bx-calendar'></i> </span>
                    </div>
                    <input type="date" required name="date_naissence" style="border-radius: 10px" class="text-sm" id="basic-url" aria-describedby="basic-addon3">
                </div>
                <div class="input-group mt-3 ">
                    <div class="input-group-prepend">
                        <span class="input-group-text text-sm"  style="width: 10rem" id="basic-addon3">specialit??e</span>
                    </div>
                    <div class="input-group-prepend ">
                        <span class="input-group-text text-sm"  id="basic-addon3"><i class='bx bx-calendar'></i> </span>
                    </div>
                    <select name="specialite_id" style="border-radius: 10px" class="text-sm" >
                        <option value="1">L'allergologie</option>
                        <option value="2">l'andrologie</option>
                        <option value="3">L'anesth??siologie</option>
                        <option value="4">la cardiologie</option>
                        <option value="5">La neurologie</option>
                        <option value="6">L'endocrinologie</option>
                        <option value="7">la gastro-ent??rologie</option>
                        <option value="8">la g??riatrie</option>
                        <option value="9">la gyn??cologie</option>
                        <option value="10">L'h??matologie</option>
                    </select>
                </div>
                <div class="input-group mt-3 ">
                    <div class="input-group-prepend">
                        <span class="input-group-text text-sm"  style="width: 10rem" id="basic-addon3">Adresse</span>
                    </div>
                    <div class="input-group-prepend">
                        <span class="input-group-text text-sm" id="basic-addon3"><i class='bx bx-calendar'></i> </span>
                    </div>
                    <input type="text" required name="Adresse" style="border-radius: 10px" id="basic-url" class="text-sm" aria-describedby="basic-addon3">
                </div>
                <div class="input-group mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text text-sm"  style="width: 10rem" id="basic-addon3">phone</span>
                    </div>
                    <div class="input-group-prepend">
                        <span class="input-group-text text-sm"  id="basic-addon3"><i class='bx bx-calendar'></i> </span>
                    </div>
                    <input type="tel" required name="phone" style="border-radius: 10px" placeholder=" Format : 0612345678" class="text-sm" id="basic-url" aria-describedby="basic-addon3">
                </div>
                <div class="input-group mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text text-sm"  style="width: 10rem" id="basic-addon3">email</span>
                    </div>
                    <div class="input-group-prepend">
                        <span class="input-group-text text-sm"  id="basic-addon3"><i class='bx bx-calendar'></i> </span>
                    </div>
                    <input type="email" required name="email" style="border-radius: 10px"  class="text-sm" id="basic-url" aria-describedby="basic-addon3">
                </div>
                <div class="input-group mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text text-sm"  style="width: 10rem" id="basic-addon3">password</span>
                    </div>
                    <div class="input-group-prepend">
                        <span class="input-group-text text-sm"  id="basic-addon3"><i class='bx bx-calendar'></i> </span>
                    </div>
                    <input type="password" required name="password" style="border-radius: 10px"  class="text-sm" id="basic-url" aria-describedby="basic-addon3">
                </div>
                <div class="input-group mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text text-sm"  style="width: 10rem" id="basic-addon3">Licence </span>
                    </div>
                    <div class="input-group-prepend">
                        <span class="input-group-text text-sm"  id="basic-addon3"><i class='bx bx-calendar'></i> </span>
                    </div>
                    <input type="text" required name="Licence" style="border-radius: 10px"  class="text-sm" id="basic-url" aria-describedby="basic-addon3">
                    <div class="input-group-prepend">
                        <span class="input-group-text text-sm"  style="border-radius: 5px" id="basic-addon3">N</span>
                    </div>
                    <input type="text" required name="Licence_N" style="border-radius: 10px"  class="text-sm" id="basic-url" aria-describedby="basic-addon3">
                </div>

                <div class="input-group mt-3 ">
                    <div class="input-group-prepend">
                        <span class="input-group-text text-sm"  style="width: 10rem" id="basic-addon3">langue</span>
                    </div>
                    <div class="input-group-prepend ">
                        <span class="input-group-text text-sm"  id="basic-addon3"><i class='bx bx-calendar'></i> </span>
                    </div>
                    <div class="list-group text-sm ml-4">
                        <label class="text-sm ">
                            <input class="form-check-input me-1 text-sm " name="langue[]" type="checkbox" value="francais">
                            francais
                        </label>
                        <label class="text-sm">
                            <input class="form-check-input me-1 text-sm" name="langue[]" type="checkbox" value="anglais">
                            anglais
                        </label>
                        <label class="text-sm">
                            <input class="form-check-input me-1" name="langue[]" type="checkbox" value="espagnole">
                            espagnole
                        </label>
                        <label class="text-sm">
                            <input class="form-check-input me-1" name="langue[]" type="checkbox" value="deutsch">
                            deutsch
                        </label>
                    </div>
                </div>


                <!--radio-->

                <!---->

                <div class="mt-3">
                    Role Medicale :
                    <hr class="mt-1 " style="width: 10rem;color: blue">
                </div>
                <!--lien de parenter-->
                <div class="input-group mt-3 ">
                    <div class="input-group-prepend">
                        <span class="input-group-text text-sm"  style="width: 10rem" id="basic-addon3">drois d'acc??e</span>
                    </div>
                    <div class="input-group-prepend ">
                        <span class="input-group-text text-sm"  id="basic-addon3"><i class='bx bx-calendar'></i> </span>
                    </div>
                    <div class="list-group text-sm ml-4">
                        <div class="form-check form-switch text-sm">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" name="Assistant_Medicale" value="1">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Assistant Medicale</label>
                        </div>
                        <div class="form-check form-switch text-sm">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" value="1" name="Assistant_Administratif">
                            <label class="form-check-label" for="flexSwitchCheckChecked">Assistant Administratif</label>
                        </div>
                        <div class="form-check form-switch text-sm">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDisabled" value="1" name="Benevole">
                            <label class="form-check-label" for="flexSwitchCheckDisabled">B??n??vole</label>
                        </div>
                    </div>
                </div>
                <!---->
            </div>

            <button type="submit" class="btn btn-secondary btn-lg" style="margin-top: 50px">save</button>
        </form>
    </div>
</x-app-layout>
