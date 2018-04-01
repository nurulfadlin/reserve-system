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
    <h3>Restaurant Reservation Confirmed </h3>
    <p>Dear our valued customer,</p>
    <p>You had confirmed your restaurant reservation with the detailed as shown below: </p>
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
<br>
  <p>It is advisable to print this receipt and bring it together with you later as a prove.</p>
  <br>
  <span style="color:red">*NOTICE*</span>
  <p>If you are unable to attend the reservation for more than <b>2 hours</b> after your reservation time,
  your reservation will be considered as cancelled.</p>
  <br>
  <p>Thank You for choosing our restaurant and enjoy your meal!</p>
  <br>
  <h4>Restaurant Reservation System.</h4>
  </div>

  </body>
</html>
