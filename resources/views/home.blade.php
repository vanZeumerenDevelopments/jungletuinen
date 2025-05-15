@extends('layouts.app')

@section('title', 'Welkom bij Jungle Tuinen')

@section('content')
    @include('partials.banner', [
        'title' => 'Ontdek de geheimen van jouw eigen jungletuin',
        'subtitle' => 'Een groene oase vol avontuur, rust en natuurlijke schoonheid',
        'description' => 'Droom jij van een tuin vol tropisch groen, weelderige planten en rustgevende waterpartijen? Ontdek hoe Jungle Tuinen jou helpt bij het creëren van een unieke jungletuin – een plek waar natuur, ontspanning en beleving samenkomen. Laat je inspireren en begin vandaag met het omtoveren van jouw buitenruimte tot een exotisch paradijs.',
        'buttonUrl' => '/eigen-jungletuin',
        'buttonText' => 'JE EIGEN TUIN',
    ])

    @include('partials.header')

    @include('partials.footer', [
        'title' => 'Van droom naar werkelijkheid: jouw jungletuin begint hier',
        'description1' => 'Bij Jungle Tuinen geloven we dat iedere tuin het potentieel heeft om een oase van rust en avontuur te worden. Wij bieden inspiratie, advies en praktische tips om van jouw tuin een echte jungletuin te maken – vol tropische planten, natuurlijke elementen en verrassende details.',
        'description2' => 'Of je nu een kleine stadstuin hebt of een ruime achtertuin, met onze expertise en voorbeelden maak je eenvoudig een groene plek waar je elke dag opnieuw kunt genieten van natuur, rust en schoonheid. Neem contact op voor persoonlijk advies of blader door onze ideeënpagina’s.',
        'buttonUrl' => '/contact',
        'buttonText' => 'Contact Ons',
    ])
@endsection
