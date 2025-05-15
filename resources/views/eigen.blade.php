@extends('layouts.app')

@section('title', 'Eigen tuin – Jungle Tuinen')

@section('meta')
    <meta name="description" content="Ontdek hoe jij jouw eigen jungletuin kunt creëren. Met tropische planten, natuurlijke elementen en slimme indeling tover je elke tuin om tot een groene oase. Vraag advies aan Jungle Tuinen via 088-123324 of test@jungletuinen.nl." />
@endsection

@section('content')
    @include('partials.banner', [
        'title' => 'Creëer jouw eigen jungletuin',
        'subtitle' => 'Breng de magie van de jungle naar je eigen achtertuin',
        'description' => 'Ontsnap aan de drukte en ontdek hoe je van jouw tuin een tropisch paradijs maakt. Met grote bladeren, weelderige planten, natuurlijke elementen en het geluid van kabbelend water creëer je een oase van rust en avontuur – jouw eigen jungletuin, uniek en inspirerend.'
    ])

    @include('partials.footer', [
        'title' => 'Zelf aan de slag met jouw jungletuin',
        'description1' => 'Een jungletuin maken begint met durven kiezen voor een natuurlijk en wild ogend ontwerp. Denk aan tropische planten zoals bananenbomen, varens en bamboe, gecombineerd met waterpartijen, kronkelpaadjes en natuurlijke materialen zoals hout en steen.',
        'description2' => 'Laat je inspireren door de natuur. Gebruik hoogteverschillen, schaduwrijke hoeken en weelderige beplanting om een mysterieuze sfeer te creëren. Met de juiste tips en een creatief plan tover jij elke tuin om tot een groene jungle vol leven.',
        'buttonUrl' => '/contact',
        'buttonText' => 'Vraag ons om advies',
    ])
@endsection