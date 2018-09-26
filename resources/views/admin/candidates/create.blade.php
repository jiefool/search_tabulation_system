@extends('layouts.app')

@section('content')
<form action="" method="POST">
	{{ csrf_field() }}

	<label> First Name: </label>
	<input type="text" name="first_name"  />
	<br>
	<label> Last Name: </label>
	<input type="text" name="first_name"  />
	<br>
	<label> Age: </label>
	<input type="number" name="age" />
	<br>  
    <label> Candiate No: </label>
    <input type="text" name="address" />
    <br>
    <label> Team: </label>
	<select>
 	 <option value="space">Space Stone</option>
 	 <option value="reality">Reality Stone</option>
 	 <option value="power">Power Stone</option>
 	 <option value="mind">Mind Stone</option>
</select>
    <label> Gender </label>
    <input type="radio" name="gender" value="male"> Male<br>
    <input type="radio" name="gender" value="female"> Female<br>
    
    <button type="submit">Save</button>

</form>
@endsection