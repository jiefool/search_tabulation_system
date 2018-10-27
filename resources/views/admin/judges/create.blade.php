@extends('layouts.app')
@section('content')
  @include('admin.judges._form', array('judge'=>$params['judge'], 'action'=>$params['action'], 'form_action'=>$params['form_action']))
@endsection