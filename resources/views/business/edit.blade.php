@extends('layouts.master')

@section('title')
  {{ env('TITLE') }} Business - Edit
@stop

@section('content')
  <h1>Edit Business</h1>
  @include('business._form',[
    "formUrl" => action("BusinessController@update", $business->id),
    "method" => "put"
  ])
@stop