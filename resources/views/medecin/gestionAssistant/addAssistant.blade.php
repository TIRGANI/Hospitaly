<x-app-layout>
    <x-slot name="header">
        <div class="hidden sm:ml-10 sm:flex ">
            <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{__('Gestion des Assitants')}}
            </x-jet-nav-link>
        </div>
    </x-slot>
    <div class="max-w-7xl mx-auto py-10  lg:px-8 ">
        <div  class="input-group mb-2">
            <a href="{{route("medecin.addassistant.create")}}"><button  class="btn btn-sm btn-primary"><i class="bx bx-plus-circle"></i> add Assistants</button> </a>
        </div>
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg " >
            <div class="col-md-12">
                <div class="table-wrap">
                    <table class="table ">
                        <thead class="bg-gray-50 ">
                        <tr>
                            <th>Nom Assistant</th>
                            <th>les taches </th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <input type="hidden" value="{{$rd=0}}">
                            @foreach($liste as $li)

                            <input type="hidden" value="{{$rd++}}" id="hi">
                            <tbody>
                            <tr class="alert" role="alert">

                                <th scope="row"> {{$li->name}}</th>
                                <td>
                                    <input type="hidden" value="{{$id=$li->id}}" id="identifiant">
                                        <div class="form-check form-switch text-sm">

                                            <input class="form-check-input" value="{{$li->id}} " @if($li->Getsion_RDV) checked   @endif type="checkbox" id="Getsion_RDV" name="Getsion_RDV" >
                                            <label class="form-check-label"  for="flexSwitchCheckDefault">Getsion_RDV</label>
                                        </div>
                                        <div class="form-check form-switch text-sm">
                                            <input class="form-check-input" value="{{$li->id}}" @if($li->Gestion_Calendrier) checked  @endif type="checkbox" id="Gestion_Calendrier" name="Gestion_Calendrier" >
                                            <label class="form-check-label" for="flexSwitchCheckDefault">Gestion_Calendrier</label>
                                            </div>
                                        <div class="form-check form-switch text-sm">
                                            <input class="form-check-input" value="{{$li->id}}" @if($li->personnaliser_ajonda) checked @endif type="checkbox" id="personnaliser_ajonda" name="personnaliser_ajonda">
                                            <label class="form-check-label" for="flexSwitchCheckDefault">personnaliser_ajonda</label>
                                        </div>

                                </td>
                                <td></td>
                                <td></td>
                                <td>
                                    <div style="float: right">
                                        <a href="{{route("medecin.modifierrole.edit",$li->id)}}"><button type="submit" class="btn btn-danger btn-sm">Supprimer</button></a>
                                        <a href="{{route("medecin.modifierrole.show",$li->id)}}"><button type="submit" class="btn btn-success btn-sm">Consulter Profile</button></a>
                                    </div>
                                </td>
                            </tr>
                            </tbody>

                        @endforeach
                    </table>
                    @if($rd==0)
                        <div class="card-title text-center">
                            vous avez aucun Assistant !!
                        </div>
                    @endif
                </div>
            </div>
        </div>

    </div>
    </div>
</x-app-layout>
<script>
    $(document).on('change','#Getsion_RDV',function () {
        var sp_id = $(this).val();
        var x = document.getElementById("Getsion_RDV").checked;
        if (x){x=1;}else {x=0;}

            //-----ajax
            $.ajax({
                url:"{{ route('medecin.modifierrole.index') }}",
                type:"get",
                data:{
                    id:sp_id,
                    role:'Getsion_RDV',
                    validation:x,
                },
                //recuperer data from contoller
                success:function(data)
                {
                    alert('le role Getsion_RDV bien modifier')
                },
                error:function()
                {
                    alert('Problem modifier');
                }
            });
            //--end ajax



    });
    $(document).on('change','#Gestion_Calendrier',function () {
        var sp_id = $(this).val();
        var x = document.getElementById("Gestion_Calendrier").checked;
        if (x){x=1;}else {x=0;}
        //-----ajax
        $.ajax({
            url:"{{ route('medecin.modifierrole.index') }}",
            type:"get",
            data:{
                id:sp_id,
                role:'Gestion_Calendrier',
                validation:x,
            },
            //recuperer data from contoller
            success:function(data)
            {
                alert('le role Gestion_Calendrier bien modifier')
            },
            error:function()
            {
                alert('Problem modifier');
            }
        });
        //--end ajax

    });
    $(document).on('change','#personnaliser_ajonda',function () {
        var sp_id = $(this).val();
        var x = document.getElementById("personnaliser_ajonda").checked;
        if (x){x=1;}else {x=0;}
        //-----ajax
        $.ajax({
            url:"{{ route('medecin.modifierrole.index') }}",
            type:"get",
            data:{
                id:sp_id,
                role:'personnaliser_ajonda',
                validation:x,
            },
            //recuperer data from contoller
            success:function(data)
            {
                alert('le role personnaliser_ajonda bien modifier')
            },
            error:function()
            {
                alert('Problem modifier');
            }
        });
        //--end ajax

    });

</script>

