@extends('layouts.app')
@section('content')
Category name: <b>{{$category->name}}</b>
Category weight: <b>{{$category->weight}}</b>
<table class="table">
  <thead>
    <tr>
      <td>
        Criteria
      </td>
      <td>
        Weight
      </td>
      <td>
        Action
      </td>
    </tr>
  </thead>
  <tbody>
    @foreach($category->criteria as $critereon)
      <tr>
        <td>{{ $critereon->name }}</td>
        <td>{{ $critereon->weight }}</td>
        <td>
          <a href="{{ route('admin.categories.cid.criteria.id.edit', array('cid'=>$category->id, 'id' => $critereon->id)) }}">Edit</a>
          |
          <a href="javascript: $('#critereon-{{$critereon->id}}').submit()">Delete</a>
          <form id="critereon-{{$critereon->id}}" method="post" action="{{ route('admin.categories.cid.criteria.id.delete', array('cid'=>$category->id, 'id'=>$critereon->id)) }}">
            {{ csrf_field() }}
          </form>
        </td>
      </tr>
    @endforeach
    <tr>
      <td colspan="3">
        <a class="btn btn-primary" href="{{ route('admin.categories.id.criteria.create', array('id'=>$category->id)) }}">Add Criteria</a>
      </td>
    </tr>
  </tbody>
</table>
@endsection