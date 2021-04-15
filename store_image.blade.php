<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>WriteAndCheckPost</title>
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
 <div class="container">    
  <br />
  <h3 align="center" style="color:orange;font-weight: bold;">Post Your Stories And Check Your Post </h3>
    <br />
    @if($errors->any())
    <div class="alert alert-danger">
           <ul>
           @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
           @endforeach
           </ul>
        </div>
    @endif

    @if(session()->has('success'))
     <div class="alert alert-success">
     {{ session()->get('success') }}
     </div>
    @endif
    <br />

    <div class="panel panel-default">
         <div class="panel-heading" style="background-color:skyblue;">
             <h3 class="panel-title" style="color:grey;"><center><b>Post Your Story Here</b></center></h3>
         </div>
         <div class="panel-body" style="background-color:pink;">
         <br />
         <form method="post" action="{{ url('store_image/insert_image') }}"  enctype="multipart/form-data">
          @csrf
          <div class="form-group">
          <div class="row">
           <label class="col-md-4" align="right" style="color:grey;"><center><b>Write Your Post Here....!!!!</b></center></label><br>
           <div class="col-md-8">
           <textarea id="username" name="user_name" rows="20" cols="80" style="background-color:skyblue;color:grey;font-weight: bold;">Write Your Story Here....!!!!
           </textarea>
            
           </div>
          </div>
         </div>
         <div class="form-group">
          <div class="row">
           <label class="col-md-4" align="right" style="color:grey;"><center><b>Upload An Image Here....!!!!</b></center></label><br>
           <div class="col-md-8">
         
            <input type="file" name="user_image" />
           </div>
          </div>
         </div>
         <div class="form-group" align="center">
          <br />
          <br />
          <input type="submit" name="store_image" class="btn btn-primary" value="Post Your Story" />
         </div>
         </form>
      </div>
     </div>
     <div class="panel panel-default">
         <div class="panel-heading" style="background-color:grey;">
             <h2 class="panel-title" style="background-color:pink;"><b>Check Your Post Here</b></h2>
         </div>
         <div class="panel-body" style="background-color:grey;">
         <div class="table-responsive">
                <table class="table table-bordered table-striped" >
                
                  @foreach($data as $row)
                  <tr>
                  <tr>
                     <th width="100%" style="background-color:orange;"><center><b>Your Picture</b></center></th>
                  </tr>
                   <td style="background-color:pink;">
                   <center><b><img src="store_image/fetch_image/{{ $row->id }}"  class="img-thumbnail" width="75" /></b></center>
                   </td>
                   <tr>
                     <th width="100%" style="background-color:grey;"><center><b>Your Story</b></center></th>
                  </tr >
                   <td style="background-color:skyblue;"><center><b>{{ $row->user_name }}</b></center></td>
                  </tr>
                  @endforeach
                  <tr >
                  <td style="background-color:black;"><center><b><a href="{{url('/welcome')}}" style="color:white;">Go back</a></b></center></td>
                  </tr>
                  <tr >
                   <td style="background-color:black;"><center><b><a href="{{url('/logout')}}" style="color:white;">Log Out</a></b></center></td>
                  </tr>
                 
              </table>
              {!! $data->links() !!}
             </div>
         </div>
     </div>
    </div>
 </body>
</html>

