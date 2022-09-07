@extends('layouts.template')
{{-- Meta --}}
@section('meta_title', 'Services')
@section('meta_description', 'Vous avez besoin de mes services ? Je vous laisse découvrir mes étapes de travail et je reste bien entendu ouverte à toutes autres méthodes de travail.')
{{-- Main id --}}
@section('main', 'services')
{{-- Main content --}}
@section('content')
<header class="entete-pages">
    <div class="col-4">
        <h2>Services</h2>
        <h3>Formons une alliance</h3>
    </div>
    <p class="col-7">Mon avenir a toujours été source d’interrogation. Plus jeune, je n’avais pas de passion
        particulière
        et l’art m’était indifférent… comique, car aujourd’hui <strong>l’art numérique</strong> est
        devenu
        l'une de mes passions. Si vous aussi vous avez besoin de vous <strong>épanouir</strong> et vous
        <strong>amuser</strong> dans votre travail, alors voyons ensemble, <strong>comment je peux vous
            aider !</strong></p>
</header>

<section class="article-bordered">
    <article>
        <p>01</p>
        <div>
            <h2>Idée & Vision</h2>
            <p>Avant d'entreprendre un projet, une <strong>stratégie de veille</strong> s'impose. Entre
                sessions de
                <strong>brainstorming</strong>
                et de recherche, je définis les <strong>objectifs</strong> que je veux atteindre.</p>
        </div>
    </article>

    <article>
        <p>02</p>
        <div>
            <h2>Règles</h2>
            <p>Il faut une bonne maîtrise des <strong>règles fondamentales</strong> du
                <strong>graphisme</strong> et de <strong>l'ergonomie</strong> pour mieux
                atteindre sa cible ou pour mieux les déconstruire.</p>
        </div>
    </article>

    <article>
        <p>03</p>
        <div>
            <h2>Branding & Design</h2>
            <p>Après l'inspiration, place à la <strong>conception</strong>. Souris à la main, il est temps
                de se renouvelers graphiquement. Je crée aussi bien des images de marque que des
                <strong>supports de
                    communication print & web.</strong></p>
        </div>
    </article>

    <article>
        <p>04</p>
        <div>
            <h2>Résumé</h2>
            <p>En bref, je suis polyvalente, méthodique dans mon travail, ouverte à la critique et j'ai soif
                d'apprentissage !</p>
        </div>
    </article>
</section>
@endsection
