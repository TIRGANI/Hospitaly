
<x-app-layout>
    <x-slot name="header" >
        <script type="text/javascript">
            $(document).ready(function(){
                $(document).on('change','#specialitee',function (){
                    var sp_id = $(this).val();


                    var op=" ";
                    $.ajax({
                        url:"{{ route('patient.gestionrdv.index') }}",
                        type:"get",
                        data:{
                            'id':sp_id
                        },
                        dataType: 'json',
                        //recuperer data from contoller
                        success:function(data)
                        {
                            if (data.length==0)
                            {
                                op+='<option value="0" selected disabled>no medecin with this specialitée!!</option>';
                                $('.region').html(" ");
                                $('.region').append(op);
                            }
                            else {

                                op += '<option value="0" selected disabled>Choose region...</option>';
                                for (var i = 0; i < data.length; i++) {
                                    op += '<option value="' + data[i].region_ville + '">' + data[i].region_ville + "</option>";
                                }
                                //print op in region class
                                $('.region').html(" ");
                                $('.region').append(op);
                            }
                        },
                        error:function()
                        {

                        }
                    });
                    //-----------------------
                });

                $(document).on('change','.region',function () {
                   // var tr_id = $(this).val();
                    var rg_id = $('#region').val();
                    var sp_id = $('#specialitee').val();
                   // console.log(sp_id,rg_id,tr_id);
                    var op=" ";
                    $.ajax({
                        url:"{{ route('patient.viewmedecin.index') }}",
                        type:"get",
                        data:{
                           // 'tr_id':tr_id,
                            'rg_id':rg_id,
                            'sp_id':sp_id,
                        },
                        //recuperer data from contoller
                        success:function(data)
                        {

                            op+= "<thead class='bg-gray-50 max-w-6xl '> <tr> <th>Nom Complet</th> <th>Phone</th> <th></th><th>Adress</th>  <th></th> </tr> </thead>"
                            for(var i=0;i<data.length;i++)
                            {

                                op+="<tbody><tr class='alert' role='alert'><th scope='row'>"+data[i].name+"</th> <td>"+data[i].phone+"</td> <td></td> <td>"+data[i].region_ville+"</td> <td> <div style='float: right'><a href=/patient/viewmedecin/"+data[i].id+"> <button type='submit' class='btn btn-success btn-sm'>Consulter</button></a> </td> </tr> </tbody>"

                            }
                            //print op in region class
                            $('.table').html(" ");
                            $('.table').append(op);
                        },
                        error:function()
                        {
                            op+= "<thead class='bg-gray-50 '> <tr> <th>Nom Complet</th> <th>Phone</th> <th>Tarif</th><th>Adress</th>  <th></th> </tr> </thead>"
                            $('.table').html(" ");
                            $('.table').append(op);
                        }
                    });
                    //-----------------------

                });
            });
        </script>
        <div class="hidden sm:ml-10 sm:flex ">
            <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{__('Prendre un rendez-vous')}}
            </x-jet-nav-link>
        </div>
    </x-slot>

    <div class="container mt-10 max-w-6xl">
        <div class="row" >
            <div class="col" >
                <div class="input-group mb-3 " >
                    <div class="input-group-prepend" >
                        <label class="input-group-text " for="specialitee">Spécialitée</label>
                    </div>
                    <select class="custom-select" id="specialitee" name="specialitee">
                        <option  selected disabled>Choose Specialitée...</option>
                        @foreach($specialite as $sp)
                            <option value="{{$sp->id}}">{{$sp->nom}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col ">
                <div class="input-group mb-3 ">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="region">Région & ville</label>
                    </div>
                    <select class="custom-select region" id="region">
                        <option value="0" selected disabled>Choose...</option>
                    </select>
                </div>
            </div>
            <div class="col ">
                    <form  method="get" action="{{route('patient.gestionrdv.create')}}">
                        <div class="input-group mb-3 " >
                            <input style="width: 14rem;height: 36px;border-bottom-left-radius: 5px;border-top-left-radius:5px " placeholder="Nom Medecin" type="search" id="maRecherche" name="nom">
                        <button type='submit' class='btn btn-secondary btn-sm'>Recherche</button>
                        </div>
                    </form>
            </div>

        </div>
    </div>
    <!---->
    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg mt-4 ml-5 max-w-6xl" >
                <table class="table ">
                    <thead class='bg-gray-50 max-w-6xl '> <tr> <th>Nom Complet</th> <th>Phone</th> <th></th><th>Adress</th>  <th></th> </tr> </thead>
                    @foreach($medecin as $med)
                        <tbody><tr class='alert' role='alert'><th scope='row'>{{$med->name}}</th> <td>{{$med->phone}}</td> <td></td> <td>{{$med->region_ville}}</td> <td> <div style='float: right'><a href="{{route('patient.viewmedecin.show',$med->id)}}"><button type='submit' class='btn btn-success btn-sm'>Consulter</button></a></div> </td> </tr> </tbody>
                    @endforeach
                </table>
    </div>
    <!---->
</x-app-layout>
