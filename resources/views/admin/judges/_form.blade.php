<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card">
                    <div class="card-header"><b>{{$action}} Judges</b></div>

                    <div class="card-body">

                        <form action="{{ $form_action }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                             <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="basic-addon1"><b>Name</b></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Juan De La" aria-label="swimwear" aria-describedby="basic-addon1" name="name" value="{{$judge->name}}">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="basic-addon1"><b>Username</b></span>
                                </div>
                                <input type="text" class="form-control" placeholder="username123" aria-label="swimwear" aria-describedby="basic-addon1" name="username" value="{{$judge->username}}">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="basic-addon1"><b>Password</b></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Santos" aria-label="swimwear" aria-describedby="basic-addon1" name="passcode" value="{{$judge->passcode}}">
                            </div>

                            <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <a href="{{ route('admin.candidates.index') }}" class="btn btn-primary">Back</a>
                                        <button type="submit" class="btn btn-primary">
                                           {{$action}} Judge
                                        </button>
                                    </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>