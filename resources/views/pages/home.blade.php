@extends('template/welcome')




@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Url</th>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col">button</th>
      </tr>
    </thead>
    
        
    
    <tbody>
    @foreach ($data as $value)
      <tr>
        <th scope="row">{{$value->id}} </th>
        <td>{{$value->url}} </td>
        <td>{{$value->nom}} </td>
        <td>{{$value->description}} </td>
        <td class="d-flex justify-content-center">
            <a href="{{route('photos.edit', $value->id)}} " class="btn btn-info">Edit</a>


            <a href="{{route('photos.show', $value->id)}}" class="btn btn-warning">Show</a>
            

            <form action="{{route('photos.destroy', $value->id)}}" method="post">
              
              @csrf 
              @method('DELETE')
              <button class="btn btn-danger" type="submit">Delete</button>

            </form>
            
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <a class="btn btn-secondary" href="{{route('photos.create')}}">Create image</a>




    
@endsection