<!DOCTYPE html>
<html>
   <head>
      <base href="/public"> 
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
      <style>
          .center{
              margin:auto;
              width:50%;
              text-align: center;
              padding: 50px;
              /* margin-bottom: 200px; */
          }
         
      </style>
   </head>
   <body>
      <div class="header">
         <!-- header section strats -->
         @include('Customers.header')
         <!-- end header section -->
       
      </div>
 
      <div class="center">
        <div class="order" style="box-shadow: 0px 0px 10px 2px rgba(0, 0, 0, 0.5);padding:20px,">
            <h1 style="color: green; font-size: 36px; text-align: center;">CART IS EMPTY!</h1>
        </div>
    </div>
    
   
     
   
      <!-- footer start -->
      @include('Customers.footer')
     
     
   </body>
</html>