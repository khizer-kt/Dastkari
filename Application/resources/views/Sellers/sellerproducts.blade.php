<!DOCTYPE html>
<html lang="en">
  <head>
    @include('Sellers.css');
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<style>
.div_center{
            text-align: center;
            padding-top:40px;
            color: whitesmoke;
        }
        .h2_font{
font-size: 40px;
padding-bottom:40px;

        }
        
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- start side-bar -->
      @include('Sellers.sidebar');
      
       <!-- start header  -->
      @include('Sellers.header');

        <!-- body -->
        <!-- body -->
        <div class="main-panel " style="background-color: whitesmowhite
        " >
            <div class="content-wrapper" style="background-color: smoke">
                <div class="div_center" >
                    <h2 class="h2_font">MY PRODUCTS:</h2>
                    <form action="
                    "></form>
                
                <table class="table table-striped table-dark table-bordered table-hover">
   
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col" >Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">description</th>
                        <th scope="col">price</th>
                        <th scope="col">image</th>
                        <th scope="col">created_at</th>
                        
                        <th scope="col">category_id</th>
                        <th scope="col">quantity_available</th>
                </tr>
                </thead>
                <tbody>
                    <!--populate data dynamically-->
                @foreach($sellerproduct as $i) 
                <!--members=data returned by controller-->   
                <tr>
                <td> {{$i['idproducts']}} </td>
                <td> {{$i['name']}} </td>
                <td> {{$i['description']}} </td>
                <td> {{$i['price']}} </td>
                <td><img style="height:200px; width:300px; border-radius:0px"src="/images/{{$i['image']}}"></td>
                <!-- <td style="background-image: url({{$i['image']}}); background-size: cover; background-position: center center;"> -->
                <td> {{$i['created_at']}} </td>
                
                <td> {{$i['category_id']}} </td>
                <td> {{$i['quantity_available']}} </td>

                    <!-- {{-- <td> <button class="btn btn-warning" type="button" style="color:black"> <a href="{{ url('/view/'.$i->idcategory ) }}"> {{$i['action']}} </a> </button> </td> --}} -->
                </tr>

    
    @endforeach
    </tbody>
                </table>
            </div>
            </div>

        </div>
    
  </body>
</html>

