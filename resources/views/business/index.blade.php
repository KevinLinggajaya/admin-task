@extends("layouts.master")

@section('title')
  {{ env('TITLE') }} Businesses
@stop

@section("content")
  <div class="row">
    <div class="col-sm-12">
      <h1>Business</h1>
      <div class="panel panel-default">
        <div class="panel-heading">
          <a class="btn {{ env('BTN_ADD') }}" href="{{ action('BusinessController@create')}}">Add New Business</a>
        </div>
      </div>

      <div class="table-responsive">
        <table class="table table-striped table-hover">
          <thead>
          <tr class="{{ env("TBL_HEAD") }}">
            <th>Name</th>
            <th>Contact</th>
            <th>Email</th>
            <th>City</th>
            <th>State</th>
            <th>Postcode</th>
            <th>Action</th>
          </tr>
          </thead>
          <tbody>
          @foreach ($businesses as $business)
            <tr>
              <td>{{$business->name}}</td>
              <td>{{$business->contact}}</td>
              <td>{{$business->email}}</td>
              <td>{{$business->city}}</td>
              <td>{{$business->state}}</td>
              <td>{{$business->postcode}}</td>
              <td class="col-sm-1 nowrap">
                <a class="btn {{ env('BTN_EDIT') }} btn-xs" href="{{ action('BusinessController@edit', $business->id) }}">Edit</a>
                {!! Form::open(array('url' => action('BusinessController@destroy', $business->id), 'class' => 'form-delete')) !!}
                {!! Form::hidden('_method', 'delete') !!}
                <button type="submit" class="btn {{ env('BTN_DELETE' )}} btn-xs">Delete</button>
                {!! Form::close() !!}
              </td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection