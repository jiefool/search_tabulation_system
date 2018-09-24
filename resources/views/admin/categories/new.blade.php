@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header"><b>ADD CATEGORY</b></div>

                    <div class="card-body">

                            <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text" id="basic-addon1"><b>NAME</b></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="ex. Swim Wear" aria-label="Username" aria-describedby="basic-addon1">
                            </div>

                            <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                           ADD CATEGORY
                                        </button>
                                    </div>
                            </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection