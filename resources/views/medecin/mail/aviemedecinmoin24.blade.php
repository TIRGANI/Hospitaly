@component('mail::message')
bonjour Dr
@foreach($data as $da)
    vous avez un rendez-vous avec le patient M.{{$da['title']}}<br>
    le :{{$da['start']}}
    il vous reste moins de 24h avant le rendez-vous
@endforeach
@endcomponent
