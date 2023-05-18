<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/dastkari-logo.png" type="">
      <title>Dastkari</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />
      

<!-- CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">

<!-- JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>


   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         @include('home.header')
         <!-- end header section -->
         <!-- slider section -->
         @include('home.proj') <!-- INCLUDE THE CAROUSEL CODE OVER HERE -->
         <!-- end slider section -->
      </div>
      <!-- why section -->
      {{-- @include('home.why') --}}
      <!-- end why section -->
      
      <!-- arrival section -->
      {{-- @include('home.new_arrival') --}}
      <!-- end arrival section -->
      
      <!-- product section -->
   <!-- <div class="container"> -->
        
      @include('home.categories') <!-- INCLUDE THE PRODUCTS CODE OVER HERE -->
      <!-- end product section -->

      <!-- subscribe section -->
      {{-- @include('home.subscribe') --}}
      <!-- end subscribe section -->
      <!-- testimonial section -->
      <!-- end testimonial section -->
      <!-- footer start -->
      @include('home.footer')
     

   </body>
</html>