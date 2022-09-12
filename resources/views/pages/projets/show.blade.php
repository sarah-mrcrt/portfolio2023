@extends('layouts.template')
{{-- Meta --}}
@section('meta_title')
{{$projet->titre}}
@endsection
@section('meta_description')
Découvrez {{$projet->titre}}.
@endsection
{{-- Main id --}}
@section('main', 'projet')
{{-- Main content --}}
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

        @if($projet->mission != NULL)
        <div id="projet-info-missions">
            <h3>Missions</h3>
            <p>{{$projet->mission}}</p>
        </div>
        @endif

        @if($projet->demarche != NULL)
        <div id="projet-info-demarches">
            <h3>Démarches</h3>
            <p>{{$projet->demarche}}</p>
        </div>
        @endif
    </article>

    @if($projet->video_url != NULL)
    <iframe src="{{$projet->video_url}}" frameborder="0"
        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    @endif

    @if($projet->nbr_image > 1)
    <?php $i=0 ?>
    @for ($i = 1; $i < $projet->nbr_image; $i++)
        <picture>
            <source srcset="{!!asset('images/projets/').'/'. $projet->date .'-'. $projet->slug .'-'. $i .'.webp' !!}"
                type="image/webp">
            <source srcset="{!!asset('images/projets/').'/'. $projet->date .'-'. $projet->slug .'-'. $i .'.jpg' !!}"
                type="image/jpg">
            <img src="{!!asset('images/projets/').'/'. $projet->date .'-'. $projet->slug .'-'. $i .'.jpg' !!}"
                alt="{{$projet->titre}} {{$i}}">
        </picture>
        @endfor
        @endif

        <picture>
            <source srcset="{!!asset('images/projets/').'/'. $projet->date .'-'. $projet->slug .'.webp' !!}"
                type="image/webp">
            <source srcset="{!!asset('images/projets/').'/'. $projet->date .'-'. $projet->slug .'.jpg' !!}"
                type="image/jpg">
            <img src="{!!asset('images/projets/').'/'. $projet->date .'-'. $projet->slug .'.jpg' !!}"
                alt="{{$projet->titre}}">
        </picture>

        @if($projet->decouvrir != NULL)
        <a href="{{URL::to($projet->decouvrir)}}" class="btn" rel="noopener" target="-blank">Découvrir</a>
        @endif
</section>

<nav id="pagination" class="h3">
    @if($next > 0)
    <a href="{{ URL::to( 'projets/' . $next .'/'. $projet->next->slug) }}">
        <figure id="next">
            <picture>
                <source
                    srcset="{{ URL::to( 'images/projets/' . $projet->next->date .'-'. $projet->next->slug .'.webp') }}"
                    type="image/webp">
                <source
                    srcset="{{ URL::to( 'images/projets/' . $projet->next->date .'-'. $projet->next->slug .'.jpg') }}"
                    type="image/jpg">
                <img src="{{ URL::to( 'images/projets/' . $projet->next->date .'-'. $projet->next->slug .'.jpg') }}"
                    alt="{{$projet->next->titre}}">
            </picture>
            <figcaption>Suivant</figcaption>
        </figure>
    </a>
    @endif

    @if($previous > 0)
    <a href="{{ URL::to( 'projets/' . $previous .'/'. $projet->previous->slug) }}">
        <figure id="previous">
            <picture>
                <source
                    srcset="{{ URL::to( 'images/projets/' . $projet->previous->date .'-'. $projet->previous->slug .'.webp') }}"
                    type="image/webp">
                <source
                    srcset="{{ URL::to( 'images/projets/' . $projet->previous->date .'-'. $projet->previous->slug .'.jpg') }}"
                    type="image/jpg">
                <img src="{{ URL::to( 'images/projets/' . $projet->previous->date .'-'. $projet->previous->slug .'.jpg') }}"
                    alt="{{$projet->previous->titre}}">
            </picture>
            <figcaption>Précédent</figcaption>
        </figure>
    </a>
    @endif
</nav>
@endsection
