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
              margin-left:200px;
              margin-right:200px;
             
              
              padding: 50px;
              /* margin-bottom: 200px; */
          }
          .center2{
            margin-left:500px;
              margin-right:500px;
              height:80px;
              width:500px;
              color:black;
             
              
              padding: 50px;
          }
          .center3{
            margin-left:515px;
              margin-right:500px;
              height:80px;
              width:500px;
              color:black;
              border:5px solid black;
             
              
              padding: 50px;
          }
          table,th,td{
              border:1px solid grey;
          }
          .th_deg{
              font-size: 30px;
              padding: 5px;
              background-color: skyblue;
          }
          .header{
              padding-bottom: 80px;
          }
          td{
            
        height: 200px;;
        width:250px;

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
             @if($cart_item)
        <table class="table  table-dark table-bordered table-hover">
                <thead class="thead-dark">
            <tr>
                <th class="th_deg">Product id</th>
                <th class="th_deg">Product name</th>
                <th class="th_deg">Product image</th>
                <th class="th_deg">Quantity</th>
                <th class="th_deg">Total Price</th>
                <th class="th_deg">Action</th>
            </tr>
             </thead>
            <?php 
            $productprice=0;
            ?>
            @foreach($cart_item as $cart_item)
            <tr>
                <td>{{ $cart_item->product->idproducts }}</td> 
                  
                <td>{{ $cart_item->product->name }}</td> 
                <td><img style="height:200px; width:300px; border-radius:0px" src="/images/{{$cart_item->product->image}}" alt=""></td>
                <td>{{ $cart_item->quantity}}</td>
                <td>{{ $cart_item->price }}</td>
                <td><a class="btn btn-danger" style="color: white" href="{{ url('/removeproduct/'.$cart_item->idorder_items )}}" onclick="return confirm('Are you sure you want to remove this product?') ">REMOVE </a></td>
                
            </tr>
            <?php 
            $productprice+=$cart_item->price;
            $cust_id=$cart_item->customer_id;
            ?>
       @endforeach

        </table>
        <div style="padding: 15px;font-size:20px;" class="btn btn-secondary center3">
            Total Price={{$productprice  }}
        </div>
        <div style="padding: 15px;font-size:20px;">
            <a href={{ url("/cartorder/". $cust_id .'/'. $productprice )  }} class="btn btn-success center2" onclick="return confirm('Are you sure you want to confirm the Order?') ">PROCEED TO CHECKOUT!</a>
        </div>
        <div style="padding: 15px;font-size:20px;">
            <a href={{ url("/customerpage")  }} class="btn btn-success center2" >CONTINUE SHOPPING!</a>
        </div>
    
    @else{
        <div class="center">
            <div class="order" style="box-shadow: 0px 0px 10px 2px rgba(0, 0, 0, 0.5);padding:20px,">
                <h1 style="color: black; font-size: 36px; text-align: center;">NO PRODUCTS IN THE CART</h1>
            </div>
        </div>
    }
    @endif
    </div> 
   

   
      <!-- footer start -->
      @include('Customers.footer')
     
      
     
   </body>
</html>