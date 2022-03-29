@extends("Layout.app")

@section('content')
    <h1>Mes chansons</h1>
    <hr>
    <div class="row">
    @foreach ($chansons as $chanson)
    <div class="col-4 pt-2">
    <div class="card " >
        <img class="card-img-top" src="{{ $chanson->image }}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{ $chanson->titre }}</h5>
          <p class="card-text">{{ $chanson->auteur }}.</p>
          <p class="card-text">{{ $chanson->annee}} </p>
         <a href="" class="btn btn-primary">Voir plus</a>
        </div>
      </div>
     
    </div>
    @endforeach
</div>
@endsection