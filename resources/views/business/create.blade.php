@extends('layouts.master')

@section('title')
  {{ env('TITLE') }} Business - Create
@stop

@section('content')
  <h1>Create Business</h1>
  @include('business._form', [
    'formUrl' => action("BusinessController@store"),
    'method' => "post"
  ])
@stop