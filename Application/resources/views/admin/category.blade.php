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
        .styletable{
            font-size:180px;
            border: 3px solid white;
        }
        td{
            color:white;
            

        }
        #btn{

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
        <div class="main-panel " style="background-color: whitesmowhite
        " >
            <div class="content-wrapper" style="background-color: smoke">
                <div class="div_center" >
                    <h2 class="h2_font">VIEW CATEGORY:</h2>
                    <form action="
                    "></form>
                
                <table class="table  table-dark table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                    <td >Id</td>
                    <td>Name</td>
                    <td>Created At</td>
                    <td>View</td>
                    <td>Remove</td>
                </tr>
    </thead>
                    <!--populate data dynamically-->
                @foreach($data as $i) 
                <!--members=data returned by controller-->   
                <tr>
                    <td> {{$i['idcategory']}} </td>
                    <td> {{$i['name']}} </td>
                    <td> {{$i['created_at']}} </td>
                  

                    <td> <button class="btn btn-warning" type="button" style="color:black"> <a href="{{ url('/view/'.$i->idcategory) }}"> View </a> </button> </td>
                    <td> <button class="btn btn-danger" type="button" style="color:black"> <a href="{{ url('/removecategory/'.$i->idcategory) }}" onclick="return confirm('Are you sure you want to remove this product?') "> REMOVE </a> </button> </td>
                   
                    
                </tr>
    
    @endforeach

                </table>
            
            </div>
            </div>

        </div>
      
    
  </body>
</html>