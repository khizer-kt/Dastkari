<!DOCTYPE html>
<html lang="en">
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
    button {
  background-color: white;
  color: black;
  border: none;
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  transition: background-color 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
}

button:hover {
  background-color: #f5f5f5;
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
}
    </style>
</head>
<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    @include('home.header')
    <!-- end header section -->
    <!-- slider section -->
    {{-- @include('Customers.proj') <!-- INCLUDE THE CAROUSEL CODE OVER HERE --> --}}
    <!-- end slider section -->
   
 </div>
 
<!-- INCLUDE THE PRODUCTS CODE OVER HERE -->
<section class="product_section layout_padding">
  <div class="container">
     <div class="heading_container heading_center">
        <h2>
           Our <span>products</span>
        </h2>
     </div>
     <div class="row">
     @foreach ( $product as $product )
  

        <div class="col-sm-6 col-md-4 col-lg-3">
            <a class="nav-link" href="{{ url('/guestProduct/'.$product->idproducts) }}">
          <button >
            
           <div class="box">
              
              <div class="img-box">
                 <img class="image_size" style="width:220px" src="/images/{{$product['image']}}" alt="">
              </div>
              <div class="detail-box">
                 <h5>
                  {{ $product['name'] }}
                
                 </h5>
                 <h6>
                  {{ $product['price'] }}
                
                 </h6>
              </div>
           </div>
          </button> 
        </a>
        </div>

       
        @endforeach
      {{-- >
        <div class="col-sm-6 col-md-4 col-lg-3">
           <div class="box">
              <div class="option_container">
                 <div class="options">
                    <a href="" class="option1">
                    Add To Cart
                    </a>
                    <a href="" class="option2">
                    Buy Now
                    </a>
                 </div>
              </div>
              <div class="img-box">
                 <img src="images/p2.png" alt="">
              </div>
              <div class="detail-box">
                 <h5>
                    Men's Shirt
                 </h5>
                 <h6>
                    $80
                 </h6>
              </div>
           </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
           <div class="box">
              <div class="option_container">
                 <div class="options">
                    <a href="" class="option1">
                    Add To Cart
                    </a>
                    <a href="" class="option2">
                    Buy Now
                    </a>
                 </div>
              </div>
              <div class="img-box">
                 <img src="images/p3.png" alt="">
              </div>
              <div class="detail-box">
                 <h5>
                    Women's Dress
                 </h5>
                 <h6>
                    $68
                 </h6>
              </div>
           </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
           <div class="box">
              <div class="option_container">
                 <div class="options">
                    <a href="" class="option1">
                    Add To Cart
                    </a>
                    <a href="" class="option2">
                    Buy Now
                    </a>
                 </div>
              </div>
              <div class="img-box">
                 <img src="images/p4.png" alt="">
              </div>
              <div class="detail-box">
                 <h5>
                    Women's Dress
                 </h5>
                 <h6>
                    $70
                 </h6>
              </div>
           </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
           <div class="box">
              <div class="option_container">
                 <div class="options">
                    <a href="" class="option1">
                    Add To Cart
                    </a>
                    <a href="" class="option2">
                    Buy Now
                    </a>
                 </div>
              </div>
              <div class="img-box">
                 <img src="images/p5.png" alt="">
              </div>
              <div class="detail-box">
                 <h5>
                    Women's Dress
                 </h5>
                 <h6>
                    $75
                 </h6>
              </div>
           </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
           <div class="box">
              <div class="option_container">
                 <div class="options">
                    <a href="" class="option1">
                    Add To Cart
                    </a>
                    <a href="" class="option2">
                    Buy Now
                    </a>
                 </div>
              </div>
              <div class="img-box">
                 <img src="images/p6.png" alt="">
              </div>
              <div class="detail-box">
                 <h5>
                    Women's Dress
                 </h5>
                 <h6>
                    $58
                 </h6>
              </div>
           </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
           <div class="box">
              <div class="option_container">
                 <div class="options">
                    <a href="" class="option1">
                    Add To Cart
                    </a>
                    <a href="" class="option2">
                    Buy Now
                    </a>
                 </div>
              </div>
              <div class="img-box">
                 <img src="images/p7.png" alt="">
              </div>
              <div class="detail-box">
                 <h5>
                    Women's Dress
                 </h5>
                 <h6>
                    $80
                 </h6>
              </div>
           </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
           <div class="box">
              <div class="option_container">
                 <div class="options">
                    <a href="" class="option1">
                    Add To Cart
                    </a>
                    <a href="" class="option2">
                    Buy Now
                    </a>
                 </div>
              </div>
              <div class="img-box">
                 <img src="images/p8.png" alt="">
              </div>
              <div class="detail-box">
                 <h5>
                    Men's Shirt
                 </h5>
                 <h6>
                    $65
                 </h6>
              </div>
           </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
           <div class="box">
              <div class="option_container">
                 <div class="options">
                    <a href="" class="option1">
                    Add To Cart
                    </a>
                    <a href="" class="option2">
                    Buy Now
                    </a>
                 </div>
              </div>
              <div class="img-box">
                 <img src="images/p9.png" alt="">
              </div>
              <div class="detail-box">
                 <h5>
                    Men's Shirt
                 </h5>
                 <h6>
                    $65
                 </h6>
              </div>
           </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
           <div class="box">
              <div class="option_container">
                 <div class="options">
                    <a href="" class="option1">
                    Add To Cart
                    </a>
                    <a href="" class="option2">
                    Buy Now
                    </a>
                 </div>
              </div>
              <div class="img-box">
                 <img src="images/p10.png" alt="">
              </div>
              <div class="detail-box">
                 <h5>
                    Men's Shirt
                 </h5>
                 <h6>
                    $65
                 </h6>
              </div>
           </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
           <div class="box">
              <div class="option_container">
                 <div class="options">
                    <a href="" class="option1">
                    Add To Cart
                    </a>
                    <a href="" class="option2">
                    Buy Now
                    </a>
                 </div>
              </div>
              <div class="img-box">
                 <img src="images/p11.png" alt="">
              </div>
              <div class="detail-box">
                 <h5>
                    Men's Shirt
                 </h5>
                 <h6>
                    $65
                 </h6>
              </div>
           </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
           <div class="box">
              <div class="option_container">
                 <div class="options">
                    <a href="" class="option1">
                    Add To Cart
                    </a>
                    <a href="" class="option2">
                    Buy Now
                    </a>
                 </div>
              </div>
              <div class="img-box">
                 <img src="images/p12.png" alt="">
              </div>
              <div class="detail-box">
                 <h5>
                    Women's Dress
                 </h5>
                 <h6>
                    $65
                 </h6>
              </div>
           </div>
        </div>
     </div>
     <div class="btn-box">
        <a href="">
        View All products
        </a>
     </div>
  </div> --}}
</section>
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


<!-- end product section -->