@extends('template.welcome')

@section('content')
<div class="card" style="width: 18rem;">
  <div class="card-body ">
    <h5 class="card-title">{{$album->nom}} </h5>
    <p class="card-text">{{$album->date}}</p>
    <p class="card-text">{{$album->auteur}}</p>
    <p class="card-text">{{$album->profession}}</p>
    <p class="card-text">{{$album-><span class="ai-gear"></span>}}</p>
    <p class="card-text">{{$album->description}}</p>
    <a href="{{route('albumes.create')}}" class="btn btn-primary">Go back</a>
  </div>
</div>



@endsection