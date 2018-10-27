<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card">
                    <div class="card-header"><b>{{$action}} Criterion</b></div>

                    <div class="card-body">

                        <form action="{{ $form_action }}" method="post"> {{ csrf_field() }}

                            <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text" id="basic-addon1"><b>Name</b></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="e.g. Gracefulness" aria-label="swimwear" aria-describedby="basic-addon1" name="name" value="{{$critereon->name}}" />
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="basic-addon1"><b>Weight</b></span>
                                </div>
                                <select class="custom-select" name="weight"/>
                                    <option value="" @if($critereon->weight == 0) selected @endif>Please select</option>
                                    @for($i=5;$i<=100;$i+=5)
                                        <option value="{{$i}}" @if($critereon->weight == $i) selected @endif>{{$i}}%</option>
                                    @endfor
                                </select>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <a class="btn btn-success" href="{{ route('admin.categories.id.show', array('id'=>$critereon->category->id)) }}">Back</a>
                                    <button type="submit" class="btn btn-primary">
                                       {{$action}} Critereon
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>