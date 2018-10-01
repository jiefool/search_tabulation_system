<style>
	.btn-primary{

		width: 100px;
		height: 40px;

</style>

@extends('layouts.app')

@section('content')

<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('ADD NEW CRITERIA') }}</div>

                <div class="card-body">
                    <form method="POST" >
                        @csrf


                        <div class="form-group row">
                            <label  class="col-sm-3 col-form-label text-md-right">{{ __('NAME') }}</label>

                            <div class="col-md-7">
                                <input id="name" type="text" class="form-control" name="name"  required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label  class="col-md-3 col-form-label text-md-right">{{ __('WEIGHT') }}</label>

                            <div class="col-md-7">
                                <input id="weight" type="number" class="form-control" name="weight" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md- offset-md-5">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('SUBMIT') }}
                                </button>

                               
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection