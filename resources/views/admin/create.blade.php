@extends("layouts.template")
@section("title", "Créer un projet")
@section("content")

	<h1>Créer un projet</h1>

	<!-- Le formulaire est géré par la route "posts.store" -->
	<form method="POST" action="{{ url('projet/store') }}" enctype="multipart/form-data" >

		<!-- Le token CSRF -->
		@csrf
		
		<p>
			<label for="titre" >Titre</label><br/>
			<input type="text" name="titre" value="{{ old('titre') }}"  id="titre" placeholder="Le titre du post" required>

			@error("titre")
			<div>{{ $message }}</div>
			@enderror
            
		</p>

        <p>
			<label for="url" >url</label><br/>
			<input type="text" name="url" value="{{ old('url') }}"  id="url" placeholder="Le url du post" required>

			@error("url")
			<div>{{ $message }}</div>
			@enderror
		</p>

        <p>
			<label for="image" >image</label><br/>
			<input type="text" name="image" value="{{ old('image') }}"  id="image" placeholder="Le image du post" >

			@error("image")
			<div>{{ $message }}</div>
			@enderror
		</p>

        <p>
        {{-- Boutons radios? --}}
			<label for="tags" >tags</label><br/>
			<input type="text" name="tags" value="{{ old('tags') }}"  id="tags" placeholder="Le tags du post" required>

			@error("tags")
			<div>{{ $message }}</div>
			@enderror
		</p>

        <p>
			<label for="logiciels">logiciels</label><br/>
			<input type="text" name="logiciels" value="{{ old('logiciels') }}"  id="logiciels" placeholder="Le logiciels du post" required>

			@error("logiciels")
			<div>{{ $message }}</div>
			@enderror
		</p>

        <p>
			<label for="date">date</label><br/>
			<input type="text" name="date" value="{{ old('date') }}"  id="date" placeholder="Le date du post" required>

			@error("date")
			<div>{{ $message }}</div>
			@enderror
		</p>

        <p>
			<label for="mission">mission</label><br/>
			<input type="text" name="mission" value="{{ old('mission') }}"  id="mission" placeholder="Le mission du post" required>

			@error("mission")
			<div>{{ $message }}</div>
			@enderror
		</p>

        <p>
			<label for="services">services</label><br/>
			<input type="text" name="services" value="{{ old('services') }}"  id="services" placeholder="Le services du post" required>

			@error("titre")
			<div>{{ $message }}</div>
			@enderror
		</p>

        <p>
			<label for="demarche">demarche</label><br/>
			<input type="text" name="demarche" value="{{ old('demarche') }}"  id="demarche" placeholder="Le demarche du post">

			@error("titre")
			<div>{{ $message }}</div>
			@enderror
		</p>

        <p>
			<label for="video">video</label><br/>
			<input type="text" name="video" value="{{ old('video') }}"  id="video" placeholder="Le video du post">

			@error("video")
			<div>{{ $message }}</div>
			@enderror
		</p>

        <p>
			<label for="decouvrir">decouvrir</label><br/>
			<input type="text" name="decouvrir" value="{{ old('decouvrir') }}"  id="decouvrir" placeholder="Le decouvrir du post">

			@error("decouvrir")
			<div>{{ $message }}</div>
			@enderror
		</p>
		{{-- <p>
			<label for="picture" >Couverture</label><br/>
			<input type="file" name="picture" id="picture" >

			<!-- Le message d'erreur pour "picture" -->
			@error("picture")
			<div>{{ $message }}</div>
			@enderror
		</p> --}}

		<input type="submit" name="valider" value="Valider" >
	</form>

    @if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
@endsection