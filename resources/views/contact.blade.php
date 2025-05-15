@extends('layouts.app')

@section('title', 'Contact – Jungle Tuinen')

@section('meta')
    <meta name="description" content="Neem contact op met Jungle Tuinen voor advies over jouw jungletuin. Bel ons op 088-123324 of mail naar test@jungletuinen.nl. Volg ons op Facebook en Instagram voor inspiratie." />
@endsection

@section('content')
    @include('partials.banner', [
        'title' => 'Contact met Jungle Tuinen',
        'subtitle' => 'Wij helpen jou graag met jouw jungletuin',
        'description' => 'Heb je vragen over het creëren van een jungletuin, wil je persoonlijk advies of samenwerken? Neem gerust contact met ons op. Wij staan voor je klaar!',
    ])

    @include('partials.footer', [
        'title' => 'Zelf aan de slag met jouw jungletuin',
        'description1' => 'Een jungletuin maken begint met durven kiezen voor een natuurlijk en wild ogend ontwerp. Denk aan tropische planten zoals bananenbomen, varens en bamboe, gecombineerd met waterpartijen, kronkelpaadjes en natuurlijke materialen zoals hout en steen.',
        'description2' => 'Laat je inspireren door de natuur. Gebruik hoogteverschillen, schaduwrijke hoeken en weelderige beplanting om een mysterieuze sfeer te creëren. Met de juiste tips en een creatief plan tover jij elke tuin om tot een groene jungle vol leven.',
        'buttonUrl' => '/contact',
        'buttonText' => 'Vraag ons om advies',
        'buttonFacebook' => 'https://www.facebook.com/jungletuinen',
        'buttonInstagram' => 'https://www.instagram.com/jungletuinen',
        'contactPhone' => '088-123324',
        'contactEmail' => 'test@jungletuinen.nl',
    ])
@endsection
