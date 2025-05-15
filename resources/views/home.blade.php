@extends('layouts.app')

@section('title', 'Welkom bij Jungle Tuinen')

@section('content')
    @include('partials.banner', [
                'title' => 'Ontdek de geheimen van jouw eigen jungletuin',
                'subtitle' => 'Een groene oase vol avontuur, rust en natuurlijke schoonheid',
                'description' => 'Creëer jouw eigen jungletuin vol weelderige planten, tropisch groen en rustgevende waterpartijen. Ontdek hoe Jungle Tuinen jouw tuin omtovert tot een exotisch paradijs – uniek, natuurlijk en verrassend.',
                'buttonUrl' => '/eigen-jungletuin',
                'buttonText' => 'JE EIGEN TUIN',
            ])
    @include('partials.header')
    @include('partials.footer')
@endsection
