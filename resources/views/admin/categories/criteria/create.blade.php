@extends('layouts.app')

@section('content')
    @include('admin.categories.criteria._form', array('critereon'=>$params['critereon'],'form_action' => $params['form_action'], 'action'=>$params['action']))
@endsection