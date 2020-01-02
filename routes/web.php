<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	/*------------insertion-------------- 
	$nom = 'conde';
	$prenom = 'mohamed';
	(DB::table('laravel')->insert([
		'nom'=>  'conde',
		'prenom' => 'alpha1'
	],
	[
		'nom'=>  'conde',
		'prenom' => 'sekou1'
	]
));
	
	DB::insert('INSERT INTO laravel(nom,prenom) VALUES(:nom,:prenom)', [
		'nom'=> $nom,
		'prenom'=>$prenom
	]);
	oubien
		DB::insert('INSERT INTO laravel(nom,prenom) VALUES(:nom,:prenom)', [$nom,prenom]);
		oubien
		DB::insert('INSERT INTO laravel(nom,prenom) VALUES(?,?)', [$nom,prenom]);
	*/

	/*------------updat-------------- 
		(DB::table('laravel')->whereId(2)->update([
		'nom'=>  'traore'
	]
	
));
	
	(DB::table('laravel')->whereId(2)->update([
		'nom'=>  'traore'
	]
	(DB::table('laravel')->where('id', 2)->update([
		'nom'=>  'traore'
	]
	*/

	(DB::table('laravel')->whereId(2)->delete());
	/*------------delete-------------- 
	DB::table('laravel')->where('id', '>', 7)->delete();
	DB::table('laravel')->whereId(2)->delete();
	DB::table('laravel')->where('id', 2)->delete();
	*/

	dump(DB::select('SELECT * FROM laravel'));
	 /*------------selection--------------
	 DB::table('laravel')->whereNom('conde')->get();
	 dump(DB::table('laravel')->whereNomAndPrenom('conde', 'paul')->get());
	 DB::table('laravel')
	 			->whereNom('conde')
	 			->wherePrenom('paul')
	 			->get();
		oubien
		1er element de la base
		dump(DB::table('laravel')->first());
		2 element de la base
		dump(DB::table('laravel')->take(2)->get());
		dump(DB::table('laravel')->lilit(2)->get());
		selection par ordre
		dump(DB::table('laravel')->orderBY('nom', 'desc----pour incerser lordre de selectio')->get());
		dump(DB::table('laravel')->get(['nom']));
		dump(DB::table('laravel')->get(['nom as mon_nom']));
		dump(DB::table('laravel')->where('id', '<', 2)->get());
	*/
    return view('welcome');
});


Route::get('/about', function () {
    return view('page/about');
});


Route::get('/nom',function ()
{	
	$dt = App\Dossier\Date::letemp();
	$nom ="conde";
	$prenom ="kemoko";
	$donne= [
		'nomseur'=>'conde',
		'prenomseur'=>'fatim'
	];
	$nom ="conde";
	$prenom ="kemoko";
	return view('page.nom',$donne)->with('dat',$dt)->with('monnom',$nom)->with('monprenom',$prenom)->with([
		'nommere'=>'kourouma',
		'prenommere'=>'kankou'
	]);
});


Route::get('/event',function(){
	$event1 = [
		'dejeunner',
		'sortir',
		'aller'];
	$event2 = [
		'quite la ville',
		'rentrée ala maison',
		'Se laver'];

	return view('events/evennement',compact('event1'))->with(compact('event2'));
});


Route::get('/travail',function(){
	$isTravail = date('N') <=3;
	return view('events/index')->with('isTravail',$isTravail);
});

use App\immobil_v;
Route::get('/eloquent',function(){

	$posts = App\immobil_v::all();
	/*dd($posts->filter(function ($value,$key)
	{
		return($value->saln_im == 'non');
	}));*/
	
	/*;convertir la colection en tableau
	dd($post->toArray());*/

	/*$post = App\Laravel::find(1);
	dd($post->nom);*/

	/*$post = App\Laravel::whereNomAndPrenom('conde', 'paul')->first();
	dd($post->nom);*/

	/*Laravel::create([
	'nom'=>'diallo', 
	'prenom'=>'saidou',
	'start_at'=> new dateTime('+5 day')
	]);*/

	/*$post = new App\Laravel;
	$post->nom = 'milimono';
	$post->prenom = 'michel';
	$post->save();*/

	/*$post = new Laravel(['nom'=>'diallo', 'prenom'=>'saidou']);
	$post->save();*/

	/*$post = Laravel::create(['nom'=>'mouton', 'prenom'=>'thierno']);
	$post->save();*/
	return view('page.eloquent')->withPosts($posts);
});


use App\event;
Route::get('/date',function(){
	$events = event::all();


	return view('page.date')->withEvents($events);
});

Route::get('/casting',function(){

	$sav = App\event::create(
		[
			'nom' => 'conde',
			'prenom' => ''
		]);
	$casting = App\event::all();

	return view('page.casting',compact('casting'));
	
});



/*Route::resource('/form','urlscontroller')->only([
    'create', 'store'
])->names([
    'create' => 'affichage',
    'store' => 'sauvegarde_'
]);*/
/*Route::resource('users', 'AdminUserController')->parameters([
    'users' => 'admin_user'
]);*/
Route::resource('/boutique', 'boutiquecontroller');
Route::get('/form','urlscontroller@create')->name('affichage_p');
Route::post('/form','urlscontroller@store')->name('modification_p');

	/*$url = request('url');

	Validator::make(compact('url'), ['url' => 'required|url'], ['required' => 'champ obligatoire', 'url' => 'format invalide'])->validate();*/
	/*Validator::make(compact('url'), ['url' => 'required|url'], ['url.required' => 'champ obligatoire', 'url.url' => 'format invalide'])->validate();*/

	/*$vaalidtion = Validator::make(compact('url'), ['url' => 'required|url'], ['url.required' => 'champ obligatoire', 'url.url' => 'format invalide']);
	if ($vaalidtion->fails()) {
		
	}elseif ($vaalidtion->passes) {
		
	}*/


	/*$row = App\urls::whereUrl(request('url'))->first();

	if ($row) {
		return view('page.resulta')->withShortened($row->shortened)->withUrl($row->url);
	}*/



Route::get('/form/{shortened}','urlscontroller@show')->name('resulta_p');

