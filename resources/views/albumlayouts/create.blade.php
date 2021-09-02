@extends('template.welcome')

@section('content')
<h1 class="text-center">Creer une albume</h1>
<form action="{{route('albumes.store')}} " method="post">
@csrf


<div class="mb-3">
  <label  class="form-label">Nom</label>
  <input type="text" class="form-control" name="nom"  >
</div>
<div class="mb-3">
  <label  class="form-label">Date</label>
  <input type="text" class="form-control" name="date" >
</div>

<div class="mb-3">
  <label  class="form-label">Auteur</label>
  <input type="text" class="form-control" name="auteur" >
</div>

<div class="mb-3">
  <label  class="form-label">Profession</label>
  <input type="text" class="form-control" name="profession" >
</div>

<div class="mb-3">
  <label  class="form-label">Age</label>
  <input type="text" class="form-control" name="age" >
</div>

<div class="mb-3">
  <label  class="form-label">Description</label>
  <textarea class="form-control" name="description" rows="3"></textarea>
</div>

<button type="submit" class="btn btn-info" >Create</button>


</form>





@endsection