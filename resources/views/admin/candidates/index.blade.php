@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h1 class="title">
                <b>
                    Candidates
                </b>
            </h1>
               
            <div class="row">
            @foreach($candidates as $candidate)
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header" data-background-color="green">
                            <b>{{$candidate->full_name()}}</b>
                        </div>
                        <div class="card-body">
                            <img src="{{asset('images')}}/{{$candidate->image_url}}" width="100%" />
                            <div class="list-group">
                                <div class="list-group-item"><b>Age:</b> {{$candidate->age}}</div>
                                <div class="list-group-item"><b>Address:</b> {{$candidate->address}}</div>
                                <div class="list-group-item"><b>Vital Statistics:</b> {{$candidate->vital_statistics}}</div>
                            </div>
                            <a href="{{ route('admin.candidates.id.edit', array('id'=>$candidate->id)) }}">Edit</a>
                            |
                            <a href="javascript: $('#candidate-{{$candidate->id}}').submit()">Delete</a>
                            <form id="candidate-{{$candidate->id}}" method="post" action="{{ route('admin.candidates.id.delete', array('id'=>$candidate->id)) }}">
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>

            <br/>
            <a href="{{ route('admin.candidates.create') }}" class="btn btn-primary">Add Candidate</a>
        </div>

    </div>
</div>
@endsection