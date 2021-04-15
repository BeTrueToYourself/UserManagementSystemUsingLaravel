<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CreatAccount</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <style>
      a {text-decoration: none;}
      
body  {
  background-image: url("userimage/bg.png");
  background-color: #cccccc;
}
</style>
</head>
<body>
<br>
<br>
<center><img src="userimage/user.png" alt="userimage/bg.png" width="500" height="100"><center>
<br>
<br> 

<div style="background-color:orange;">
@if(session()->get('msg'))
{{session()->get('msg')}}
</div>
@endif




<div class="panel panel-default">
         <div class="panel-heading" style="background-color:skyblue;">
             <h2 class="panel-title" style="background-color:pink;"><b>Create Your Account Here</b></h2>

         </div>
         <div class="panel-body" style="background-color:orange;">
         <div class="table-responsive">
         <br>
<br>
<form action='create' method="POST" enctype="multipart/form-data">
@csrf
<br>
<br>
         <label style="background-color:skyblue;">Name</label>
         <br>

<br>
<input type="text" name="uname" required>
<br>
@error('uname')
        <div>
        {{$message}}
        </div>
         @enderror
<br>
<label style="background-color:skyblue;">Email</label>
<br>
<br>
<input type="text" name="uemail" required>
<br>
@error('uemail')
        <div>
        {{$message}}
        </div>
         @enderror
<br>
<label style="background-color:skyblue;">Password</label>
<br>
<br>
<input type="password" name="u_pass" required>

<br>
@error('u_pass')
        <div>
        {{$message}}
        </div>
         @enderror
<br>
<button type="submit" style="background-color:skyblue;"><b>Create An Account</b></button>
<br>
<br>
<br>
<br>
</form>
<label style="background-color:pink;"><b>Already Have An Account?</b></label>
<h2 style="background-color:skyblue;"><center><b><a href="{{url('/login')}}" style="color:brown;">Log In</a></b></center></h2>
             </div>
         </div>
     </div>
    </div>



</body>
</html>