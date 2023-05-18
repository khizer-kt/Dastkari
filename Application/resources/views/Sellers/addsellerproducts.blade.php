<!DOCTYPE html>
<html lang="en">

<head>
  @include('Sellers.css');
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <style>
    .div_center {
      text-align: center;
      padding-top: 40px;
      color: whitesmoke;
    }

    .h2_font {
      font-size: 40px;
      padding-bottom: 40px;

    }

    /* body {
  align-items: center;
  background-color: #000;
  display: flex;
  justify-content: center;
  height: 100vh;
} */

.form {
  background-color: #15172b;
  border-radius: 20px;
  box-sizing: border-box;
  height: 750px;
  padding: 20px;
  width: 920px;
  margin-left:300px;
}

.title {
  color: #eee;
  font-family: sans-serif;
  font-size: 36px;
  font-weight: 600;
  margin-top: 30px;
}

.subtitle {
  color: #eee;
  font-family: sans-serif;
  font-size: 16px;
  font-weight: 600;
  margin-top: 10px;
}

.input-container {
  height: 50px;
  position: relative;
  width: 100%;
}

.ic1 {
  margin-top: 40px;
}

.ic2 {
  margin-top: 30px;
}

.input {
  background-color: #303245;
  border-radius: 12px;
  border: 0;
  box-sizing: border-box;
  color: black;
  font-size: 18px;
  height: 100%;
  outline: 0;
  padding: 4px 20px 0;
  width: 100%;
}

.cut {
  background-color: #15172b;
  border-radius: 10px;
  height: 20px;
  left: 20px;
  position: absolute;
  top: -20px;
  transform: translateY(0);
  transition: transform 200ms;
  width: 76px;
}

.cut-short {
  width: 50px;
}

.input:focus ~ .cut,
.input:not(:placeholder-shown) ~ .cut {
  transform: translateY(8px);
}

.placeholder {
  color: black;
  font-family: sans-serif;
  left: 20px;
  line-height: 14px;
  pointer-events: none;
  position: absolute;
  transform-origin: 0 50%;
  transition: transform 200ms, color 200ms;
  top: 20px;
}

.input:focus ~ .placeholder,
.input:not(:placeholder-shown) ~ .placeholder {
  transform: translateY(-30px) translateX(10px) scale(0.75);
}

.input:not(:placeholder-shown) ~ .placeholder {
  color: black;
}

.input:focus ~ .placeholder {
  color: red;
}

.submit {
  background-color: white;
  border-radius: 12px;
  border: 0;
  box-sizing: border-box;
  color: black;
  cursor: pointer;
  font-size: 25px;
  height: 50px;
  margin-top: 38px;
  text-align: center;
  width: 100%;
  border: 2px solid black;
  background-color: gray;
}

.submit:active {
  background-color: gray;
}
.submit:hover {
  background-color: gray;
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
    <div class="main-panel " style="background-color: whitesmowhite">
      <div class="content-wrapper" style="background-color: smoke">
      
      @if(session()->has('message'))
    <div class='alert alert-success'>
      <button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>

      {{session()->get('message')}}
</div>
    @endif
        <div class="div_center">
          
    <form action="{{url('/productadded')}}" method="POST" enctype="multipart/form-data" class="form">

       @csrf
      <div class="title">          ADD PRODUCTS<br>(اشیاء شامل کریں)
      </div>
      
      <div class="input-container ic1">
        <input id="name" name="name" class="input" type="text" placeholder=" " required=" " />
        <div class="cut"></div>
        <label for="name" class="placeholder">Product Name (نام):</label>
      </div>
      <div class="input-container ic2">
        <input id="description" name="description" class="input" type="text" placeholder=" "  />
        <div class="cut"></div>
        <label for="description" class="placeholder">Description(تفصیل)</label>
      </div>
      <div class="input-container ic2">
        <input id="price" name="price" class="input" type="text" placeholder=" " required=" "/>
        <div class="cut cut-short"></div>
        <label for="price" class="placeholder">Price(قیمت)</>
      </div>
      <div class="input-container ic2">
        <input id="quantity" name="quantity" class="input" type="text" placeholder=" " required=" "/>
        <div class="cut cut-short"></div>
        <label for="quantity" class="placeholder">Quantity(مقدار)</>
      </div>
      
        <div class="input-container ic2">
        <select id="category" name="category" class="input" required=" ">
            <option value="">Select a category(ایک زمرہ منتخب کریں):</option>
            @foreach($categoryname as $categoryname)

            <option value="{{$categoryname['name']}}">{{$categoryname['name']}}</option>

            @endforeach 
        </select>
        <div class="cut"></div>
        <label for="category" class="placeholder">Category</label>
        </div>
            <div class="input-container ic2">
            <label><h3>Choose image( تصویر منتخب کریں ):</h3></label>

                <input id="image" name="image"class="input" type="file" placeholder=" " required=" "/>

                <div class="cut cut-short"></div>
                <label for="quantity" class="placeholder">Image (تصویر)</>
            </div>


            <button type="submit" class="submit" style="background-color:gray">submit(جمع کرائیں)</button>
            </div>

        </div>
      </div>
    </form>
  </div>



</body>

</html>