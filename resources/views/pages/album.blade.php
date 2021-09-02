@extends('template/welcome')




@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nom</th>
        <th scope="col">Date</th>
        <th scope="col">Auteur</th>
        <th scope="col">Profession</th>
        <th scope="col">Age</th>
        <th scope="col">Description</th>
        <th scope="col">Button</th>

      </tr>
    </thead>
    
        
    
    <tbody>
    @foreach ($data as $value)
      <tr>
        <th scope="row">{{$value->id}} </th>
        <td>{{$value->nom}} </td>
        <td>{{$value->date}} </td>
        <td>{{$value->auteur}} </td>
        <td>{{$value->profession}} </td>
        <td>{{$value->age}} </td>
        <td>{{$value->description}} </td>
        <td class="d-flex justify-content-center">
            <a href="{{route('albumes.edit', $value->id)}} " class="btn btn-info">Edit</a>


            <a href="{{route('albumes.show', $value->id)}}" class="btn btn-warning">Show</a>
            

            <form action="{{route('albumes.destroy', $value->id)}}" method="post">
              
              @csrf 
              @method('DELETE')
              <button class="btn btn-danger" type="submit">Delete</button>

            </form>
            
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <a class="btn btn-secondary" href="{{route('albumes.create')}}">Create album</a>




    
@endsection