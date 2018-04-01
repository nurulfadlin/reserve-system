<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">

  <link href="{{ URL::asset('theme/css/business-casual.min.css')}}" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="{{ URL::asset('theme/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">



  </head>
  <body style="background:white">
    @include('inc.navbar')
<div class="container" style="margin-top:50px;">
  @include('inc.messages')
  @yield('content')
  </div>
</div>

<!--<footer id="footer" class="text-center">
<p>Copyright (c) 2017 Copyright Holder All Rights Reserved.</p>
</footer>-->

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>

  <script type="text/javascript">
    $(function() {
      $( "#datepicker" ).datepicker({
        changeMonth: true,
        changeYear: true,
        dateFormat:"DD, d MM, yy"
      });
    });
  </script>

  <script type="text/javascript">
    $(function() {

$('#timepicker').timepicker({
    timeFormat: 'h:mm p',
    interval: 05,
    minTime: '10',
    maxTime: '11:00pm',
    defaultTime: '',
    startTime: '10:00',
    dynamic: false,
    dropdown: true,
    scrollbar: true
});

    });
  </script>

  </body>
</html>
