@component('mail::message')
    # Bonjour
    @foreach ($data as $da)

        Votre RDV avec le medecin
        prévu le {{$da['start']}} a été annuler


        le lieu :Marrakech

        Thanks,
        {{ config('app.name') }}
    @endforeach
@endcomponent
