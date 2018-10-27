@extends('layouts.app')

@section('content')
<div class="container-fluid">
<div class="row">
  @foreach($candidates as $candidate)
    <div class="col-md-6">
      <div class="card">
        <div class="card-header" data-background-color="green">
          <b>{{$candidate->full_name()}}</b>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <img src="{{asset('images')}}/{{$candidate->image_url}}" width="100%" />
              <div class="list-group">
                  <div class="list-group-item"><b>Age:</b> {{$candidate->age}}</div>
                  <div class="list-group-item"><b>Address:</b> {{$candidate->address}}</div>
                  <div class="list-group-item"><b>Vital Statistics:</b> {{$candidate->vital_statistics}}</div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="list-group">
                @foreach($category->criteria as $critereon)
                  <div class="list-group-item"><b>{{$critereon->name}}({{$critereon->weight}}):</b></div>
                @endforeach
                <div class="list-group-item">
                  <a href="" class="btn btn-primary btn-block">Save</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endforeach
</div>
</div>
@endsection