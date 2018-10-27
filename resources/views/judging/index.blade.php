@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">

    @foreach($categories as $category)
    <div class="card col-md-3" style="padding:10px;">
      <div class="card-body">
        <h5 class="card-title">{{$category->name}}</h5>
        <p class="card-text">{{$category->description}}</p>
        <p class="card-text">weight: {{$category->weight}}</p>
        <h4>Criteria</h4>
        <div class="list-group">
          @foreach($category->criteria as $critereon)
            <div class="list-group-item">{{$critereon->name}}: {{$critereon->weight}}%</div>
          @endforeach
          <div class="list-group-item">
            <a href="{{ route('judging.categories.id.candidates', array('id'=>$category->id)) }}" class="btn btn-primary btn-block">Judge Category</a>
          </div>
        </div>
        
      </div>
    </div>
    @endforeach
  

  </div>
</div>
@endsection
