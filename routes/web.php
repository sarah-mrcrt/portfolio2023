<?php
// -------------- Use -------------- //
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\Projet;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjetsController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;

// Modele crud / https://www.akilischool.com/cours/laravel-crud-avec-upload-dimage

// -------------- Accueil -------------- //
Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);

// -------------- Services -------------- //
Route::get('/services', function () {
    return view('pages/services/services');
});

// -------------- Projets  -------------- //
Route::get('/projets', [ProjetsController::class, 'index']);
Route::get('/projets/{id}/{slug}', [ProjetsController::class, 'show'])->where('id','[0-9]+')->name('projets.show');


// -------------- Administration -------------- //
// Route::group(['middleware' => ['auth']], function () { 
//   Route::get('/admin', 'AdminController@index');
//   Route::get('projet/add', 'AdminController@create');
//   Route::post('projet/store', 'AdminController@store');
//   // non fonctionnel
//   Route::get('projet/edit/{id}','AdminController@edit');
//   Route::patch('projet/update/{id}', 'AdminController@update');
//   // fonctionnel
//   Route::delete('projet/delete/{id}','AdminController@destroy');
// });
// Auth::routes();

// -------------- Sitemap -------------- //
Route::get('genrate-sitemap', function(){
    // Pour générer un nouveau sitemap : http://127.0.0.1:8000/genrate-sitemap
    // create new sitemap object
    $sitemap = App::make("sitemap");

    // add items to the sitemap (url, date, priority, freq)
    $sitemap->add(url('/'), now(), '1.0', 'weekly');
    $sitemap->add(URL::to('/projets'), now(), '0.8', 'monthly');
    $sitemap->add(URL::to('/services'), now(), '0.8', 'monthly');

    // get all posts from db
    $projets = Projet::all();

    // add every post to the sitemap
    foreach ($projets as $projet)
    {
        $sitemap->add(URL::to('projets/'.$projet->id.'/'.$projet->url), now(), '0.7', 'monthly');
    }

    // generate your sitemap (format, filename)
    $sitemap->store('xml', 'sitemap');
    // this will generate file mysitemap.xml to your public folder

    return redirect(url('sitemap.xml'));
});

// -------------- Redirige les erreurs 404 à l'accueil -------------- //
Route::any('{query}', function() { return redirect('/'); })->where('query', '.*');
