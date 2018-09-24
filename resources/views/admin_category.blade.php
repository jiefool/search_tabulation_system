@extends('layouts.app')

@section('content')
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            
          
        </style>
    </head>
    <body>

   
                
                <div class="container-fluid">
                   
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="green">
                                    <h1 class="title"><b>Categories</b></h1>
                                   
                                </div>
                                <div class="card-content table-responsive">
                                    
                                    <table class="table table-bordered" id="dataTable">
                                        <thead style="font-weight: bold;color: black;font-size: 150%">
                                            <th>Category Name</th>
                                            <th>Criteria</th>
                                            <th>&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                                            
                                            
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Swimwear</td>
                                                <td>- fit <br>- vitals</td>
                                                <td>&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                                                
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td><button class = 'btn btn-info'>Add New Category</button></td>
                                                
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                            
                    </div>
                </div>
           
    </body>
</html>
@endsection