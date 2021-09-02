@extends('template.welcome')

@section('content')
<h1 class="text-center">Creer une photo</h1>
<form action="{{route('photos.store')}} " method="post">
@csrf

<div class="mb-3">
  <label  class="form-label">Url</label>
  <input type="text" class="form-control" name="url" >
</div>
<div class="mb-3">
  <label  class="form-label">Nom</label>
  <input type="text" class="form-control" name="nom"  >
</div>
<div class="mb-3">
  <label  class="form-label">Description</label>
  <textarea class="form-control" name="description" rows="3"></textarea>
</div>

<button type="submit" class="btn btn-info" >Create</button>


</form>





@endsection