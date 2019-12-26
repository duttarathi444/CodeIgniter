
<!-- saved from url=(0069)file:///Users/Chung/Desktop/Metro%20SCG/HTML%20New%20Pages/login.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">

        <link rel="stylesheet" href="<?php echo base_url();?>../assets/css/bootstrap.min.css">
</head>
<body>
<style type="text/css">
  #content1{ 
    padding: 0px;
    background-color: pink;
    margin-left: 530px;
    margin-right: 530px;
    margin-top: 20px;
    border-radius: 10px;
  }
</style>
<!--<div id="header" class="site-header">
    <nav class="navbar navbar-expand-lg my-2 my-md-0 mr-md-3">
      <a class="navbar-brand" href="file:///Users/Chung/Desktop/Metro%20SCG/HTML%20New%20Pages/login.html#"><img src="./login_files/MetroToHome-logo.png"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav navbar-right">
          <li class="nav-item"><a class="nav-link" href="file:///Users/Chung/Desktop/Metro%20SCG/HTML%20New%20Pages/login.html#">Lost Password</a></li>
          <li class="nav-item"><a class="nav-link" href="file:///Users/Chung/Desktop/Metro%20SCG/HTML%20New%20Pages/login.html#">Create Account</a></li>
          
          <li class="nav-item active" "=""><a class="nav-link" href="file:///Users/Chung/Desktop/Metro%20SCG/HTML%20New%20Pages/login.html#">Login<span class="sr-only">(current)</span></a></li>         
        </ul>
      </div>
    </nav>
</div> -->
<div id="content1">
    <?php
    if($err != null){
        echo "<center><p>".$err."</p></center>";
      }
    ?>
</div>

<div id="content" class="login-background">
<div id="login" class="login-form">
 	<h2 class="gold-underline">Login</h2>
	
	
<form action="<?php echo base_url();?>/Welcome/usersignindata" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">User Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="urname" aria-describedby="emailHelp" placeholder="Enter your user name" pattern="[a-zA-Z]{0,50}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="pword" placeholder="Enter your Password">
  </div>
  
  <div class="text-center"> 
    <button type="submit" class="btn btn-primary">Submit</button> <button type="submit" class="btn btn-warning">Cancel</button>
  </div>
</form>

<!--<div class="text-center">
  <a href="file:///Users/Chung/Desktop/Metro%20SCG/HTML%20New%20Pages/login.html#">Lost Password</a>	| <a href="file:///Users/Chung/Desktop/Metro%20SCG/HTML%20New%20Pages/login.html#">Create Account</a>	
</div> -->
	
</div> 		
 		


</div></body></html>
