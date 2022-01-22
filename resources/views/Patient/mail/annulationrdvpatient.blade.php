@component('mail::message')
    # Bonjour docteur
    @foreach ($data as $da)

        Le RDV de votre patient M/Mme {{$da['title']}}
        prévu le {{$da['start']}} a été annuler


        le lieu : {{$da['adresse']}}

        Thanks,
        {{ config('app.name') }}
    @endforeach
@endcomponent

