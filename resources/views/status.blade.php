@extends('layout.design')

@section('content')
<h1>Reservation List</h1>
<br>
{!! Form::open(['method'=>'GET','url'=>'/searchStatus','class'=>'navbar-form navbar-left','role'=>'search'])  !!}
<div class="input-group custom-search-form">
<input type="text" class="form-control" name="searchDate" placeholder="Enter Date" id ="datepicker">
  <select class="form-control" name="searchStat">
    <option value="" hidden>--Select Status--</option>
    <option value="Confirmed">Confirmed</option>
    <option value="Waiting for confirmation">Waiting for confirmation</option>
    <option value="Arrived">Arrived</option>
    <option value="Not Arrived">Not Arrived</option>
  </select>
<span class="input-group-btn">
        <button class="btn btn-secondary" type="submit">Search</button>
    </span>
</div>
{!! Form::close() !!}
<br>
<!--<a href="{{url('/status')}}"><button class="btn btn-default" type="reset">All</button></a>-->
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
    @if($message->status=="Confirmed")
<a href='{{url("/viewReservation/{$message->id}")}}' class="btn btn-primary btn-sm">View</a> |
<a href='{{url("/arriveReservation/{$message->id}")}}' class="btn btn-success btn-sm">Arrived</a> |
<a href='{{url("/notArriveReservation/{$message->id}")}}' class="btn btn-danger btn-sm">Not Arrived </a>
@elseif($message->status=="Arrived")
<a href='{{url("/viewReservation/{$message->id}")}}' class="btn btn-primary btn-sm">View</a>
@else
@endif
  </td>
  </tr>


@endforeach
@endif
</tbody>
</table>
@endsection

@section('sidebar')

@endsection
