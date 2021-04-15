<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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

  
<br>
<div style="background-color:skyblue;">
@if(session()->get('msg'))
{{session()->get('msg')}}

@endif
</div>
<form action='/check' method="post" enctype="multipart/form-data">
@csrf
<br>
<label style="background-color:skyblue;color:brown;font-weight:bold;">Enter Your Email</label>
<br>
<br>
<input type="text" name="uemail" required>
<br>
<br>
<label style="background-color:skyblue;color:brown;font-weight:bold;">Enter Your Password</label>
<br>
<br>
<input type="password" name="u_pass" required>
<br>
<br>
<button type="submit" style="background-color:skyblue;color:brown;font-weight:bold;">Log In</button>
<br>
<br>
</form>
<br>
<br>
<br>
<br>
<label style="background-color:skyblue;color:brown;"><b>Not Having An Account?</b></label>
  <a style="color:pink;" href="{{url('/create_account')}}"><h1><center>Create An Account</center></h1></a>

</body>
</html>