@extends('layouts.template')
@section('title', 'Admin')

@section('content')

{{-- @auth --}}
	<section>
		<h1>Tous les projets</h1>

		<p>
			<!-- Lien pour créer un nouvel projet : "posts.create" -->
			<a href="{{ url('projet/add') }}" title="Créer un projet" >Créer un nouveau projet</a>
		</p>

		<!-- Le tableau pour lister les articles/projets -->
		<table>
			<thead>
				<tr>
					<th>Titre</th>
					<th colspan="2" >Opérations</th>
				</tr>
			</thead>
			<tbody>
				<!-- On parcourt la collection de projets -->
				@foreach ($projets as $projet)
				<tr>
					<td>
						<!-- Lien pour afficher un Post : "posts.show" -->
						<a href="projet_{{$projet->id}}" title="Lire l'article" >
							<p>{{ $projet->titre }}</p>
							<img style="height:10vh" src="{!!asset('images/projets/').'/'. $projet->date .'_'. $projet->url .'.jpg' !!}" alt="{{$projet->titre}}" class="projet-inventaire-img">
						</a>
					</td>
					<td>
						<!-- Lien pour modifier un Post : "posts.edit" -->
						<a href="{{ url('projet/edit', $projet) }}" title="Modifier l'article" >Modifier</a>
					</td>
					<td>
						<!-- Formulaire pour supprimer un Post : "posts.destroy" -->
						<form method="POST" action="{{ url('projet/delete', $projet) }}" >
							<!-- CSRF token -->
							@csrf
							<input type="hidden" name="_method" value="DELETE"> 
							{{-- @method("DELETE")$ --}}
							  {{ method_field('DELETE') }}  
							<input type="submit" value="x Supprimer" >
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</section>	

{{-- @endauth --}}
@endsection