<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">
    
    <title>Document</title>
    
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
        table{
            height: 200px;;
        width:250px;
        }
        .styletable{
            font-size:180px;
            border: 3px solid white;
        }
        td{
            color:white;
        height: 200px;;
        width:250px;

        }
        #btn{

        }
        /* .image_size{
            width:900px;
            height:900px;
        } */
    </style>
</head>
<body>
    <div class="container-scroller">
        <!-- start side-bar -->
        @include('admin.sidebar');
        
         <!-- start header  -->
        @include('admin.header');
          <!-- body -->
    <div class="main-panel " style="background-color: whitesmowhite
    " >
        <div class="content-wrapper" style="background-color: smoke">
            <div class="div_center" >
                <h2 class="h2_font">Products of this Category:</h2>
                <form action="
                "></form>
            
            <table class="table  table-dark table-bordered table-hover">
            <thead class="thead-dark">
                <tr >
                <td >Id</td>
                <td>Name</td>
                <td>description</td>
                <td>price</td>
                <td>image</td>
                <td>created_at</td>
                <td>seller name</td>
                <td>category_id</td>
                <td>quantity_available</td>
            </tr>
    </thead>
                <!--populate data dynamically-->
            @foreach($product as $i) 
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
</body>
</html>