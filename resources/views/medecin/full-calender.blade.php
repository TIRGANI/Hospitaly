<x-app-layout>
    <x-slot name="header" >
        <div class="progress w-50 " style="float: right ;margin-top: 1rem">
            <div class="progress-bar "  role="progressbar" style="width: 25% ; background-color: #C8B410" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">RDV Non Validée</div>
            <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">RDV Validée</div>
            <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">Event Medecin</div>
            <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">jour non disponibilitée</div>
        </div>
        <div class="hidden sm:ml-10 sm:flex ">
            <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{__('Calendrier')}}
            </x-jet-nav-link>
        </div>
    </x-slot>

        <div class="max-w-2xl mx-auto py-10 sm:px-6 lg:px-8 ">
            <div class="container">
                @if(\Session::has('success'))
                    <div class="alert alert-success">
                        <p>{{\Session::get('success')}}</p>
                    </div>
                @endif
                <div id="calendar"></div>
            </div>
        </div>


<script>

    $(document).ready(function () {

        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')

            }
        });
        onload = function() {myFunction()};
        function myFunction()
        {
            $.ajax({
                url:"{{ route('medecin.gestcal.index') }}",
                type:"get",
                data: {
                    tim:'true',
                },
                success:function(data)
                {
                  /*  mint=data[0].start_horaire;
                    maxt=data[0].end_horaire;*/
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
                 defaultView: 'agendaWeek',
                //editer les colones du calendrier
                editable:true,
                //languages
                locale: 'fr',
                minTime: star,
                maxTime: end,
                header:{
                    left:'prev,next today',
                    center:'title',
                    right:'month,agendaWeek,agendaDay,list',

                },
                //range du temp

                //les jour de la semeine a  afficher
                //hiddenDays: [ 0, 6 ],
                events:"{{ route('medecin.calender.index') }}",
                // nowIndicator: true,
                //eventColor: 'blue',
                selectable:true,
                selectHelper: true,
                select:function(start, end, allDay)
                {
                    var title = window.prompt('Entrer votre nouveau render-vous :',title);
                    let date = new Date();
                    var dateStringWithTime = moment(date).format('YYYY-MM-DD HH:MM:SS');
                    var start = $.fullCalendar.formatDate(start, 'Y-MM-DD HH:mm:ss');
                    var end = $.fullCalendar.formatDate(end, 'Y-MM-DD HH:mm:ss');
                    if (title)
                    {
                        if (start >= dateStringWithTime)
                        {
                            $.ajax({
                                url:"{{ route('medecin.calender.store') }}",
                                type:"POST",
                                data:{
                                    title: title,
                                    start: start,
                                    end: end,
                                    //changer le couleur de levenement  pas le RDV lore de creataion
                                    color :'#10AFC8',
                                    type: 'add'
                                },
                                success:function(data)
                                {
                                    calendar.fullCalendar('refetchEvents');
                                    alert("votre nouveau évenement a été crée avec succès");
                                }
                            })
                        }
                        else  alert("vous n'avez pas le droit de créer un rendez vous avous d'haujourdhuis !!!");
                    }
                },
                editable:true,
                eventDrop: function(event, delta)
                {
                    var start = $.fullCalendar.formatDate(event.start, 'Y-MM-DD HH:mm:ss');
                    var end = $.fullCalendar.formatDate(event.end, 'Y-MM-DD HH:mm:ss');
                    var title = event.title;
                    var id = event.id;
                    $.ajax({
                        url:"{{ route('medecin.calender.store') }}",
                        type:"POST",
                        data:{
                            title: title,
                            start: start,
                            end: end,
                            id: id,
                            type: 'update'
                        },
                        success:function(response)
                        {
                            calendar.fullCalendar('refetchEvents');

                            alert("votre évenement a été modifier avec succès");
                        }
                    })
                },

                eventClick:function(event)
                {
                    if(confirm("Êtes-vous sûr de vouloir le supprimer ?"))
                    {
                        var id = event.id;
                        $.ajax({
                            url:"{{ route('medecin.calender.store') }}",
                            type:"POST",
                            data:{
                                id:id,
                                type:"delete"
                            },
                            success:function(response)
                            {
                                calendar.fullCalendar('refetchEvents');
                                alert("votre évenement a été supprimer avec succès");
                            }
                        })
                    }
                }
            });

                }
            });
        }

           });



</script>

</x-app-layout>

