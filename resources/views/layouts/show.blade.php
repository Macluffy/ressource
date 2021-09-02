@extends('template.welcome')

@section('content')
<div class="card" style="width: 18rem;">
  <img src="{{$photo->url}}" class="card-img-top">
  <div class="card-body ">
    <h5 class="card-title">{{$photo->nom}} </h5>
    <p class="card-text">{{$photo->description}}</p>
    <a href="{{route('photos.create')}}" class="btn btn-primary">Go back</a>
  </div>
</div>



@endsection