<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WelcomeToUserManagementSystem</title>
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
<br>
<label style="color:skyblue;"><b>New Users?</b></label>

<a style="color:orange;" href="{{url('/create_account')}}"><h1><center>Create An Account</center></h1></a>
<br>
<br>
<br>
<br>
<label style="color:skyblue;"><b>Already Have An Account?</b></label>
<a style="color:orange;" href="{{url('/login')}}"><h1><center>Log In</center></h1></a>
<br>
<br>
<img src="userimage/a.jpg" alt="userimage/bg.png" width="500" height="500">
<img src="userimage/b.jpg" alt="userimage/bg.png" width="500" height="500">
<img src="userimage/c.jpg" alt="userimage/bg.png" width="500" height="500">
<img src="userimage/d.jpg" alt="userimage/bg.png" width="500" height="500">


</body>
</html>