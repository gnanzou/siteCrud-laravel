@extends('layout')
@section('content')
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <div style="text-align: center">
        <h3 class="border-bottom mt-3 bp-2 mb-4">Ajout Des Voitures</h3>

    </div>
    
        @if($errors->any())
        
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                
                <li>{{$error}}</li>
                    
                @endforeach
            </ul>
        </div><br/>
@endif

<style>
    .uper{
        margin-top: 40px;
    }
</style>
<div class="card uper">    
    <div class="card-body">
        
      
<form  enctype="multipart/form-data" method="POST" action="{{route('car.ajouter')}}">
    @csrf
    <div class="form-group">
        <label for="marque">Marque:</label>
        <input type="text" class="form-control" name="marque"/>

    </div>
    <div class="form-group">
        <label for="categorie">Catégorie:</label>
        <input type="text" class="form-control" name="categorie"/>

    </div>
    <div class="form-group">
        <label for="model">Model</label>
        <input type="text" class="form-control" name="model"/>
 </div>
    <div class="form-group">
        <label for="couleur">Couleur:</label>
        <input type="text" class="form-control" name="couleur"/>
    </div>
    <div class="form-group">
        <label for="annee">Annee</label>
        <input type="text" class="form-control" name="annee"/>
 </div>
 <div class="form-group">
     <label for="">Choisir des images</label>
     <input type="file" class="form-control" name="images[]" multiple>

 </div>
 <div class="form-group">
     <label for="prix">Prix</label>
     <input type="text" class="form-control" name="prix"/>

 </div>
 <div class="form-group">
     <label for="telephpne">Telephone</label>
     <input type="text" class="form-control" name="telephone">
 </div>
 <div class="col text-center">
<button type="submit" class="btn btn-primary mt-3">Enregistrer</button>
<a href="{{route('car')}}" class="btn btn-danger mt-3">Annuler</a>
</div>
</form>
</div>
</div>
</div>
@endsection