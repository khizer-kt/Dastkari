<!-- header section starts -->

<head>

<!-- CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">

<!-- JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>

</head>
<header class="header_section">
   <div class="container">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
         <a class="navbar-brand" href="/redirect"><img width="250px" height="200px" src="images/dastkari-logo.png" alt="#" /></a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class=""> </span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
               <li class="nav-item active">
                  <a class="nav-link" href="{{ url('/customerpage') }}">Home <span class="sr-only">(current)</span></a>
               </li>
              
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/aboutus') }}">About Us</a>
               </li>
 
               <li class="nav-item">
                 <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Category<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                     <li><a href="/custView/1">Shawls</a></li>
                     <li><a href="/custView/4">Khussa</a></li>
                     <li><a href="/custView/2">Bamboo Handicrafts</a></li>
                     <li><a href="/custView/3">Jewelery</a></li>
                     <li><a href="/custView/{id=6}">Cushion Covers</a></li>
                     <li><a href="/custView/5">Crochets Handicrafts</a></li>
                    </ul>
                    
               </li>
 
           
        <form method="POST" action="http://127.0.0.1:5000/">
            <label for="search_query">Search Query:</label>
            <input type="text" id="search_query" name="search_query">
            <br><br>
            <button type="submit" name="search_item">Search</button>
        </form>
               </form>
               <li class="nav-item">
                 <a class="btn btn-success " style="margin-right:20px" id="registercss" href="{{ url('/showcart') }}">Cart</a>
                </a>
              </li>
                <li class="nav-item">
                    <a class="btn btn-primary " href="{{ route('login') }}">Login</a>
                 </li>
                 <li class="nav-item">
                    <a class="btn btn-success " id="registercss" href="{{ route('register') }}">Register</a>
                 </li>
              
              
   
           
              
               
                <li>
                  <x-app-layout>
                  </x-app-layout>
                 
              </li>
             </ul>
          </div>
       </nav>
    </div>
 </header>