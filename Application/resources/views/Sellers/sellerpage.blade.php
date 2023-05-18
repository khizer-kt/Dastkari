<!DOCTYPE html>
<html lang="en">
  <head>
    @include('Sellers.css');
    <!-- CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">

<!-- JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container-scroller">
      <!-- start side-bar -->
      @include('Sellers.sidebar');
      
       <!-- start header  -->
      @include('Sellers.header');
        <!-- body -->
        @include('Sellers.body');
    
  </body>
</html>