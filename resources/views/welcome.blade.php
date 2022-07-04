@extends('layout')
@section('content')

<h3 class="border-bottom mt-5 p-2 mb-4 text-center">Liste des nouvelles Voitures</h3>

@foreach ($cars as $car)
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      @foreach ($car->images as $image)
      <img src="{{asset($image->url)}}"class="d-block w-100" alt="...">
      @endforeach
      <div class="carousel-caption d-none d-md-block">
        <h5>Première photo</h5>
        <p>{{$car->marque}}</p>
      <p>{{ $car->categorie}}</p>
      <p>{{ $car->model}}</p>
      <p>{{ $car->couleur}}</p>
      <p>{{ $car->annee}}</p>
      <p>{{ $car->prix}}</p>
      <p>{{ $car->telephone}}</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset($image->url)}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Deuxième photo</h5>
        <p>{{$car->marque}}</p>
      <p>{{ $car->categorie}}</p>
      <p>{{ $car->model}}</p>
      <p>{{ $car->couleur}}</p>
      <p>{{ $car->annee}}</p>
      <p>{{ $car->prix}}</p>
      <p>{{ $car->telephone}}</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset($image->url)}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Troisième photo</h5>
        <p>{{$car->marque}}</p>
      <p>{{ $car->categorie}}</p>
      <p>{{ $car->model}}</p>
      <p>{{ $car->couleur}}</p>
      <p>{{ $car->annee}}</p>
      <p>{{ $car->prix}}</p>
      <p>{{ $car->telephone}}</p>
      </div>
    </div>
    @endforeach
      
  </div>
  <div>
  {{$car->updated_at}}
</div>
</div>
@endsection