<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css');
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
      @include('admin.sidebar');
      
       <!-- start header  -->
      @include('admin.header');
        <!-- body -->
        <div class="main-panel " style="background-color: whitesmowhite" >
            <div class="content-wrapper" style="background-color: smoke">
                <div class="div_center" >
                    <h2 class="h2_font">VIEW ALL PRODUCTS:</h2>
                    <form action=""></form>
                
                <table class="table  table-dark table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <td scope="col" >Id</td>
                        <td scope="col">Name</td>
                        <td scope="col">description</td>
                        <td scope="col">price</td>
                        <td scope="col">image</td>
                        <td scope="col">created_at</td>
                        
                        <td scope="col">seller_name</td>
                        <td scope="col">category_id</td>
                        <td scope="col">quantity_available</td>
                </tr>
                </thead>
                    <!--populate data dynamically-->
                @foreach($products as $i) 
                <!--members=data returned by controller-->   
                <tr>
                <td> {{$i['idproducts']}} </td>
                <td> {{$i['name']}} </td>
                <td> {{$i['description']}} </td>
                <td> {{$i['price']}} </td>
                <td><img style="height:200px; width:300px; border-radius:0px"src="/images/{{$i['image']}}"></td>
                <td> {{$i['created_at']}} </td>
                
                <td> {{$i->seller->name}} </td>
                <td> {{$i['category_id']}} </td>
                <td> {{$i['quantity_available']}} </td>

                    {{-- <td> <button class="btn btn-warning" type="button" style="color:black"> <a href="{{ url('/view/'.$i->idcategory ) }}"> {{$i['action']}} </a> </button> </td> --}}
                </tr>
    @endforeach
                </table>
            </div>
            </div>

        </div>
      
    
  </body>
</html>