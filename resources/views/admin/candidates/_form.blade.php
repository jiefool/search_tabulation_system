<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card">
                    <div class="card-header"><b>{{$action}} Candidates</b></div>

                    <div class="card-body">

                        <form action="{{ $form_action }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="basic-addon1"><b>Candidate Number</b></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Juan De La" aria-label="swimwear" aria-describedby="basic-addon1" name="candidate_number" value="{{$candidate->candidate_number}}">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="basic-addon1"><b>First Name</b></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Juan De La" aria-label="swimwear" aria-describedby="basic-addon1" name="first_name" value="{{$candidate->first_name}}">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="basic-addon1"><b>Last Name</b></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Cruz" aria-label="swimwear" aria-describedby="basic-addon1" name="last_name" value="{{$candidate->last_name}}">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="basic-addon1"><b>Middle Name</b></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Santos" aria-label="swimwear" aria-describedby="basic-addon1" name="middle_name" value="{{$candidate->middle_name}}">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="basic-addon1"><b>Image</b></span>
                                </div>
                                <input type="file" class="form-control" placeholder="Santos" aria-label="swimwear" aria-describedby="basic-addon1" name="image" value="{{$candidate->image_url}}">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="basic-addon1"><b>Contact Number</b></span>
                                </div>
                                <input type="text" class="form-control" placeholder="09564114308" aria-label="swimwear" aria-describedby="basic-addon1" name="contact_number" value="{{$candidate->contact_number}}">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="basic-addon1"><b>Age</b></span>
                                </div>
                                <input type="number" class="form-control" placeholder="28" aria-label="swimwear" aria-describedby="basic-addon1" name="age" value="{{$candidate->age}}">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="basic-addon1"><b>Address</b></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Tabalong" aria-label="swimwear" aria-describedby="basic-addon1" name="address" value="{{$candidate->address}}">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="basic-addon1"><b>Vital Statistics</b></span>
                                </div>
                                <input type="text" class="form-control" placeholder="42-28-32" aria-label="swimwear" aria-describedby="basic-addon1" name="vital_statistics" value="{{$candidate->vital_statistics}}">
                            </div>

                            

                            <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <a href="{{ route('admin.candidates.index') }}" class="btn btn-primary">Back</a>
                                        <button type="submit" class="btn btn-primary">
                                           {{$action}} Candidate
                                        </button>
                                    </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>