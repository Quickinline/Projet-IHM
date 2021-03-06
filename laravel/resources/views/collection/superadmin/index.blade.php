@extends('layouts.dashboard')

@section('content')

@push('title')
    Liste des collections
@endpush

<div class="container">
    <div class="row">
@foreach ($Collection as $item )
@php $nb=0 @endphp
@foreach ($Lesion as $X )
  @if($X->collection_id == $item->id)
  @php $nb++ @endphp
  @endif

@endforeach
<div class="col-md-4">
<div class="card m-2">
  <div class="card-body">
    <h5 class="card-title">{{$item->name}}</h5>
    <hr>
    <h6 class="card-subtitle mb-2 text-muted"> </h6>
    <p class="card-text"><span class="font-weight-bold"> Utilisateur:</span> {{$item->user['Firstname']." ".$item->user['Lastname'] }} </p>
    <p class="card-text">Nombre de lesions : {{$nb}} </p>

  <a href="{{url('/Lesions',['Lesion'=>$item->id])}}" class="card-link">Afficher les lesions</a>

  </div>
</div>
</div>


@endforeach
</div>
<div class="row justify-content-center d-flex" >{{$Collection->links()}} </div>
</div>

@endsection
