@extends('layout.design')

@section('content')
<h1>Customer Booking</h1>
{!! Form::open(['url' => "contact/update/$messages->id"]) !!}
{{csrf_field()}}
    <div class="form-group">
    {{Form::label('name', 'Name')}}
    {{Form::text('name', "$messages->name", ['class' => 'form-control', 'placeholder' => 'Enter Name'])}}
   </div>
   <div class="form-group">
   {{Form::label('phone', 'Phone No')}}
   {{Form::text('phone', "$messages->phone", ['class' => 'form-control', 'placeholder' => 'XXX-YYYYYYY'])}}
  </div>
   <div class="form-group">
   {{Form::label('email', 'E-Mail Address')}}
   {{Form::text('email', "$messages->email", ['class' => 'form-control', 'placeholder' => 'example@gmail.com'])}}
  </div>
  <div class="form-group">
  {{Form::label('date', 'Date')}}
  {{Form::text('date', "$messages->date", ['class' => 'form-control','id' => 'datepicker'])}}
</div>
 <div class="form-group">
 {{Form::label('time', 'Time')}}
 {{Form::text('time', "$messages->time", ['class' => 'form-control', 'id' => 'timepicker'])}}
</div>
<div class="form-group">
{{Form::label('people', 'No. of People')}}
{{Form::number('people', "$messages->people", ['class' => 'form-control', 'min' => 0])}}
</div>
  <div class="form-group">
  {{Form::label('request', 'Special Request')}}
  {{Form::textarea('request', "$messages->message", ['class' => 'form-control', 'placeholder' => 'Enter request'])}}
 </div>
<div>
  <button class="btn btn-primary" type="submit" name="action" value="update">Update</button>
  <button class="btn btn-success" type="submit" name="action" value="confirm">Confirm Reservation</button>
</div>
<br>
<br>
{!! Form::close() !!}
@endsection
