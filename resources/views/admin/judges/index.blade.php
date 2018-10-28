@extends('layouts.app')
@section('content')
<div class="panel panel-default">
  <div class="panel-heading">Judges</div>
  <table class="table">
    <thead>
      <tr>
        <td>Name</td>
        <td>Username</td>
        <td>Email</td>
        <td>Password</td>
        <td>Action</td>
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
          <a href="{{ route('admin.judges.id.edit', array('id'=>$judge->id)) }}">Edit</a>
          |
          <a href="javascript: $('#judge-{{$judge->id}}').submit()">Delete</a>
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
@endsection