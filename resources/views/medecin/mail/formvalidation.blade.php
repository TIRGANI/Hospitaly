@component('mail::message')
    @foreach ($data as $da)

    # Bonjour M.{{$da['title']}}

    Votre demende de rendez-vous a été bien accepter.
    Avec le medecin :{{$da['name']}}

    la date : {{$da['start']}}
    le lieu : {{$da['adresse']}}

    Thanks,
    {{ config('app.name') }}
    @endforeach
@endcomponent
