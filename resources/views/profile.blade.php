@extends('layout')

@section('css')
    <link rel="stylesheet" href="./css/profile.css">
@endsection

@section('title')
    Profiel
@endsection

@section('content')
<main>
    <img src="./img/ricardo.jpg" alt="Foto van Ricardo" id="foto-ricardo">
    <article>
        <h1>Persoonlijke informatie</h1>
        <p>Ricardo Leite Lopes</p>
        <p>Leeftijd: 19 jaar</p>
        <p>Geboorteplaats: Lissabon, Portugal</p>
        <br>
        <p>Woonplaats: Bruinisse</p>
        <p>Vooropleiding: Havo Natuur & Gezondheid</p>
    </article>
    <br>
    <article>
        <h2>Buitenschoolse activiteiten</h2>
        <p>Bijbaan: YourSurprise in Zierikzee</p>
        <br>
        <p>Vrije tijd:</p>
        <ul>
            <li>Veel muziek luisteren</li>
            <li>Youtube kijken</li>
            <li>Gamen</li>
        </ul>
    </article>
    <br>
    <article>
        <h1>Goede en zwakke punten</h1>
        <p>Mijn sterke punten:</p>
        <ul>
            <li>Leergierig</li>
            <li>Behulpzaam</li>
            <li>Zelfstandig</li>
        </ul>
        <br>
        <p>Mijn zwakke punten:</p>
        <ul>
            <li>Plannen</li>
            <li>Kritisch</li>
            <li>Perfectionistisch</li>
        </ul>
    </article>
</main>
@endsection

