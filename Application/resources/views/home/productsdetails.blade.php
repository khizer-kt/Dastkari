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

/* ----- Global ----- */
* {
	box-sizing: border-box;
}

html,
body {
	height: 100%;
}

body {
	display: grid;
	grid-template-rows: 1fr;
	font-family: "Raleway", sans-serif;
    background-color: white;
	
}


img {
			max-width: 100%;
			filter: drop-shadow(1px 1px 3px $color-secondary);
		}

/* ----- Product Section ----- */
.product {
	display: grid;
	grid-template-columns: 0.9fr 1fr;
	margin: auto;
	padding: 2.5em 0;
	min-width: 600px;
	background-color: rgb(216, 211, 211);
	border-radius: 5px;
    min-height: 450px;
    
}

/* ----- Photo Section ----- */
.product__photo {
	position: relative;
}

.photo-container {
	position: absolute;
	left: -2.5em;
	display: grid;
	grid-template-rows: 1fr;
	width: 100%;
	height: 100%;
	border-radius: 6px;
	box-shadow: 4px 4px 25px -2px rgba(0, 0, 0, 0.3);
}

.photo-main {
	border-radius: 6px 6px 0 0;

	background:rgb(216, 211, 211) ;
}

      </style>
   </head>
   <body>
    
      <div class="hero_area">
         <!-- header section strats -->
         @include('home.header')
         <!-- end header section -->
         @foreach ( $products as $products )
      <section class="product" style="margin-bottom: 250px">

        <div class="product__photo">
            <div class="photo-container">
                <div class="photo-main">
                    <img src="/images/{{$products['image']}}" alt="">
                </div>
                
                
            </div>
        </div>
        <div class="product__info">
            <div class="title">
                <h1 style="font-size: 30px">{{ $products['name'] }}</h1>
                <span>{{ $products['id'] }}</span>
            </div>
            <div class="price">
                <span style="color: red; font-size:20px; "> Rs {{ $products['price'] }}</span>
            </div>
            
            
            <div class="description">
                <p style="font-size: 25px">Description:</p>
                
                    <span >{{ $products['description'] }}</span>
            
            </div>
            
            <div class="quantity">
                <p style="font-size: 25px">In Stock:</p>
                
                    {{ $products['quantity_available'] }} remaining
            
            </div>
           

        <br>
        <form method="POST" action="{{ url('/guestcart/'.$products->idproducts) }}">
            @csrf
            <p style="font-size: 25px">Quantity :</p>
            <input type="number" name="quantity" value="1" min=1>
        
       
            
        <div style="margin-left:80px">
        <input type="submit" class="btn btn-dark" value="ADD TO CART">
    </div>
</form>
      
        </div>
    </section>
    </div>

   
    @endforeach
     
   
         
         <!-- footer start -->
      @include('Customers.footer')
     
    
    
   </body>
</html>