@extends('layouts.app')

@section('content')
<form action="" method="POST">
	{{ csrf_field() }}

	<label>  Name: </label>
	<input type="text" name="first_name"  />
	<br>
    <button type="submit">Save</button>

</form>
@endsection