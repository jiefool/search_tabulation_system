@extends('layouts.app')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <h3>Judges</h3>
      <table class="table">
        <thead>
          <tr>
            <th>Name</th>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($judges as $judge)
          <tr>
            <td>{{$judge->name}}</td>
            <td>{{$judge->username}}</td>
            <td>{{$judge->email}}</td>
            <td>{{$judge->passcode}}</td>
            <td>
              <a class="btn btn-warning" href="{{ route('admin.judges.id.edit', array('id'=>$judge->id)) }}">Edit</a>
              <a class="btn btn-danger" href="javascript: $('#judge-{{$judge->id}}').submit()">Delete</a>
              <form id="judge-{{$judge->id}}" action="{{ route('admin.judges.id.delete', array('id'=>$judge->id)) }}" method="post">
                {{csrf_field()}}
              </form>
            </td>
          </tr>
          @endforeach
          <tr>
            <td colspan="5">
              <a href="{{ route('admin.judges.create') }}" class="btn btn-success btn-block">Add Judge</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection