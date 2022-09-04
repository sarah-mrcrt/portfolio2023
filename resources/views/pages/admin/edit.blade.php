@extends('layouts.template')
@section('content')

<section>

<h1>Editer un projet</h1>

	<!-- Si nous avons un Post $projet -->
	@if (isset($projet))

	<!-- Le formulaire est géré par la route "posts.update" -->
	<form method="POST" action="{{ url('projet/update', $projet) }}" enctype="multipart/form-data" >

		<!-- <input type="hidden" name="_method" value="PUT"> -->
		@method('PUT')

	@else

	<!-- Le formulaire est géré par la route "posts.store" -->
	<form method="POST" action="{{ url('projet/store') }}" enctype="multipart/form-data" >

	@endif

		<!-- Le token CSRF -->
		@csrf
		
		<p>
			<label for="title" >Titre</label><br/>

			<!-- S'il y a un $projet->titre, on complète la valeur de l'input -->
			<input type="text" name="titre" value="{{ isset($projet->titre) ? $projet->titre : old('titre') }}"  id="title" placeholder="Le titre du post" >

			<!-- Le message d'erreur pour "title" -->
			@error("titre")
			<div>{{ $message }}</div>
			@enderror
		</p>

		{{-- <!-- S'il y a une image $projet->picture, on l'affiche -->
		@if(isset($projet->picture))
		<p>
			<span>Couverture actuelle</span><br/>
			<img src="{{ asset('storage/'.$projet->picture) }}" alt="image de couverture actuelle" style="max-height: 200px;" >
		</p>
		@endif

		<p>
			<label for="picture" >Couverture</label><br/>
			<input type="file" name="picture" id="picture" >

			<!-- Le message d'erreur pour "picture" -->
			@error("picture")
			<div>{{ $message }}</div>
			@enderror
		</p> --}}
		{{-- <p>
			<label for="content" >Contenu</label><br/>

			<!-- S'il y a un $projet->content, on complète la valeur du textarea -->
			<textarea name="content" id="content" lang="fr" rows="10" cols="50" placeholder="Le contenu du post" >{{ isset($projet->content) ? $projet->content : old('content') }}</textarea>

			<!-- Le message d'erreur pour "content" -->
			@error("content")
			<div>{{ $message }}</div>
			@enderror
		</p> --}}

		<input type="submit" name="valider" value="Valider" >

	</form>
</section>

@endsection
                
                