
<x-app-layout>
    <x-slot name="header">
        <div class="hidden sm:ml-10 sm:flex ">
            <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{__('Liste Consultation des Patient')}}
            </x-jet-nav-link>
        </div>
    </x-slot>

    <div class="max-w-7xl mx-auto py-10  lg:px-8">

                <div class="input-group mb-6 " style="width: 25rem">
                    <select class="custom-select " id="type" name="type">
                        <option value="Nom" selected>Nom</option>
                        <option value="CIN">CIN</option>
                        <option value="start">date RDV</option>
                        <option value="phone">téléphone</option>
                    </select>

                    <input type="text" class="text-sm" id="CIN" name="CIN"  >
                    <div class="input-group-prepend">
                        <button type="button" class="btn btn-primary" onclick="f();" style="border-bottom-right-radius: 7px;border-top-right-radius: 7px">
                            <i class='bx bx-search' ></i>
                        </button>
                    </div>
                </div>

        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg " >

            <div class="col-md-12">
                <div class="table-wrap" id="tt" >
                    <table class="table " id="table">
                        <thead class="bg-gray-50 ">
                        <tr>
                            <th>Nom Complet</th>
                            <th>date RDV</th>
                            <th>phone</th>
                            <th>CIN</th>
                            <th></th>
                        </tr>
                        </thead>
                        <input type="hidden" value="{{$rd=0}}">

                        @foreach($events as $event)
                            <input type="hidden" value="{{$rd++}}">
                            <tbody class="hi" id="hid">
                            <tr id="alert" class="alert" role="alert" >
                                <th scope="row">{{$event->name}}</th>
                                <td>{{$event->start}}</td>
                                <td>{{$event->phone}}</td>
                                <td>{{$event->CIN}}</td>
                                <td>
                                    <div style="float: right">
                                        <button type="submit" class="btn btn-success btn-sm"><a href="{{route('medecin.Events.edit',$event->id)}}">Consulter</a></button>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        @endforeach
                    </table>
                    @if($rd==0)
                        <div class="card-title text-center">
                            aucune résultat !!
                        </div>
                    @endif
                </div>
            </div>
        </div>

    </div>
    </div>
</x-app-layout>
<script>
    function f()
    {
        var type = document.getElementById('type').value;
        var val=document.getElementById('CIN').value;

        if( val.replace(/\s+/, '').length ) {
            // alert(type+' '+val);
            //-----ajax
            var op="";
            $.ajax({
                url:"{{ route("medecin.recherch.index") }}",
                type:"get",
                data:{
                    type:type,
                    val:val,
                },
                //recuperer data from contoller
                success:function(data)
                {
                    if (data.length==0) {
                        document.getElementById("table").style.display = 'none';
                      op= ' <div class="card-title text-center">vous avez aucun Consultation !! </div>';
                        $('#tt').html(" ");
                        $('#tt').append(op);
                    }

                    if (data.length!=0)
                    {
                        console.log(data.length);
                        document.getElementById("table").style.display = 'none';
                        op= '<table class="table " id="table"><thead class="bg-gray-50 "><tr><th>Nom Complet</th> <th>date RDV</th> <th>phone</th> <th>CIN</th> <th></th> </tr> </thead>';
                        for (var i = 0; i < data.length; i++) {
                            op += '<tbody class="hi" id="hid"> <tr id="alert" class="alert" role="alert" > <th scope="row">' + data[i].name + '</th> <td>' + data[i].start + '</td> <td>' + data[i].phone + '</td> <td>' + data[i].CIN + '</td> <td> <div style="float: right"> <button type="submit" class="btn btn-success btn-sm"><a href="/medecin/Events/'+ data[i].id + '/edit">Consulter</a></button> </div> </td> </tr> </tbody> ';
                        }
                        op+='</table>';
                        $('#tt').html(" ");
                        $('#tt').append(op);
                    }


                },
                error:function()
                {
                    console.log('error');
                }
            });
            //--end ajax
        }
    }

</script>
