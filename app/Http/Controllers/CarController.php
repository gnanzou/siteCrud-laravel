<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $voitures = Car::all();
        return view('car', compact('voitures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'marque' =>'required|string|max:255',
            'categorie' =>'required|string|max:255',
            'model' =>'required|string|max:255',
            'couleur' =>'required|string|max:255',
            'annee' =>'required|string|max:255',
            'prix' =>'required',
            'telephone' =>'required|string|max:255'
        ]);
        
        $car = new Car;
        $car->marque = $request->marque;
        $car->categorie = $request->categorie;
        $car->model = $request->model;
        $car->couleur = $request->couleur;
        $car->annee = $request->annee;
        $car->prix = $request->prix;
        $car->telephone = $request->telephone;
        $car->save();
        
        foreach($request->file('images') as $imagefile){
            $image = new Image;
            $path = $imagefile->store('/images/resource', ['disk' =>'my_files']);
            $image->url = $path;
            $image->car_id = $car->id;
            $image->save();
        
        }
        return redirect('/car')->with('success', 'Voiture créer avec succèss');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car = Car::findOrFail($id);
        return view('edit', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'marque' => 'required|max:225',
            'categorie' => 'required|max:225',
            'model' => 'required|max:225',
            'couleur' => 'required|max:225',
            'annee' => 'required|max:225',
            'prix' => 'required',
            'telephone' => 'required|max:225',
         ]);
         Car::whereId($id)->update($validatedData);
         return redirect('/car')->with('success', 'Voiture mise a jour avec succes!' );

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $car = Car::findOrFail($id);
        $car->delete();

        return redirect('/car')->with('successDelete', 'Voiture supprimer avec success');
    }
}
