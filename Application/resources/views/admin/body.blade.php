<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
    
    {{-- @include('admin.css'); --}}
    <style>
        .div_center{
            text-align: center;
            padding-top:40px;
            color: black;
        }
        .h2_font{
          
font-size: 40px;
padding-bottom:40px;

        }
        
       
        
        .container {
  position: relative;
  width: 100%;
}

/* Make the image responsive */
.container .btn1 {
  width: 250px;
  height: auto;
  top:600px;
}

/* Style the button and place it in the middle of the container/image */
.container .btn1 {
  position: absolute;
  top: 420px;
  left: 420px;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #555;
  color: white;
  font-size: 16px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
}

.container .btn1:hover:hover {
  background-color: black;
}
body {
      background-color: #bdeed9;
      font-family: 'Questrial';
    }

    #box {
      margin: auto;
      border-radius: 8px;
      padding: 30px;
      width:100%; background-color:black
    }

   

    span {
      font-weight: bold;
      color: #EF767A;
    }

    .buttonface {
      outline: none;
      width: 400px;
      height: 200px;
      background-color: #ccc;
      border: 0px solid #bbb;
      border-radius: 8px;
      cursor: pointer;
      margin: 10px;
      font-family: 'Questrial';
      font-weight: bold;
      font-size: 20px;
      padding: 0px;
      text-align: center;
    }

    .image {
      outline: none;
      width: 400px;
      height: 200px;
      background-color: #ccc;
      
      border-radius: 8px;
      cursor: pointer;
      font-family: 'Questrial';
      font-weight: bold;
      font-size: 20px;
     
      text-align: center;
    }

    .buttonface:hover {
      transition: background-color .2s ease-in;
      background-color: #ddd;
    }

    .buttonface:not(:hover) {
      transition: background-color .2s ease-in;
      background-color: #ccc;
    }

    .buttonss {
      margin: auto;
      width: 845px;
    }
    </style>
</head>
<body>
    {{-- <div class="container-scroller"> --}}
        
       
          <!-- body -->
    <div class="main-panel " style="background-color: black " >
        <div class="content-wrapper" style="background-color: black">
            <div class="div_center" >
              <div class="center">
                
                    <h1 style="color: white; font-size: 46px; text-align: center;">WELCOME ADMIN!!</h1>
              
            </div>
               
                <br><br><br>
  <div id="wrapper" style="width:100%;">
    <div id="box" style="">
      <div class="buttonss">
        <a href="{{ url('/products') }}">
        <button class="buttonface" href="{{ url('/products') }}" >
          <img src = "images/products.jpg" class="image">
        </button>
      </a>
      <a href="{{ url('/Sellers') }}">
        <button class="buttonface">
          <img  src = "images/sellers2.jpg" class="image">
        </button>
      </a>
      <a href="{{ url('/Customers') }}">
        <button class="buttonface">
          <img src = "images/customers.png" class="image">
        </button>
      </a>
      <a href="{{ url('/view_category') }}">
        <button class="buttonface">
          <img  src = "images/categories1.jpg" class="image">
        </button>
      </a>
      </div>
    </div>
  </div>
            
          
        </div>
        </div>
</body>
</html>