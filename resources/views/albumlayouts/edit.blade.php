@extends('template.welcome')

@section('content')
<h1 class="text-center">edit photo</h1>
<form action="{{route('albumes.update' , $album->id)}} " method="post">
@csrf
@method('PUT')


<div class="mb-3">
  <label  class="form-label">Nom</label>
  <input type="text" class="form-control" value="{{$photo->nom}}"  name="nom"  >
</div>

<div class="mb-3">
  <label  class="form-label">Date</label>
  <input type="text" class="form-control" value="{{$photo->date}}"  name="date" >
</div>

<div class="mb-3">
  <label  class="form-label">Auteur</label>
  <input type="text" class="form-control" value="{{$photo->auteur}}"  name="auteur" >
</div>

<div class="mb-3">
  <label  class="form-label">Profession</label>
  <input type="text" class="form-control" value="{{$photo->profession}}"  name="profession" >
</div>

<div class="mb-3">
  <label  class="form-label">Age</label>
  <input type="text" class="form-control" value="{{$photo->age}}"  name="age" >
</div>


<div class="mb-3">
  <label  class="form-label">Description</label>
  <textarea class="form-control" name="description" value="{{$photo->description}}"  rows="3"></textarea>
</div>

<button type="submit" class="btn btn-info" >edit</button>


</form>



@endsection