<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css');
  </head>
  <style>
      .div_center{
            text-align: center;
            padding-top:40px;
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
  height: 500px;
  padding: 20px;
  width: 600px;
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
      @include('admin.sidebar');
      
       <!-- start header  -->
      @include('admin.header');
      <div class="main-panel " style="background-color: black " >
        <div class="content-wrapper" style="background-color: black">
            <div class="div_center" >
              
                @if(session()->has('mess'))
                <div class='alert alert-danger'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>
            
                  {{session()->get('mess')}}
                </div>
                @endif
                @if(session()->has('message'))
                <div class='alert alert-success'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button>
            
                  {{session()->get('message')}}
                </div>
                @endif
                <form action="/categoryadded" method="POST"  class="form">

@csrf
<div class="title">ADD CATEGORY</div>
<div class="subtitle">Let's add a category!</div>
<div class="input-container ic1">
 <input id="name" name="name" class="input" type="text" placeholder=" " required=" " />
 <div class="cut"></div>
 <label for="name" class="placeholder">Category Name:</label>
</div>

     <button type="submit" class="submit" style="background-color:gray">submit</button>
     </div>

 </div>
</div>
</form>
              </div>
            </div>
        </div>
    </div>
    
  
</body>

</html>