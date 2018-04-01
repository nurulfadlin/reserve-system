@extends('layout.design')

@section('content')
<h1>Reservation List</h1>
<br>
{!! Form::open(['method'=>'GET','url'=>'/search','class'=>'navbar-form navbar-left','role'=>'search'])  !!}
<div class="input-group custom-search-form">
<input type="text" class="form-control" name="searchName" placeholder="Enter Name">
<input type="text" class="form-control" name="searchDate" placeholder="Enter Date" id ="datepicker">
<span class="input-group-btn">
<button class="btn btn-secondary" type="submit">Search</button>
</span>
</div>
{!! Form::close() !!}
<br>
<table class="table table-striped table-hover">
<thead>
  <tr>
    <th>No.</th>
    <th>Name</th>
    <th>Email</th>
    <th>Date</th>
    <th>Time</th>
    <th>Status</th>
    <th>Action</th>
  </tr>
</thead>
<tbody>
  <?php $no=0; ?>
@if(count($messages) > 0)
@foreach($messages as $message)
<?php $no++; ?>
  <tr>
     <td>{{$no}}</td>
    <td>{{$message->name}}</td>
    <td>{{$message->email}}</td>
    <td>{{$message->date}}</td>
    <td>{{$message->time}}</td>
    <td>
      @if($message->status=="Waiting for confirmation")
      <span style="color:red"> {{$message->status}}</span>
      @elseif($message->status=="Arrived")
      <span style="color:blue"> {{$message->status}}</span>
      @elseif($message->status=="Not Arrived")
      <span style="color:grey"> {{$message->status}}</span>
    @else
    <span style="color:green"> {{$message->status}}</span>
    @endif
  </td>
  <td>
<a href='{{url("/viewReservation/{$message->id}")}}' class="btn btn-primary btn-sm">View</a> |
<a href='{{url("/updateReservation/{$message->id}")}}' class="btn btn-success btn-sm">Update</a> |
<a href='{{url("/deleteReservation/{$message->id}")}}' class="btn btn-danger btn-sm">Delete</a>
  </td>
  </tr>


@endforeach
@endif
</tbody>
</table>
@endsection

@section('sidebar')

@endsection
