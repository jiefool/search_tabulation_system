@extends('layouts.app')

@section('content')
<div class="container-fluid">
<div class="row">
  <div class="col-md-12">
    <h1>Category: {{$category->name}} ({{$category->weight}}%)</h1>
  </div>
  @foreach($candidates as $candidate)
    <div class="col-md-6">
      <div class="card">
        <div class="card-header" data-background-color="green">
          <b>{{$candidate->candidate_number}}. {{$candidate->full_name()}}</b>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <img src="{{asset('images')}}/{{$candidate->image_url}}" width="100%" />
              <div class="list-group">
                  <div class="list-group-item"><b>Address:</b> {{$candidate->address}}</div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="list-group">
                <form method="post" action="{{ route('judging.candidate.category', array('category_id'=>$category->id, 'candidate_id'=>$candidate->id))}}" id="candidate-{{$candidate->id}}">
                  {{csrf_field()}}
                @foreach($category->criteria as $critereon)
                  <div class="list-group-item">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1"><b>{{$critereon->name}}({{$critereon->weight}}%):</b></span>
                        </div>
                        <input type="number" inputmode="numeric" max="{{$critereon->weight}}" class="form-control critereon-input" placeholder="0" aria-label="" aria-describedby="basic-addon1" name="weight_{{$critereon->id}}" value="{{$cjcw[$candidate->id][Auth::user()->id][$category->id][$critereon->id]}}">
                    </div>
                  </div>
                @endforeach
                </form>
                <div class="list-group-item">
                  <a href="javascript: $('#candidate-{{$candidate->id}}').submit()" class="btn btn-primary btn-block">Save</a>
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

<div id="dialog" title="Warning" style="width:90%">
  <p>
    Please enter less than or equal to <span id="critereon-max">0</span>%.
  </p>
</div>
@endsection