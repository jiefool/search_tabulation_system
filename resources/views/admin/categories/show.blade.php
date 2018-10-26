@extends('layouts.app')
@section('content')
Category name: {{$category->name}}
Category weight: {{$category->weight}}
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