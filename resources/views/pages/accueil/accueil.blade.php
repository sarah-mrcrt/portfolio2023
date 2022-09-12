@extends('layouts.template')
{{-- Meta --}}
@section('meta_title', 'Accueil')
@section('meta_description', 'Portfolio de Sarah Mauriaucourt, étudiante dans le domaine du design numérique. Découvrez mes
réalisations en web, communication visuelle et audiovisuelle.')
{{-- Main id --}}
@section('main', 'home')
{{-- Main content --}}
@section('content')

<!-- ------- Accueil ------- -->
<section id="accueil">
    <article class="col-6">
        <h3>Hey, je suis Sarah Mauriaucourt</h3>
        <ul>
            <li>designer graphique</li>
            <li>web & ui designer</li>
            <li>front & back end developper</li>
            <li>cadreuse & monteuse</li>
        </ul>
    </article>
    <picture class="col-6">
        <source srcset="{{asset('images/Sarah-Mauriaucourt.webp')}}" type="image/webp">
        <source srcset="{{asset('images/Sarah-Mauriaucourt.png')}}" type="image/png">
        <img src="{{asset('images/Sarah-Mauriaucourt.png')}}" alt="Photo de la tête de Sarah Mauriaucourt">
    </picture>
</section>

<!-- A PROPOS -->
<section id="about">
    <h2>À propos</h2>
    <article>
        <h3>Je design et développe des trucs.</h3>
        <p>Créatrice polyvalente dans le monde du numérique, je suis actuellement à la recherche d'un stage
            de 3 mois dans la conception et le développement web. J'aime me renouveler en explorant de
            nouvelles techniques, de nouveaux styles, de nouvelles pistes. Retrouvez sur ce portfolio mes
            travaux !</p>
        <a href="{{asset('images/Sarah-Mauriaucourt-CV.pdf')}}" class="btn" target="-blank">CV Print</a>
    </article>
</section>

<!-- SERVICES -->
<section id="services">
    <h2>Services</h2>
    <article>
        <p>Chaque projet est un <strong>challenge</strong> de renouveau en terme
            <strong>d'esthétique</strong> et de <strong>technique</strong>. Mon objectif :
            être fière de ce que je fais. Et dans un processus de <strong>réfléxion</strong>,
            <strong>créations</strong>, <strong>développement</strong> et
            <strong>d'itérations</strong>, je m'assure d'y arriver.</p>
        <a href="{{ url('/services') }}" class="btn">Services</a>
    </article>
</section>

<!-- PROJETS -->
<section id="projets">
    <h2>Projets</h2>
    <div>
        <article>
            <p>Vous n'avez pas le temps de découvrir l'ensemble de mes projets ? Pas de soucis, je vous ai
                fait
                une courte sélection en choisissant un projet dans chaque domaine où j'évolue. Sois le
                <a class="link">Web</a>, le <a class="link">Print</a> et l'<a class="link">Audiovisuel</a> !</p>
            <a href="{{ url('/projets') }}" class="btn">Projets</a>
        </article>

        <article>
            <a href="{{url('projets/9/Audio-player')}}" class="col-5">
                <figure>
                    <picture>
                        <source srcset="{{asset('images/projets/2021-Audio-player.webp')}}" type="image/webp">
                        <source srcset="{{asset('images/projets/2021-Audio-player.jpg')}}" type="image/jpg">
                        <img src="{{asset('images/projets/2021-Audio-player.jpg')}}"
                            alt="Audio Player est un projet Web">
                    </picture>
                    <img class="arrow" src="{{asset('images/fleche.svg')}}" alt="Symbole d'une flèche">
                    <figcaption>Web</figcaption>
                </figure>
            </a>
            <a href="{{url('projets/6/Grilles')}}" class="col-5">
                <figure>
                    <picture>
                        <source srcset="{{asset('images/projets/2021-Grilles.webp')}}" type="image/webp">
                        <source srcset="{{asset('images/projets/2021-Grilles.jpg')}}" type="image/jpg">
                        <img src="{{asset('images/projets/2021-Grilles.jpg')}}" alt="Grilles est un projet Print">
                    </picture>
                    <img class="arrow" src="{{asset('images/fleche.svg')}}" alt="Symbole d'une flèche">
                    <figcaption>Print</figcaption>
                </figure>
            </a>
            <a href="{{url('projets/5/now')}}" class="col-5">
                <figure>
                    <picture>
                        <source srcset="{{asset('images/projets/2021-now.webp')}}" type="image/webp">
                        <source srcset="{{asset('images/projets/2021-now.jpg')}}" type="image/jpg">
                        <img src="{{asset('images/projets/2021-now.jpg')}}" alt="Now est un projet Audiovisuel">
                    </picture>
                    <img class="arrow" src="{{asset('images/fleche.svg')}}" alt="Symbole d'une flèche">
                    <figcaption>Audiovisuel</figcaption>
                </figure>
            </a>
        </article>
    </div>
</section>
@endsection
