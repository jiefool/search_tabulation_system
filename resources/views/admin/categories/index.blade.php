@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" data-background-color="green">
                    <h1 class="title">
                        <b>
                            Categories
                        </b>
                    </h1>
                </div>
                <div class="card-content table-responsive">
                    <table class="table table-bordered" id="dataTable">
                        <thead style="font-weight: bold;color: black;font-size: 150%">
                            <th>Category Name</th>
                            <th>Weight</th>
                            <th>Criteria</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                            <tr>
                                <td>{{$category->name}}</td>
                                <td>{{$category->weight}}</td>

                                <td>
                                    <ul>
                                        @foreach($category->criteria as $critereon)
                                            <li>{{$critereon->name}} - {{$critereon->weight}}</li>
                                        @endforeach
                                    </ul>
                                </td>
                                <td>
                                    <a href="{{ route('admin.categories.id.show', array('id'=>$category->id)) }}" class = 'btn btn-info'>
                                        Show
                                    </a>
                                    <a href="{{ route('admin.categories.id.edit', array('id'=>$category->id)) }}" class = 'btn btn-info'>
                                        Edit
                                    </a>
                                </td>

                        
                            </tr>
                            @endforeach
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                            <td><a href="{{ route('admin.categories.create') }}" class = 'btn btn-info'>Add New Category</a></td>
                                
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
            
    </div>
</div>
@endsection