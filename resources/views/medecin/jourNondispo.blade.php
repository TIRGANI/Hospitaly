<x-app-layout>
    <x-slot name="header">
        <div class="hidden sm:ml-10 sm:flex ">
            <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{__('Personnaliser agenda et créneaux')}}
            </x-jet-nav-link>
        </div>
    </x-slot>
    <script>
        window.onload = (event) => {
            document.getElementById("cont").style.display = "block";
            document.getElementById("jour").style.display = "block";
            document.getElementById("hiraire").style.display = "none";
            document.getElementById("duree").style.display = "none";
            document.getElementById("jour_fer").style.display = "none";
        };
        function disponi()
        {
            document.getElementById("cont").style.display = "block";
            document.getElementById("jour").style.display = "block";
            document.getElementById("hiraire").style.display = "none";
            document.getElementById("duree").style.display = "none";
            document.getElementById("jour_fer").style.display = "none";
        }
        function horaire()
        {
            document.getElementById("cont").style.display = "block";
            document.getElementById("hiraire").style.display = "block";
            document.getElementById("jour").style.display = "none";
            document.getElementById("duree").style.display = "none";
            document.getElementById("jour_fer").style.display = "none";
        }
        function consultation()
        {
            document.getElementById("cont").style.display = "block";
            document.getElementById("duree").style.display = "block";
            document.getElementById("hiraire").style.display = "none";
            document.getElementById("jour").style.display = "none";
            document.getElementById("jour_fer").style.display = "none";
        }
        function list_ferier()
        {
            document.getElementById("cont").style.display = "block";
            document.getElementById("jour_fer").style.display = "block";
            document.getElementById("duree").style.display = "none";
            document.getElementById("hiraire").style.display = "none";
            document.getElementById("jour").style.display = "none";

        }
    </script>
    <div>
            <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="bod">
            <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

            <nav class="menu" id="men">
                <input type="checkbox" href="#"  class="menu-open" name="menu-open" id="menu-open"/>
                <label class="menu-open-button" for="menu-open">
                    <span class="hamburger hamburger-1"></span>
                    <span class="hamburger hamburger-2"></span>
                    <span class="hamburger hamburger-3"></span>
                </label>

                <a href="#" onclick="disponi();" class="menu-item " id="un" style="text-decoration: none;"> <div class="mt-4 text-sm"><strong>non disoponibilité</strong></div> </a>
                <a href="#" onclick="horaire();" class="menu-item " id="de" style="text-decoration: none;"> <div class=" text-sm" style="margin-top: 35px"><strong> horaire</strong></div> </a>
                <a href="#" onclick="consultation();" class="menu-item " id="tr" style="text-decoration: none;"> <div class="mt-4 text-sm"><strong>durée de consultation</strong></div> </a>
                <a href="#" onclick="list_ferier();" class="menu-item " id="qu" style="text-decoration: none;"> <div class="mt-4 text-sm"><strong>view liste jour férié</strong></div> </a>
                <a href="#"  class="menu-item " id="cin"><div class="mt-1"> <i class="fa fa-cog mt-4"></i></div> </a>

            </nav>


            <!-- filters -->
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
                <defs>
                    <filter id="shadowed-goo">

                        <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10" />
                        <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
                        <feGaussianBlur in="goo" stdDeviation="3" result="shadow" />
                        <feColorMatrix in="shadow" mode="matrix" values="0 0 0 0 0  0 0 0 0 0  0 0 0 0 0  0 0 0 1 -0.2" result="shadow" />
                        <feOffset in="shadow" dx="1" dy="1" result="shadow" />
                        <feBlend in2="shadow" in="goo" result="goo" />
                        <feBlend in2="goo" in="SourceGraphic" result="mix" />
                    </filter>
                    <filter id="goo">
                        <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10" />
                        <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
                        <feBlend in2="goo" in="SourceGraphic" result="mix" />
                    </filter>
                </defs>
            </svg>
        </div>
             <!-- This example requires Tailwind CSS v2.0+ -->

                <form action="{{route('medecin.personaliser.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div id="cont" class="shadow overflow-hidden border-b border-gray-200  sm:rounded-lg pt-6 pb-4 pl-5 pt-8" style="height: 40rem">
                            <div id="jour" class="container">
                                <div class="row">
                                    <div class="col">
                                    <!--jour non dispo-->
                                        <div class="ml-4">
                                            les jour de Non disponibilitée
                                        </div>
                                    <div class="input-group mt-10 ml-4 mr-3 sm:max-w-2xl ">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"  style="width: 10rem" id="basic-addon3">Start</span>
                                        </div>

                                        <input type="date"  name="StartND" style="width: 20rem"  class="text-lg" id="basic-url" aria-describedby="basic-addon3">
                                    </div>
                                    <div class="input-group mt-10 ml-4 mr-3 sm:max-w-2xl">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"  style="width: 10rem" id="basic-addon3">End</span>
                                        </div>

                                        <input type="date"  name="EndND" style="width: 20rem"  class="text-lg" id="basic-url" aria-describedby="basic-addon3">
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-sm" style="margin-top: 50px; float: right;margin-right: 2rem">save</button>
                                    </div>
                                    <!------------------------------->
                                    <div class="col">
                                            vos Jours de non disponibilitée
                                            <table class="table table-striped">
                                                <thead>
                                                <tr>
                                                    <th scope="col">date debit</th>
                                                    <th scope="col">date fin</th>
                                                    <th></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($events as $event)
                                                <tr>
                                                    <td>{{$event->start}}</td>
                                                    <td>{{$event->end}}</td>
                                                    <td><a href="{{route('medecin.personaliser.show',$event->id)}}"> <button type="button" class="btn btn-danger btn-sm" style="float: right">supprimer</button></a></td>
                                                </tr>
                                                @endforeach
                                                </tbody>
                                            </table>

                                     </div>
                                <!------------------------------->
                                </div>
                            </div>
                            <div class="container" id="hiraire">
                                <div class="row">
                                    <div class="col">
                                        <div class="ml-4">
                                            modifier votre horaire
                                        </div>
                                        <!--start_horaire-->
                                        <div class="input-group mt-10 ml-4 mr-3 sm:max-w-2xl">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"  style="width: 10rem" id="basic-addon3">start time horaire</span>
                                            </div>

                                            <input type="time"  min="08:00" max="18:00"  name="start_horaire" style="width: 20rem"  class="text-lg" id="basic-url" aria-describedby="basic-addon3">
                                        </div>
                                        <!--end_horaire-->
                                        <div class="input-group mt-10 ml-4 mr-3 sm:max-w-2xl">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"  style="width: 10rem" id="basic-addon3">end time horaire</span>
                                            </div>

                                            <input type="time"  min="08:00" max="18:00"  name="end_horaire" style="width: 20rem"  class="text-lg" id="basic-url" aria-describedby="basic-addon3">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-sm" style="margin-top: 50px">save</button>
                                    </div>

                                    <!------------------------------->
                                    <div class="col">
                                        votre horaire
                                        <table class="table table-striped">
                                            <thead>
                                            <tr>
                                                <th scope="col">heur de début horaire</th>
                                                <th scope="col">heur de fin horaire</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($horaire as $event)
                                                <tr>
                                                    <td>{{$event->start_horaire}}</td>
                                                    <td>{{$event->end_horaire}}</td>
                                                   <td></td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>

                                    </div>
                                    <!------------------------------->
                                </div>
                            </div>
                            <div class="container" id="duree">
                                <div class="row">
                                    <div class="col">
                                        <div class="ml-4">
                                           modifier votre durée de consultation
                                        </div>
                                    <!--durée-->
                                        <div class="input-group mt-10 ml-4 mr-3 sm:max-w-2xl">
                                            <div class="input-group-prepend ">
                                                <span class="input-group-text "  style="width: 12rem" id="basic-addon3"> Durée Consultation</span>
                                            </div>
                                            <input type="text" name="Duree"  style="width: 10rem"  class="text-lg">
                                            <div class="input-group-append">
                                                <span class="input-group-text">minute</span>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-sm" style="margin-top: 50px">save</button>
                                    <!------------------------------->
                                    </div>
                                        <div class="col">
                                            votre durée de consultation
                                            <table class="table table-striped">
                                                <thead>
                                                <tr>
                                                    <th scope="col">durée de consultation</th>
                                                    <th ></th>
                                                    <th></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($horaire as $event)
                                                    <tr>
                                                        @if($event->duree)
                                                        <td>{{$event->duree}} Minute</td>
                                                        @else
                                                            <td>--</td>
                                                        @endif
                                                        <td></td>
                                                            <td></td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>

                                        </div>
                                        <!------------------------------->
                                </div>

                            </div>
                                <!---->
                            <div id="jour_fer">
                                Les Jours fériés 2021
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th scope="col">date</th>
                                        <th scope="col">Noms de fêtes</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>01.01.2021</td>
                                        <td>Nouvel an</td>
                                    </tr>
                                    <tr>
                                        <td>30.07.2021</td>
                                        <td>Fête du Trône</td>
                                    </tr>
                                    <tr>
                                        <td>20.08.2021</td>
                                        <td>La révolution du Roi et du Peuple</td>
                                    </tr>
                                    <tr>
                                        <td>19.10.2021</td>
                                        <td>Aid Al Mawlid Annabawi</td>
                                    </tr>
                                    <tr>
                                        <td>18.11.2021</td>
                                        <td>Fête de l'Indépendance</td>
                                    </tr>
                                    </tbody>
                                </table>
                                * Jours variables selon le Ministère des Habous et des affaires islamiques marocain
                            </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

</x-app-layout>
