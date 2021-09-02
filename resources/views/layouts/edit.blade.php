@extends('template.welcome')

@section('content')
<h1 class="text-center">edit photo</h1>
<form action="{{route('photos.update' , $photo->id)}} " method="post">
@csrf
@method('PUT')

<div class="mb-3">
  <label  class="form-label">Url</label>
  <input type="text" class="form-control" value="{{$photo->url}}" name="url" >
</div>
<div class="mb-3">
  <label  class="form-label">Nom</label>
  <input type="text" class="form-control" value="{{$photo->nom}}"  name="nom"  >
</div>
<div class="mb-3">
  <label  class="form-label">Description</label>
  <textarea class="form-control" name="description" value="{{$photo->description}}"  rows="3"></textarea>
</div>

<button type="submit" class="btn btn-info" >edit</button>


</form>



@endsection