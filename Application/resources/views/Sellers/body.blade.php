
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
 
    </style>
</head>
<body>
    {{-- <div class="container-scroller"> --}}
        
       
          <!-- body -->
    <div class="main-panel " style="background-color: black " >
        <div class="content-wrapper" style="background-color: black">
            <div class="div_center" >
              <div class="center">
                
                    <h1 style="color: white;font-style:italic; font-size: 46px; text-align: center;">
                    WELCOME TO DASTKARI<br>("دستکاری میں خوش آمدید
")
</h1>
              
            </div>
            <div style="display: flex; justify-content: center; align-items: center; height: 100vh;">
    <div style="margin-right: 100px;margin-left: 100px;">
      <a href="{{ url('/addsellerproducts/')}}">
        <button style="font-size: 50px;
                        color: white;
                        background-color: #15172b;
                        width: 500px;
                        font-style:italic;
                       
                        height: 500px;
                        border: none;
                        border-radius: 10px;
                        box-shadow: 5px 5px 5px #888888;
                        transition: background-color 0.5s ease;
                        cursor: pointer;">
          ADD PRODUCTS<br>(اشیاء شامل کریں)
        </button>
      </a>
    </div>

    <div style="margin-left: 80px;">
      <a href="{{ url('/viewsellerproducts/')}}">
        <button style="font-size: 50px;
                        color: white;
                        background-color: #15172b;
                        width: 500px;
                        height: 500px;
                        font-style:italic;
                        border: none;
                        border-radius: 10px;
                        
                        box-shadow: 5px 5px 5px #888888;
                        transition: background-color 0.5s ease;
                        cursor: pointer;">
          VIEW PRODUCTS<br>(اشیاء دیکھیں)
        </button>
      </a>
    </div>
  </div>
               
                
    
            
          
        </div>
        </div>
</body>
</html>





