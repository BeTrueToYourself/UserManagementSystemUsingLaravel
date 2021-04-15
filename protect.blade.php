<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UserManagementSystem</title>
    <style>
body  {
  background-image: url("userimage/bg.png");
  background-color: #cccccc;
}
</style>
</head>
<body>

<br>
<center><img src="userimage/user.png" alt="userimage/bg.png" width="500" height="100"><center>
<br>
<br> 


<h1 style="background-color:skyblue;color:brown;font-weight:bold;">Welcome </h1>

<br>
<h2 style="background-color:skyblue;color:brown;font-weight:bold;"> <em> Your User Name is {{$username}}<em></h2>
<br>
<h2 style="background-color:orange;color:brown;font-weight:bold;"><center>Dear {{$username}}, </center></h2>
<br>
<h2 style="background-color:orange;color:brown;font-weight:bold;"><center>Post A Picture With Story</center></h2>
 <h3><a href="{{url('/store_image')}}" style="background-color:skyblue;color:brown;font-weight:bold;">Click Here To Post A Story</a></h3>
 
<h3 style="background-color:orange;color:brown;font-weight:bold;"><center><em>You can ADD, VIEW, EDIT AND DELETE Quote....!!!! <em></center></h3>


<h3> <a href="{{url('/posts')}}" style="background-color:skyblue;color:brown;font-weight:bold;">Click Here To Navigate To The Quotation</a>
<br><br><br>

 <a href="{{url('/logout')}}" style="background-color:skyblue;color:brown;font-weight:bold;">Log Out</a>

</h3>






</body>
</html>