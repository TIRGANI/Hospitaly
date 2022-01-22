<x-app-layout>
    <x-slot name="header" >
        <div class="hidden sm:ml-10 sm:flex ">
            <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                Demander un RDV avec Dr.
                @foreach($medecin as $ma)
                    {{$ma->name}}
                @endforeach
            </x-jet-nav-link>
        </div>

    </x-slot>
<div class="shadow overflow-hidden border-b border-gray-200 " style="margin-top: 3rem; height: 120rem" >

    <div class="ml-4">
            <div class="container mt-10 shadow overflow-hidden border-b border-gray-200 text-sm max-w-5xl">
                    @csrf
                    <div class="flex flex-col">
                        <input type="hidden" name="id" id="id_med" value="@foreach($medecin as $ma)
                        {{$ma->id}}
                        @endforeach">
                        <input type="hidden"  id="name_med" name="name_med" value="@foreach($medecin as $ma)
                        {{$ma->name}}
                        @endforeach">
                        <input type="hidden"  id="tarif_med" name="tarif_med" value="@foreach($medecin as $ma)
                        {{$ma->tarif}}
                        @endforeach">
                        <input type="hidden"  id="adress_med" name="adress_med" value="@foreach($medecin as $ma)
                        {{$ma->tarif_med}}
                        @endforeach">
                        <input type="hidden"  id="region_ville" name="region_ville" value="@foreach($medecin as $ma)
                        {{$ma->region_ville}}
                        @endforeach">

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

                                <input type="text" required id="title" name="title" class="text-sm w-50" style="border-radius: 10px" aria-describedby="basic-addon3">
                            </div>
                            <div class="input-group mt-3 ">
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-sm" style="width: 12rem" id="basic-addon3">CIN</span>
                                </div>
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon3"><i class='bx bx-calendar'></i> </span>
                                </div>
                                <input type="text" required id="CIN" name="CIN" class="text-sm w-50" style="border-radius: 10px"  aria-describedby="basic-addon3">
                            </div>
                            <div class="input-group mt-3">
                                <div class="input-group-prepend ">
                                    <span class="input-group-text text-sm "  style="width: 12rem" >date de naissence</span>
                                </div>
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-sm" id="basic-addon3"><i class='bx bx-calendar'></i> </span>
                                </div>
                                <input type="date"  id="date_naissence" name="date_naissence" style="border-radius: 10px" class="text-sm w-50" aria-describedby="basic-addon3">
                            </div>
                        <div class="input-group mt-3 ">
                            <div class="input-group-prepend">
                                <span class="input-group-text text-sm"  style="width: 12rem" >profession</span>
                            </div>
                            <div class="input-group-prepend">
                                <span class="input-group-text text-sm" id="basic-addon3"><i class='bx bx-calendar'></i> </span>
                            </div>
                            <input type="text"  id="profession" name="profession" style="border-radius: 10px"  class="text-sm w-50" aria-describedby="basic-addon3">
                        </div>
                            <div class="input-group mt-3 ">
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-sm"  style="width: 12rem">Adresse</span>
                                </div>
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-sm" id="basic-addon3"><i class='bx bx-calendar'></i> </span>
                                </div>
                                <input type="text"  id="Adresse" name="Adresse" style="border-radius: 10px" class="text-sm w-50" aria-describedby="basic-addon3">
                            </div>
                            <div class="input-group mt-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-sm"  style="width: 12rem">phone</span>
                                </div>
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-sm"  id="basic-addon3"><i class='bx bx-calendar'></i> </span>
                                </div>
                                <input type="tel" required id="phone" name="phone" style="border-radius: 10px" placeholder=" Format : 0612345678" class="text-sm w-50"  aria-describedby="basic-addon3">
                            </div>
                            <div class="input-group mt-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-sm"  style="width: 12rem" >email</span>
                                </div>
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-sm" ><i class='bx bx-calendar'></i> </span>
                                </div>
                                <input type="email"  id="email" name="email" style="border-radius: 10px"  class="text-sm w-50" aria-describedby="basic-addon3">
                            </div>
                            <div class="input-group mt-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-sm"  style="width: 12rem">Caisse Assurance sociale </span>
                                </div>
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-sm"  id="basic-addon3"><i class='bx bx-calendar'></i> </span>
                                </div>
                                <input type="text"  id="Caisse_Assurance_sociale" name="Caisse_Assurance_sociale" style="border-radius: 10px"  class="text-sm"  aria-describedby="basic-addon3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-sm"  style="border-radius: 5px" id="basic-addon3">N</span>
                                </div>
                                <input type="text"  id="Caisse_Assurance_sociale_N" name="Caisse_Assurance_sociale_N" style="border-radius: 10px"  class="text-sm"  aria-describedby="basic-addon3">
                            </div>

                            <div class="input-group mt-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-sm"  style="width: 12rem" id="basic-addon3">Mutuelle</span>
                                </div>
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-sm"  id="basic-addon3"><i class='bx bx-calendar'></i> </span>
                                </div>
                                <input type="text"  id="Mutuelle" name="Mutuelle" style="border-radius: 10px"  class="text-sm"  aria-describedby="basic-addon3">

                                <div class="input-group-prepend">
                                    <span class="input-group-text text-sm"  style="border-radius: 5px" id="basic-addon3">N</span>
                                </div>
                                <input type="text"  id="Mutuelle_N" name="Mutuelle_N" style="border-radius: 10px"  class="text-sm" id="basic-url" aria-describedby="basic-addon3">
                            </div>
                            <div class="input-group mt-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-sm"  style="width: 12rem" id="basic-addon3">Motifs de consultation</span>
                                </div>
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-sm"  id="basic-addon3"><i class='bx bx-calendar'></i> </span>
                                </div>

                                <div class="form-floating ">
                                    <textarea class="text-sm" required   id="Motifs_de_consultation" name="Motifs_de_consultation" style="border-radius: 10px;height: 12rem;width: 35rem" ></textarea>
                                </div>

                            </div>
                            <div class="input-group mt-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-sm"  style="width: 12rem" id="basic-addon3">Types de consultation </span>
                                </div>
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-sm"  id="basic-addon3"><i class='bx bx-calendar'></i> </span>
                                </div>

                                <select required id="Types_de_consultation" name="Types_de_consultation"  style="border-radius: 10px"  class="text-sm w-50" >
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
                                    <input class="form-check-input text-sm w-4" type="radio" name="Allergie" id="Allergie" value="Oui">
                                    <label class="form-check-label text-sm " for="inlineRadio1">Oui</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input text-sm w-4" type="radio" name="Allergie" id="Allergie" value="Non">
                                    <label class="form-check-label text-sm" for="inlineRadio2">Non</label>
                                </div>
                            </div>
                            <!---->
                            <div class="input-group mt-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-sm"  style="width: 12rem" id="basic-addon3">Antécédent médicaux </span>
                                </div>
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-sm "  id="basic-addon3"><i class='bx bx-calendar'></i> </span>
                                </div>
                                <input type="text"  id="Antecedent_medicaux" name="Antécédent_médicaux" style="border-radius: 10px"  class="text-sm w-50"  aria-describedby="basic-addon3">
                            </div>
                        <div class="input-group mt-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text text-sm"  style="width: 12rem" id="basic-addon3">Provenance Médecin traitant</span>
                            </div>
                            <div class="input-group-prepend">
                                <span class="input-group-text text-sm"  id="basic-addon3"><i class='bx bx-calendar'></i> </span>
                            </div>
                            <input type="text"  id="Provenance_Medecin_traitant" name="Provenance_Médecin_traitant" style="border-radius: 10px"  class="text-sm w-50"  aria-describedby="basic-addon3">
                        </div>


                        <div class="mt-3">
                        Personne à prévenir :
                        <hr class="mt-1 " style="width: 12rem;color: blue">
                        </div>
                        <!--lien de parenter-->
                        <div class="input-group mt-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text text-sm"  style="width: 12rem" id="basic-addon3">•	Nom et prénom</span>
                            </div>
                            <div class="input-group-prepend">
                                <span class="input-group-text text-sm"  id="basic-addon3"><i class='bx bx-calendar'></i> </span>
                            </div>
                            <input type="text"  id="Provenance_Medecin_traitant" name="Provenance_Medecin_traitant" style="border-radius: 10px"  class="text-sm w-50" aria-describedby="basic-addon3">
                        </div>
                        <div class="input-group mt-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text text-sm"  style="width: 12rem" id="basic-addon3">•	Lien de parenté</span>
                            </div>
                            <div class="input-group-prepend">
                                <span class="input-group-text text-sm"  id="basic-addon3"><i class='bx bx-calendar'></i> </span>
                            </div>
                            <input type="text"  id="Lien_parenter" name="Lien_parenter" style="border-radius: 10px"  class="text-sm w-50" aria-describedby="basic-addon3">
                        </div>
                        <div class="input-group mt-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text text-sm"  style="width: 12rem" id="basic-addon3">•	Adresse </span>
                            </div>
                            <div class="input-group-prepend">
                                <span class="input-group-text text-sm"  id="basic-addon3"><i class='bx bx-calendar'></i> </span>
                            </div>
                            <input type="text"  id="Adresse_parenter" name="Adresse_parenter" style="border-radius: 10px"  class="text-sm w-50"  aria-describedby="basic-addon3">
                        </div>
                        <div class="input-group mt-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text text-sm"  style="width: 12rem" id="basic-addon3">•	Tél</span>
                            </div>
                            <div class="input-group-prepend">
                                <span class="input-group-text text-sm"  id="basic-addon3"><i class='bx bx-calendar'></i> </span>
                            </div>
                            <input type="text"  id="tel_parenter" name="tel_parenter" style="border-radius: 10px"  class="text-sm w-50"  aria-describedby="basic-addon3">
                        </div>
                        <!---->
                    </div>



             <div>
               <button type="button" class="btn btn-primary btn-lg text-sm  mt-4 mb-2" style="float: right" onclick="f();"><i class='bx bx-calendar mr-2'></i>préciser la date du rendez-vous</button>
             </div>
                 <div>
                     <a href="#" class="arrow-container" id="arrcontainer">
                         <div class="arrow"></div>
                         <div class="arrow"></div>
                         <div class="arrow"></div>
                     </a>
                 </div>
            <div class="container mt-10 shadow overflow-hidden border-b border-gray-200 text-sm max-w-6xl">
                @if(\Session::has('success'))
                    <div class="alert alert-success">
                        <p>{{\Session::get('success')}}</p>
                    </div>
                @endif
                <div class="calen" id="calen">

                    <div class="container">
                        <div class="progress w-50 mb-6" style="margin-top: 1rem; margin-left: 50%; ">
                            <div class="progress-bar bg-success" role="progressbar" style=" width: 50%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">date déja programmee</div>
                            <div class="progress-bar " role="progressbar" style="background-color: #F1948A  ;width: 50%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">jour non disponibilitée</div>
                        </div>
                        <div id="calendar" ></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
    <script>
        let d1 = document.getElementById("calen");
        function f(){
            var title=document.getElementById('title').value;
            var CIN=document.getElementById('CIN').value;
            var phone=document.getElementById('phone').value;
            var Motifs_de_consultation=document.getElementById('Motifs_de_consultation').value;
            var Types_de_consultation=document.getElementById('Types_de_consultation').value;
            if ((title.replace(/\s+/, '').length)&&(CIN.replace(/\s+/, '').length)&&(phone.replace(/\s+/, '').length)&&(Motifs_de_consultation.replace(/\s+/, '').length)&&(Types_de_consultation.replace(/\s+/, '').length))
            {
                if(getComputedStyle(d1).display != "none"){

                    d1.style.display = "none";
                } else {
                    document.getElementById('arrcontainer').style.display = "none";
                    d1.style.display = "block";

                }
            }
            else {
                alert('merci de remplire tout les chams obligatoire !!');
            }

        }
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var id_med = document.getElementById("id_med").value;

            onload = function () {
                myFunction()
            };
//retourn start et end horairae
            function myFunction() {

                $.ajax({
                    url: "{{ route('patient.gestcal.index') }}",
                    type: "get",
                    data: {
                        id_med: id_med,
                    },
                    success: function (data) {
                        let  star='';
                        let end ='';
                        if (data[0].start_horaire==null || data[0].end_horaire==null)
                        {
                            star='9:00';
                            end ='19:00';
                        }
                        else {
                            star=data[0].start_horaire;
                            end =data[0].end_horaire+'00:30';

                        }
                        var calendar = $('#calendar').fullCalendar({

                            header:{
                                left:'prev,next today',
                                center:'title',
                                right:'agendaWeek,agendaDay'
                            },
                            defaultView: 'agendaWeek',
                            locale: 'fr',
                            minTime: star,
                            maxTime: end,
                            //0-> dimench
                            hiddenDays: [ 6, 0 ],
                            events: "{{ route('patient.showcalendar.show',$id) }}",
                            selectable: true,
                            selectHelper: true,

                            select:function(start, end, allDay)
                            {

                                // var va ='true';
    //-------------------------la ligne de confirmation dajouter un nouveaux rebndez vous !!!

                              //      var title = window.confirm('confirmer votre nouveau rendez vous !');
                                var id_med= document.getElementById("id_med").value;
                                var name_med= document.getElementById("name_med").value;
                                var tarif_med= document.getElementById("tarif_med").value;
                                var adress_med= document.getElementById("adress_med").value;
                                var region_ville= document.getElementById("region_ville").value;
                                let date = new Date();
                                var dateStringWithTime = moment(date).format('YYYY-MM-DD HH:MM:SS');

                                // alert(dateStringWithTime);
                                var start = $.fullCalendar.formatDate(start, 'Y-MM-DD HH:mm:ss');
                                var end = $.fullCalendar.formatDate(end, 'Y-MM-DD HH:mm:ss');

                                //retourner la liste des jour de non disponibilitéedepuis la base de donner en utilisant ajax
                                $.ajax({
                                    url:"{{ route('patient.routurnjnd.index') }}",
                                    type:"get",
                                    data:{
                                        id_med: id_med,
                                    },
                                    success:function(data)
                                    {
//retourner la liste des jour non disponible est traiter chaque jour pour renvoiyer un message de non disponibilitée du médecin
                                       if (data.length!=0)
                                       {
                                            let nb=0;
                                               for (let i = 0; i < data.length; i++) {
                                                   if (start >= data[i].start && start <= data[i].end) {
                                                           nb++;
                                                           break;
                                                   }
                                               }
                                           if (nb == 1) {
                                               alert("le médecin n'est pas disponible dans cette date !!!");

                                           } else if (nb == 0) {

                                                       //----------------------

                                                       $.ajax({
                                                           url: "{{ route('patient.controllerdaterdv.index') }}",
                                                           type: "get",
                                                           data: {
                                                               id_med: id_med,
                                                           },
                                                           success: function (dataa) {
                                                               let cpt = 0;
                                                               let i = 0;
                                                               for (i = 0; i < dataa.length; i++) {
                                                                   if (start == dataa[i].start) {
                                                                       cpt++;
                                                                       break;
                                                                   }
                                                               }
//  traiter la liste des rdv validée est afficher un message déja programmee
                                                          /*    if (cpt == 1) {
                                                                   alert("cette date est déja programmee par un autre patient !!!");
                                                               } else if (cpt == 0) {*/
//  si la date est libre tu peux prendre un rendez-vous

                                                                   if (start >= dateStringWithTime) {
                                                                       var title = window.confirm('confirmer votre nouveau rendez vous !');
                                                                   if (title) {

//  renvoiyer le formulaire pour enregistrer a la base de donnée
                                                                           var ev = document.getElementById('title').value;
                                                                           var CIN = document.getElementById('CIN').value;
                                                                           var phone = document.getElementById('phone').value;
                                                                           var date_naissence = document.getElementById('date_naissence').value;
                                                                           var profession = document.getElementById('profession').value;
                                                                           var Adresse = document.getElementById('Adresse').value;
                                                                           var email = document.getElementById('email').value;
                                                                           var Caisse_Assurance_sociale = document.getElementById('Caisse_Assurance_sociale').value;
                                                                           var Caisse_Assurance_sociale_N = document.getElementById('Caisse_Assurance_sociale_N').value;
                                                                           var Mutuelle = document.getElementById('Mutuelle').value;
                                                                           var Mutuelle_N = document.getElementById('Mutuelle_N').value;
                                                                           var Motifs_de_consultation = document.getElementById('Motifs_de_consultation').value;
                                                                           var Types_de_consultation = document.getElementById('Types_de_consultation').value;
                                                                           var Allergie = document.getElementById('Allergie').value;
                                                                           var Antecedent_medicaux = document.getElementById('Antecedent_medicaux').value;
                                                                           var Provenance_Medecin_traitant = document.getElementById('Provenance_Medecin_traitant').value;
                                                                           var Lien_parenter = document.getElementById('Lien_parenter').value;
                                                                           var Adresse_parenter = document.getElementById('Adresse_parenter').value;

                                                                           $.ajax({
                                                                               url: "{{ route('patient.espacepatient.store') }}",
                                                                               type: "POST",
                                                                               data: {
                                                                                   region_ville: region_ville,
                                                                                   name_med: name_med,
                                                                                   id_med: id_med,
                                                                                   title: ev,
                                                                                   start: start,
                                                                                   end: end,
                                                                                   CIN: CIN,
                                                                                   phone: phone,
                                                                                   date_naissence: date_naissence,
                                                                                   profession: profession,
                                                                                   Adresse: Adresse,
                                                                                   email: email,
                                                                                   Caisse_Assurance_sociale: Caisse_Assurance_sociale,
                                                                                   Caisse_Assurance_sociale_N: Caisse_Assurance_sociale_N,
                                                                                   Mutuelle: Mutuelle,
                                                                                   Mutuelle_N: Mutuelle_N,
                                                                                   Motifs_de_consultation: Motifs_de_consultation,
                                                                                   Types_de_consultation: Types_de_consultation,
                                                                                   Allergie: Allergie,
                                                                                   Antecedent_medicaux: Antecedent_medicaux,
                                                                                   Provenance_Medecin_traitant: Provenance_Medecin_traitant,
                                                                                   Lien_parenter: Lien_parenter,
                                                                                   Adresse_parenter: Adresse_parenter,
                                                                                   //changer le couleur de levenement  pas le RDV lore de creataion
                                                                                   color: '#10AFC8',
                                                                                   type: 'add'
                                                                               },
                                                                               success: function (data) {
                                                                                   calendar.fullCalendar('refetchEvents');
                                                                                   alert("votre nouveau rendez-vous a été crée avec succès");
                                                                                   window.location = "{{ route('patient.showcalendar.create') }}";
                                                                               }
                                                                           })
// controler le jour avous d'haujourdhuis
                                                                       }
                                                               }
                                                                   else alert("vous n'avez pas le droit de créer un rendez vous avous d'haujourdhuis !!!");
                                                               /*}*/

                                                           }
                                                       });
                                                       //-----------------if

                                                   }
                                       }

                                    }
                                })
                            },
                        });
                    }
                });
            }
        });
    </script>
</x-app-layout>
