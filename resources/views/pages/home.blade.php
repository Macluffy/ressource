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
            <button class="btn btn-info">Edit</button>
            <button class="btn btn-warning">Show</button>
            <button class="btn btn-danger">Delete</button>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>




    
@endsection