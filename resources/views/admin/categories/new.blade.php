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
                                    <input type="text" class="form-control" placeholder="ex. Swim Wear" aria-label="swimwear" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="basic-addon1"><b>WEIGHT</b></span>
                                </div>
                                <select class="custom-select">
                                    <option selected></option>
                                    <option value="5">5%</option>
                                    <option value="10">10%</option>
                                    <option value="15">15%</option>
                                    <option value="20">20%</option>
                                    <option value="25">25%</option>
                                    <option value="30">30%</option>
                                    <option value="35">35%</option>
                                    <option value="40">40%</option>
                                    <option value="45">45%</option>
                                    <option value="50">50%</option>
                                    <option value="55">55%</option>
                                    <option value="60">60%</option>
                                    <option value="65">65%</option>
                                    <option value="70">70%</option>
                                    <option value="75">75%</option>
                                    <option value="80">80%</option>
                                    <option value="85">85%</option>
                                    <option value="90">90%</option>
                                    <option value="95">95%</option>
                                    <option value="100">100%</option>
                                </select>
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