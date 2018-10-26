@extends('layouts.app')

@section('content')
    @include('admin.categories._form', array('category'=>$params['category'],'form_action' => $params['form_action'], 'action'=>$params['action']))
@endsection