@extends('layout')

@section('content')
<div class="my-3 p-3 bg-body rounder shadow-sm">
    <h3 class="border-bottom mt-3 text-center pb-2 mb-4 ">Liste des nouvelles voitures ajouter</h3>
<div class="mt-4"> 
    <div class="d-flex justify-content-end mb-2">
      <div><a href="{{route('car.create')}}" class="btn btn-primary">Ajout une nouvelle voiture</a></div>
      
    </div>
    <div class="mt-4">
        
    @if (session()->has('successDelete'))
         <div class="alert alert-success">
            <h3> {{ session()->get('successDelete') }}</h3>

         </div><br/>
        @endif
    </div>
    <style>
        .uper{
            margin-top: 40px;
         }
    </style>
         
        <table class="table table-bordered">
            <thead>
                     <tr>
                         <td>ID</td>
                         <td>Marque</td>
                         <td>Categorie</td>
                         <td>Model</td>
                         <td>Couleur</td>
                         <td>Annee</td>
                         <td>Prix</td>
                         <td>Telephone</td>
                         <td colspan="2">Action</td>

                     </tr>
            </thead>

                <tbody>
                    @foreach($voitures as $voiture)
                    <tr>
                        <td>{{$voiture->id}}</td>
                        <td>{{$voiture->marque}}</td>
                        <td>{{$voiture-> categorie}}</td>
                        <td>{{$voiture->model}}</td>
                        <td>{{$voiture->couleur}}</td>
                        <td>{{$voiture->annee}}</td>
                        <td>{{$voiture->prix}}</td>
                        <td>{{$voiture->telephone}}</td>
                        <td><a href="{{ route('car.edit', ['car'=>$voiture->id])}}" class="btn btn-primary">Editer</a></td>
                        <td>
                            <a href="#" class="btn btn-danger" onclick="if(confirm('Voulez vraiment supprimer cette voiture?'))
                            {document.getElementById('form-{{$voiture->id}}').submit()}">Supprimer</a>
                            <form id="form-{{$voiture->id}}" action="{{route('car.supprimer', ['car'=>$voiture->id])}}" method="POST">
                                @csrf
                                <input type="hidden" name="_method" value="delete">

                            </form>

                           {{-- <form action="{{ route('car.supprimer', $voiture->id)}}" method="post">
                              @csrf
                              @method('DELETE')
                              <button class="btn btn-danger" type="submit">Supprimer</button>
                            </form>--}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
        </table>
    </div>    
@endsection