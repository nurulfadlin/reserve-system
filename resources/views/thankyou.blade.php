<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Business Casual - Start Bootstrap Theme</title>

    <link href="{{ URL::asset('theme/css/business-casual.min.css')}}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ URL::asset('theme/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">



  </head>

  <body>

    <h1 class="site-heading text-center text-white d-none d-lg-block">
      <span class="site-heading-lower">Town & Country Coffee</span>
    </h1>

    <section class="page-section about-heading">
      <div class="container">
        <br>
        <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="img/about.jpg" alt="">
        <div class="about-heading-content">
          <div class="row">
            <div class="col-xl-9 col-lg-10 mx-auto">
              <div class="bg-faded rounded p-5">
                <h2 class="section-heading mb-4">

                  <span class="section-heading-lower">Thank You!</span>
                </h2>
                <p><strong>Here is your reservation information :</strong></p>

                <ul class="list-group">
                  <li class="list-group-item">Name: {{$messages->name}}</li>
                  <li class="list-group-item">Phone: {{$messages->phone}}</li>
                  <li class="list-group-item">Email Adress: {{$messages->email}}</li>
                  <li class="list-group-item">Date: {{$messages->date}}</li>
                  <li class="list-group-item">Time: {{$messages->time}}</li>
                  <li class="list-group-item">No. of People: {{$messages->people}}</li>
                  <li class="list-group-item">Special Request: {{$messages->message}}</li>
                @if($messages->status=="Waiting for confirmation")
                  <li class="list-group-item">Booking Status:<span style="color:red"> {{$messages->status}}</span></li>
                @elseif($messages->status=="Arrived")
                    <li class="list-group-item">Booking Status:<span style="color:blue"> {{$messages->status}}</span></li>
                @elseif($messages->status=="Not Arrived")
                        <li class="list-group-item">Booking Status:<span style="color:grey"> {{$messages->status}}</span></li>
                @else
                  <li class="list-group-item">Booking Status: <span style="color:green"> {{$messages->status}}</span></li>
                @endif
                </ul>
                <br>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="footer text-faded text-center py-5">
      <div class="container">
        <p class="m-0 small">Copyright &copy; Your Website 2018</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
