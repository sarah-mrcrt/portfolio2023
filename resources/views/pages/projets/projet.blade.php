@extends('layouts.template')
@section('main', 'projet')

@section('content')
<section>
    <header id="projets-titre">
        <h2 class="h3">{{$projet->titre}}</h2>
        <ul class="tags">
            <li>Print</li>
            <li>Affiche</li>
            <li>{{$projet->date}}</li>
        </ul>
    </header>

    <article id="projet-info">
        <div id="projet-info-expertise">
            <h3>Expertises</h3>
            <ul>
                <li>Design Graphique</li>
                <li>Mise en page</li>
            </ul>
        </div>
        <div id="projet-info-logiciels">
            <h3>Logiciels</h3>
            <ul>
                <li>Illustrator</li>
            </ul>
        </div>
        <div id="projet-info-missions">
            <h3>Missions</h3>
            <p>{{$projet->mission}}</p>
        </div>
        <div id="projet-info-demarches">
            <h3>Démarches</h3>
            <p>{{$projet->demarche}}</p>
        </div>
    </article>

    @if($projet->video != 'NULL')
    <iframe src="{{$projet->video}}" frameborder="0"
        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    @endif

    @if($projet->image > 1)
    <?php $i=0 ?>
    @for ($i = 1; $i < $projet->image; $i++)
        <picture>
            <source srcset="{!!asset('images/projets/').'/'. $projet->date .'_'. $projet->url .'_'. $i .'.webp' !!}"
                type="image/webp">
            <source srcset="{!!asset('images/projets/').'/'. $projet->date .'_'. $projet->url .'_'. $i .'.jpg' !!}"
                type="image/jpg">
            <img src="{!!asset('images/projets/').'/'. $projet->date .'_'. $projet->url .'_'. $i .'.jpg' !!}"
                alt="{{$projet->titre}} {{$i}}">
        </picture>
        @endfor
        @endif

        <picture>
            <source srcset="{!!asset('images/projets/').'/'. $projet->date .'_'. $projet->url .'.webp' !!}"
                type="image/webp">
            <source srcset="{!!asset('images/projets/').'/'. $projet->date .'_'. $projet->url .'.jpg' !!}"
                type="image/jpg">
            <img src="{!!asset('images/projets/').'/'. $projet->date .'_'. $projet->url .'.jpg' !!}"
                alt="{{$projet->titre}}">
        </picture>
</section>

<nav id="pagination" class="h3">
    @if($next > 0)
    <a href="{{ URL::to( 'projets/' . $next ) }}">
        <figure id="next">
            <picture>
                <source srcset="{!!asset('images/projets/').'/'. $projet->date .'_'. $projet->url .'.webp' !!}"
                    type="image/webp">
                <source srcset="{!!asset('images/projets/').'/'. $projet->date .'_'. $projet->url .'.jpg' !!}"
                    type="image/jpg">
                <img src="{!!asset('images/projets/').'/'. $projet->date .'_'. $projet->url .'.jpg' !!}"
                    alt="{{$projet->titre}}">
            </picture>
            <figcaption>Suivant</figcaption>
        </figure>
    </a>
    @endif

    @if($previous > 0)
    <a href="{{ URL::to( 'projets/' . $previous ) }}">
        <figure id="previous">
            <picture>
                <source srcset="{!!asset('images/projets/').'/'. $projet->date .'_'. $projet->url .'.webp' !!}"
                    type="image/webp">
                <source srcset="{!!asset('images/projets/').'/'. $projet->date .'_'. $projet->url .'.jpg' !!}"
                    type="image/jpg">
                <img src="{!!asset('images/projets/').'/'. $projet->date .'_'. $projet->url .'.jpg' !!}"
                    alt="{{$projet->titre}}">
            </picture>
            <figcaption>Précédent</figcaption>
        </figure>
    </a>
    @endif
</nav>
@endsection
