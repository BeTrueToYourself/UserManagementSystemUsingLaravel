<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quote</title>
    <style>
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
<a href="/postadd" style="background-color:skyblue;color:brown;font-weight:bold;">Add A Quote</a>
<br>
<br> 
<br>
<br> 
<br>
<br> 
@csrf
<table border=2 style="background-color:skyblue;color:brown;font-weight:bold;">
<tr>
<th style="background-color:skyblue;color:brown;font-weight:bold;">
Quote
</th>
<th style="background-color:skyblue;color:brown;font-weight:bold;">
Actions
</th>
</tr>
@foreach($posts as $post)
  <tr style="background-color:skyblue;color:brown;font-weight:bold;">
<td>{{$post->quote}}</td>

<td>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="/posts/{{$post->id}}">View</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="/postedit/{{$post->id}}">Edit</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="/postdelete/{{$post->id}}">Delete</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</td>
  </tr>  
  @endforeach


  </table>
  <br><br>
<table align=center>

<tr >

              <td style="background-color:pink;"><center><b><a href="{{url('/welcome')}}" style="color:brown;">Go back</a></b></center> <br><br></td>
              </tr>
              
              <tr >
               <td style="background-color:black;"><center><b><a href="{{url('/logout')}}" style="color:white;">Log Out</a></b></center></td>
              </tr>
              </table>

</body>
</html>