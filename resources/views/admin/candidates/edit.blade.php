@extends('layouts.app')
@section('content')
  @include('admin.candidates._form', array('candidate'=>$params['candidate'], 'action'=>$params['action'], 'form_action'=>$params['form_action']))
@endsection