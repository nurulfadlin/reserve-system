@extends('layout.design')

@section('content')

<h1>View Reservation</h1>
<br>
<ul class="list-group">
  <li class="list-group-item"><strong>Name:</strong> {{$messages->name}}</li>
  <li class="list-group-item"><strong>Phone:</strong> {{$messages->phone}}</li>
  <li class="list-group-item"><strong>Email Address:</strong> {{$messages->email}}</li>
  <li class="list-group-item"><strong>Date:</strong> {{$messages->date}}</li>
  <li class="list-group-item"><strong>Time:</strong> {{$messages->time}}</li>
  <li class="list-group-item"><strong>No. of People:</strong> {{$messages->people}}</li>
  <li class="list-group-item"><strong>Booking Status:</strong> {{$messages->message}}</li>
@if($messages->status=="Waiting for confirmation")
  <li class="list-group-item"><strong>Booking Status:</strong><span style="color:red"> {{$messages->status}}</span></li>
@elseif($messages->status=="Arrived")
    <li class="list-group-item"><strong>Booking Status:</strong><span style="color:blue"> {{$messages->status}}</span></li>
@elseif($messages->status=="Not Arrived")
        <li class="list-group-item"><strong>Booking Status:</strong><span style="color:grey"> {{$messages->status}}</span></li>
@else
  <li class="list-group-item"><strong>Booking Status:</strong> <span style="color:green"> {{$messages->status}}</span></li>
@endif
</ul>

@endsection
