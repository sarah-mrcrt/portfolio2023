@extends('layouts.template')
{{-- Meta --}}
@section('meta_title', 'Projets')
@section('meta_description', 'Découvrez une sélection de mes meilleurs projets !')
{{-- Main id --}}
@section('main', 'projets')
{{-- Main content --}}
@section('content')
<header class="entete-pages">
    <div class="col-4">
        <h2>Projets</h2>
        <h3>Formons une alliance</h3>
    </div>
    <p class="col-7">
        Je peux participer aux différentes phases d’un projet. Pour vous donner une vague idée des domaines où j’évolue, voici une énumération : design thinking, identité visuelle, papeterie, photographie, webdesign, développement web, SEO, etc.
    </p>
</header>

<aside class="filter-buttons col-2">
    <ul id="filter-btns">
        <li class="active filter" data-target="all">Tout</li>
        <li class="filter" data-target="Digital">Digital</li>
        <li data-target="Print">Print</li>
        <li data-target="Audiovisuel">Audiovisuel</li>
    </ul>
</aside>

<section class="col-10 portfolio-gallery article-bordered">
    @foreach ($projets as $projet)

    <a href="{{route("projets.show", [$projet->id, $projet->slug])}}" class="item" data-id="{{$projet->tags}}">
        <header>
            <h2>{{$projet->titre}}</h2>
            <ul class="tags">
                <li>{{$projet->tags}}</li>
                @if($projet->expertises != 'NULL')
                <li>{{$projet->expertises}}</li>
                @endif
            </ul>
        </header>
        <span class="btn">Voir plus</span>
        <picture>
            <source srcset="{!!asset('images/projets').'/'. $projet->date .'-'. $projet->slug .'.webp' !!}"
                type="image/webp">
            <source srcset="{!!asset('images/projets').'/'. $projet->date .'-'. $projet->slug .'.jpg' !!}"
                type="image/jpg">
            <img src="{!!asset('images/projets').'/'. $projet->date .'-'. $projet->slug .'.jpg' !!}"
                alt="{{$projet->titre}}">
        </picture>
    </a>
    @endforeach
</section>
@endsection
