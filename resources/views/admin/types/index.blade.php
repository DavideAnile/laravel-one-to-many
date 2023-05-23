@extends('layouts/admin')

@section('content')

<h1 class="text-center p-3">All types</h1>

<table class="table table-striped">
    <thead>
        <tr>
            
            <th scope="col">Tipologia</th>
            <th scope="col">Descrizione Tipologia </th>
            <th scope="col">Slug</th>
            <th scope="col">Mostra Progetti</th>
            
            
        </tr>
    </thead>
    <tbody>
    @foreach ($types as $singleType)
  <tr>
    
    <td>{{$singleType->name}}</td>
    <td>{{$singleType->description}}</td>
    <td>{{$singleType->slug}}</td>
    <td class="text-center"><a href="{{route('admin.types.show', $singleType)}}"><i class="fa-solid fa-link"></i></a></td>  
  </tr>
  
  @endforeach
</tbody>
</table>
    
@endsection