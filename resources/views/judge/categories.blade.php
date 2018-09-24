@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">

    {{--
    ********************************
               Loop this
    ********************************
    --}}

    <div class="card col-md-4">
      <div class="card-body">

        {{-- Category --}}
        <h5 class="card-title">Talent Night</h5>

        {{-- Category description --}}
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

        {{-- Route to category --}}
        <a href="#" class="btn btn-primary">View Category</a>
        
      </div>
    </div>

    {{--
    ********************************
               Loop this
    ********************************
    --}}

  </div>
</div>
@endsection
