<?php

namespace App\Http\Controllers;
use App\boutique;
use App\helpers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use  App\Http\Requests\boutiquerequeste;

class boutiquecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = boutique::paginate(4);
        return view('boutique.affiche', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('boutique.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(boutiquerequeste $request)
    {
       /*$this->validate($request,[
            'nom' => 'required|min:3',
            'desk' => 'required|min:6']);*/
           
        boutique::create([
        'nom' => $request->nom,
        'description' => $request->desk,
        /*'slug' => str_slug($request->nom)*/
        ]);
       
       /*session()->flash('notification.cle', 'Enregistrement effectuer avec succes');
       session()->flash('notification.type', 'success');*/
       flash('Enregistrement effectuer avec succes','success');
       return redirect()->route('boutique.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\boutique  $boutique
     * @return \Illuminate\Http\Response
     */
    public function show(boutique $boutique)
    {
       /*$events = boutique::findOrFail($events);*/

       return view('boutique.detail',compact('boutique'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\boutique  $boutique
     * @return \Illuminate\Http\Response
     */
    public function edit(boutique $boutique)
    {
        /*$events = boutique::findOrfail($boutique);*/
        return view('boutique.modifie', compact('boutique'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\boutique  $boutique
     * @return \Illuminate\Http\Response
     */
    public function update(boutiquerequeste $request,boutique $boutique)
    {
        /*$this->validate($request, [
            'nom' => 'required|min:3',
            'desk' => 'required|min:5']);*/
        /*$events = boutique::findOrFail($boutique);*/
        $boutique->update([
        'nom' => $request->nom,
        'description' => $request->desk
        ]);
        flash('Modification effectuer avec succes','success');
        return redirect()->route('boutique.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\boutique  $boutique
     * @return \Illuminate\Http\Response
     */
    public function destroy(boutique $boutique)
    {
        /*boutique::destroy($boutique);*/
        $boutique->delete();
        flash('supression effectuer avec succes','danger');
        return redirect()->route('boutique.index');

    }
}
