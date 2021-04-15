<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Quote</title>
    <style>
body  {

  background-color: skyblue;
}
</style>
</head>
<body>
<br>
<br><br>
<br>
<h1 style="background-color:orange;color:brown;font-weight:bold;"><center> USER MANAGEMENT SYSTEM</center></h1>
<br><br> <h2 style="background-color:orange;color:brown;font-weight:bold;"><center> Delete Quote</center></h2>
<br><br>
<h3 style="background-color:orange;color:brown;font-weight:bold;"><center>Delete Your Quote:<br><br>
<form action="{{route('post.delete')}}"   method="POST">
<//form action="/postremove"   method="POST">
@csrf
<input type="hidden" name="id" value="{{$post->id}}">

Your Quote<br><br>
<textarea type="body" name="quote" cols="30" rows="10" style="background-color:skyblue;color:brown;font-weight:bold;">{{$post->quote}}
</textarea>
<br><br>
<input type="submit" value="Delete" style="background-color:skyblue;color:brown;font-weight:bold;"><br><br>
</form>
<br><br>
<table align=center>

<tr >

              <td style="background-color:pink;"><center><b><a href="{{url('/posts')}}" style="color:brown;">Go back</a></b></center> <br><br></td>
              </tr>
              
              <tr >
               <td style="background-color:black;"><center><b><a href="{{url('/logout')}}" style="color:white;">Log Out</a></b></center></td>
              </tr>
              </table>
    
</body>
</html>