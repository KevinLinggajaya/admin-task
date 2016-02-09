<div class="well">
  {!! Form::open(array('url' => $formUrl, 'class' => 'form form-horizontal')) !!}
  {!! Form::hidden('_method',$method) !!}
  <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
    {!! Form::label("name", "Name", array('class' => 'col-md-2 control-label'))!!}
    <div class="col-md-10">
      {!! Form::text('name', $business->name, ['class' => 'form-control', 'placeholder' => 'Name', 'autofocus' => 'autofocus']) !!}
      @if ($errors->has('name'))
        {!! $errors->first('name', '<small class=error>:message</small>') !!}
      @endif
    </div>
  </div>
  <div class="form-group {!! $errors->has('contact') ? 'has-error' : '' !!}">
    {!! Form::label("contact", "Contact", ['class' => 'col-md-2 control-label'])!!}
    <div class="col-md-10">
      {!! Form::text('contact', $business->contact, ['class' => 'form-control', 'placeholder' => 'Contact']) !!}
      @if ($errors->has('contact'))
        {!! $errors->first('contact', '<small class=error>:message</small>') !!}
      @endif
    </div>
  </div>
  <div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
    {!! Form::label("email", "Email", ['class' => 'col-md-2 control-label'])!!}
    <div class="col-md-10">
      {!! Form::email('email', $business->email, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
      @if ($errors->has('email'))
        {!! $errors->first('email', '<small class=error>:message</small>') !!}
      @endif
    </div>
  </div>
  <div class="form-group {!! $errors->has('line_1') ? 'has-error' : '' !!}">
    {!! Form::label("line_1", "Address", ['class' => 'col-md-2 control-label'])!!}
    <div class="col-md-10">
      {!! Form::text('line_1', $business->line_1, ['class' => 'form-control', 'placeholder' => 'address']) !!}
      @if ($errors->has('line_1'))
        {!! $errors->first('line_1', '<small class=error>:message</small>') !!}
      @endif
      {!! Form::text('line_2', $business->line_2, ['class' => 'form-control']) !!}
      {!! Form::text('line_3', $business->line_3, ['class' => 'form-control']) !!}
    </div>
  </div>
  <div class="form-group {!! $errors->has('city') ? 'has-error' : '' !!}">
    {!! Form::label("city", "City", ['class' => 'col-md-2 control-label'])!!}
    <div class="col-md-10">
      {!! Form::text('city', $business->city, ['class' => 'form-control', 'placeholder' => 'City']) !!}
      @if ($errors->has('city'))
        {!! $errors->first('city', '<small class=error>:message</small>') !!}
      @endif
    </div>
  </div>
  <div class="form-group {!! $errors->has('state') ? 'has-error' : '' !!}">
    {!! Form::label("state", "State", ['class' => 'col-md-2 control-label'])!!}
    <div class="col-md-10">
      {!! Form::text('state', $business->state, ['class' => 'form-control', 'placeholder' => 'State']) !!}
      @if ($errors->has('state'))
        {!! $errors->first('state', '<small class=error>:message</small>') !!}
      @endif
    </div>
  </div>
  <div class="form-group {!! $errors->has('postcode') ? 'has-error' : '' !!}">
    {!! Form::label("postcode", "Postcode", ['class' => 'col-md-2 control-label'])!!}
    <div class="col-md-2">
      {!! Form::text('postcode', $business->postcode, ['class' => 'form-control', 'placeholder' => 'Postcode']) !!}
      @if ($errors->has('postcode'))
        {!! $errors->first('postcode', '<small class=error>:message</small>') !!}
      @endif
    </div>
  </div>

  <div class="form-group">
    <div class="col-md-offset-2 col-md-10">
      {!! Form::submit('Submit', ['class' => 'btn ' . env('BTN_SUBMIT')]) !!}
      <a class="btn {{ env('BTN_CANCEL')}}" href="{{ action('BusinessController@index')}}">Cancel</a>
    </div>
  </div>
  {!! Form::close() !!}
</div>