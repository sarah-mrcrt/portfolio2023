@extends('layouts.template')
@section('title', 'Bienvenue sur l\'un de mes projets.')
@section('description', 'Bienvenue sur l\'un de mes projets.')
@section('main', 'projet')

@section('content')
<section>
    <header id="projets-titre">
        <h2 class="h3">{{$projet->titre}}</h2>
        <ul class="tags">
            <li>{{$projet->tags}}</li>
            <li>{{$projet->date}}</li>
        </ul>
    </header>

    <article id="projet-info">
        <div id="projet-info-expertise">
            <h3>Expertises</h3>
            <ul>
                <li>{{$projet->expertises}}</li>
            </ul>
        </div>

        <div id="projet-info-logiciels">
            <h3>Logiciels</h3>
            <ul>
                <li>{{$projet->logiciels}}</li>
            </ul>
        </div>

        @if($projet->mission != 'NULL')
        <div id="projet-info-missions">
            <h3>Missions</h3>
            <p>{{$projet->mission}}</p>
        </div>
        @endif

        @if($projet->demarche != 'NULL')
        <div id="projet-info-demarches">
            <h3>Démarches</h3>
            <p>{{$projet->demarche}}</p>
        </div>
        @endif
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

        @if($projet->decouvrir != 'NULL')
        <a href="{{URL::to($projet->decouvrir)}}" class="btn" rel="noopener" target="_blank">Découvrir</a>
        @endif
</section>

<nav id="pagination" class="h3">
    @if($next > 0)
    <a href="{{ URL::to( 'projets/' . $next .'/'. $projet->next->url) }}">
        <figure id="next">
            <picture>
                <source
                    srcset="{{ URL::to( 'images/projets/' . $projet->next->date .'_'. $projet->next->url .'.webp') }}"
                    type="image/webp">
                <source
                    srcset="{{ URL::to( 'images/projets/' . $projet->next->date .'_'. $projet->next->url .'.jpg') }}"
                    type="image/jpg">
                <img src="{{ URL::to( 'images/projets/' . $projet->next->date .'_'. $projet->next->url .'.jpg') }}"
                    alt="{{$projet->next->titre}}">
            </picture>
            <figcaption>Suivant</figcaption>
        </figure>
    </a>
    @endif

    @if($previous > 0)
    <a href="{{ URL::to( 'projets/' . $previous .'/'. $projet->previous->url) }}">
        <figure id="previous">
            <picture>
                <source
                    srcset="{{ URL::to( 'images/projets/' . $projet->previous->date .'_'. $projet->previous->url .'.webp') }}"
                    type="image/webp">
                <source
                    srcset="{{ URL::to( 'images/projets/' . $projet->previous->date .'_'. $projet->previous->url .'.jpg') }}"
                    type="image/jpg">
                <img src="{{ URL::to( 'images/projets/' . $projet->previous->date .'_'. $projet->previous->url .'.jpg') }}"
                    alt="{{$projet->previous->titre}}">
            </picture>
            <figcaption>Précédent</figcaption>
        </figure>
    </a>
    @endif
</nav>
@endsection
