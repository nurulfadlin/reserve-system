@extends('layout.design')

@section('content')
<h1>Make a Reservation</h1>
<br>
{!! Form::open(['url' => 'contact/submit']) !!}
{{csrf_field()}}
    <div class="form-group">
    {{Form::label('name', 'Name')}}
    {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter Name'])}}
   </div>
   <div class="form-group">
   {{Form::label('phone', 'Phone No')}}
   {{Form::text('phone', '', ['class' => 'form-control', 'placeholder' => 'XXX-YYYYYYY'])}}
  </div>
   <div class="form-group">
   {{Form::label('email', 'E-Mail Address')}}
   {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'example@gmail.com'])}}
  </div>
  <div class="form-group">
  {{Form::label('date', 'Date')}}
  {{Form::text('date', '', ['class' => 'form-control','id' => 'datepicker'])}}
</div>
 <div class="form-group">
 {{Form::label('time', 'Time')}}
 {{Form::text('time', '', ['class' => 'form-control', 'id' => 'timepicker'])}}
</div>
<div class="form-group">
{{Form::label('people', 'No. of People')}}
{{Form::number('people', '', ['class' => 'form-control', 'min' => 0])}}
</div>
  <div class="form-group">
  {{Form::label('request', 'Special Request')}}
  {{Form::textarea('request', '', ['class' => 'form-control', 'placeholder' => 'Enter request'])}}
 </div>
<div>
  {{Form::submit('Submit',['class' => 'btn btn-primary'])}}
</div>
<br>
<br>
{!! Form::close() !!}
@endsection
