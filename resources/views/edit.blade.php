@extends('layout')
@section('content')
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <div style="text-align: center">
    <h3 class="border-bottom mt-3 bp-2 mb-4">L'Edition d'une nouvelle voiture</h3>
</div>
@if (session()->has("success"))
        <div class="alert alert-success">
        <h3>{{ session()->get('success')}}</h3>
      </div>
      @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li> {{ $error}} </li>
                    
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
    <div class="card-header">
        Modifier la voiture
    </div>
    <div class="card-body">
        
            <form method="post" action="{{ route('car.update', ['car'=>$car->id])}}">
                @csrf
                <input type="hidden" name="_method" value="put">
                <div class="form-group">
                    <label for="marque">Marque:</label>
                    <input type="text" class="form-control" name="marque" value="{{ $car->marque }}"/>

                </div>
                <div class="form-group">
                    <label for="categorie">Catégorie</label>
                    <input type="text" class="form-control" name="categorie" value="{{ $car->categorie }}"/>

                </div>
                <div class="form-group">
                    <label for="model">Model</label>
                    <input type="text" class="form-control" name="model" value="{{ $car->model }}"/>
            </div>
            <div class="form-group">
                <label for="couleur">Couleur</label>
                <input type="text" class="form-control" name="couleur" value="{{ $car->couleur }}"/>
             </div>
             <div class="form-group">
                <label for="annee">Annee</label>
                <input type="text" class="form-control" name="annee" value="{{ $car->annee }}"/>

            </div>

            <div class="form-group">
                <label for="prix">Prix :</label>
                <input type="text" class="form-control" name="prix" value="{{ $car->prix }}"/>
            </div>
            <div class="form-group">
                <label for="telephone">Telephone</label>
                <input type="text" class="form-control" name="telephone" value="{{ $car->telephone }}"/>

            </div>
            <div class="col text-center">
            <button type="submit" class="btn btn-primary mt-3">Enregistrer</button>
            <a href="{{route('car')}}" class="btn btn-danger mt-3">Annuler</a>
        </div>
            </form>
            

</div>
</div>
@endsection