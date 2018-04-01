<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  </head>
  <body>
    <div class="container">
    <h3>Restaurant Reservation Confirmation</h3>
    <p>Dear our valued customer,</p>
    <p>Here is the detailed of your reservation : </p>
<br>
    <table class="table" style="width:600px">
      <tr>
      <th>Name</th>
      <th>:</th>
      <td>{{$name}}</td>
      </tr>
      <tr>
      <th>Phone No</th>
      <th>:</th>
      <td>{{$phone}}</td>
      </tr>
      <tr>
      <th>Email</th>
      <th>:</th>
      <td>{{$email}}</td>
      </tr>
      <tr>
      <th>Date</th>
      <th>:</th>
      <td>{{$date}}</td>
      </tr>
      <tr>
      <th>Time</th>
      <th>:</th>
      <td>{{$time}}</td>
      </tr>
      <tr>
      <th>No. of People</th>
      <th>:</th>
      <td>{{$people}}</td>
      </tr>
      <tr>
      <th>Special Request</th>
      <th>:</th>
      <td>{{$specialRequest}}</td>
      </tr>
      <tr>
        <th>Reservation Status</th>
      <th>:</th>
      <td>{{$status}}</td>
      </tr>
    </table>

<div>
<p>Please <strong>CONFIRM</strong> your reservation <strong>30 MINUTES</strong> prior to your reservation time by clicking the button below or by calling us at 111-345678.
Otherwise, your reservation will be considered as cancelled.</p>
<a href='{{url("contactEmail/confirm/{$id}")}}'><button class="btn btn-success">Confirm Reservation</button></a>
<a href='{{url("delete/{$id}")}}'><button class="btn btn-danger">Cancel Reservation</button></a>
<br>
<br>
<p>Thank You!</p>
<br>
<h4>Restaurant Reservation System.</h4>
    </div>

  </body>
</html>
