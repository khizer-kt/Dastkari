<head>

<!-- CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">

<!-- JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>

</head>
<!-- header section starts -->
<header class="header_section">
   <div class="container">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
         <a class="navbar-brand" href="{{ url('/') }}"><img style="width:250px; height:150px" src="images/dastkari-logo.png" alt="#" /></a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class=""> </span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
               <li class="nav-item active">
                  <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
               </li>
              
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/aboutus') }}">About Us</a>
               </li>
 
               <li class="nav-item">
                  
                 <li class="nav-item dropdown">
                  
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Category<span class="caret"></span></a>
                   
                    <ul class="dropdown-menu">
                     <li><a href="/guestView/1">Shawls</a></li>
                     <li><a href="/guestView/4">Khussa</a></li>
                     <li><a href="/guestView/2">Bamboo Handicrafts</a></li>
                     <li><a href="/guestView/3">Jewelery</a></li>
                     <li><a href="/guestView/6">Cushion Covers</a></li>
                     <li><a href="/guestView/5">Crochets Handicrafts</a></li>
                    </ul>
                  
                  
               </li>
            
               
            
              
               <form method="POST" action="http://127.0.0.1:5000/">
            <label for="search_query">Search Item:</label>
            <input type="text" id="search_query" name="search_query">
            <br><br>
            <button type="submit" name="search_item">Search</button>
        </form>
               <li class="nav-item">
                 <a class="btn btn-success " style="margin-right:20px" id="registercss" href="{{ url('/showguestcart') }}">Cart</a>
                </a>
              </li>
                <li class="nav-item">
                    <a class="btn btn-primary " href="{{ route('login') }}">Login</a>
                 </li>
                 <li class="nav-item">
                    <a class="btn btn-success " id="registercss" href="{{ route('register') }}">Register</a>
                 </li>
                 {{-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/redirect') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif --}}
                {{--<li class="nav-item">
                   <a class="nav-link" href="#">
                      <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                         <g>
                            <g>
                               <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                                  c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                            </g>
                         </g>
                         <g>
                            <g>
                               <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                                  C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                                  c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                                  C457.728,97.71,450.56,86.958,439.296,84.91z" />
                            </g>
                         </g>
                         <g>
                            <g>
                               <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                                  c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                            </g>
                         </g>
                         <g>
                         </g>
                         <g>
                         </g>
                         <g>
                         </g>
                         <g>
                         </g>
                         <g>
                         </g>
                         <g>
                         </g>
                         <g>
                         </g>
                         <g>
                         </g>
                         <g>
                         </g>
                         <g>
                         </g>
                         <g>
                         </g>
                         <g>
                         </g>
                         <g>
                         </g>
                         <g>
                         </g>
                         <g>
                         </g>
                      </svg>
                   </a>
                </li> --}}
               </li>
             </ul>
          </div>
       </nav>
    </div>
 </header>