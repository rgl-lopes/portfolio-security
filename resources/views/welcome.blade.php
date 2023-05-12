@extends('layout')

@section ('css')
    <link rel="stylesheet" href="./css/index.css">
@endsection

@section('title')
    Home
@endsection

@section ('content')
    <main>
        <img src="./img/background.jpg" alt="background-image" id="background">
        <div id="welkom">
            <h2>Welkom op mijn website</h2>
            <p>Op deze website kan je informatie vinden over de opleiding HBO-ICT, over mij en waarom ik deze opleiding heb gekozen.</p>
        </div>
        <article>
            <p>Sinds jongs af aan was ik al geïnteresseerd in computers, en was ik altijd nieuwsgierig naar technologie.
                Dit is tot nu toe zo gebleven. Op de havo heb ik informatica gevolgd, en voor dat vak heb ik vaak hoge cijfers behaald,
                en daarnaast vond ik de dingen die ik daar leerde interessant.
                Ik haalde er veel voldoening uit als ik zelf iets had gemaakt en alles naar wens werkte Of dat ik een probleem had verholpen.
                Uit studiekeuzetesten kwam heel vaak elektrotechniek en informatica naar voren.
                De twijfel zat tussen Informatica en Elektrotechniek.
                Ik heb meeloopdagen gevolgd bij Elektrotechniek en ik kwam erachter dat het net niet voor mij was.
                Uiteindelijk heb ik gekozen voor HBO-ICT bij de HZ in Middelburg.
            </p>
        </article>
        <ul id="github-link">
            <li><a href="https://github.com/rgl-lopes">Mijn Github</a></li>
        </ul>
        <div>
            <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><img src="./img/egg.png" height="10px" width="10px"></a>
        </div>
    </main>
@endsection