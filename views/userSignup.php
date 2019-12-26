<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>../assets/css/stuSignupForm.css">
<script type="text/javascript" src="<?php echo base_url();?>../assets/js/loginpage.js"></script>
<script type="text/javascript">
function check(){
    var pass = document.getElementById("pass");
    if(pass.type === 'password'){
        pass.type = 'text';
    }else{
        pass.type = 'password';
    }
}
</script>
</head>
<body background="<?php echo base_url();?>../assets/image/mg.jpg">
    <header class="head">
	<center><h2 class="cng">Registation Form</h2></center>
	</header>
	<main>
        <form action="<?php echo base_url();?>/Welcome/usersignupdata" method="POST" class="employee-form" onsubmit="return myFunction()">
			<div class="form-group">
                <label for="uname" class="cng">User Name*</label>
                <input type="text" name="uname" class="form-control" value="" required>
            </div>

			<div class="form-group">
                <label for="password" class="cng">Password *</label>
                <input type="password" name="password" id="pass" class="form-control" value="" required><span id="pw" style="color: red;"></span>
            </div>

			<div class="form-group">
                <label for="con_pass" class="cng">Confirm Password *</label>
                <input type="password" name="con_pass" id="conpass" class="form-control" value="" required><span id="conpw" style="color: red;"></span>
            </div>

            <div class="form-group">
                <label for="role" class="cng">Role *</label>
                <input type="text" name="role" class="form-control" value="" required>
            </div>

            <div class="saw">
                    <input type="checkbox" onclick="check()">See Password<br>
            </div>
			<div>
                <button class="btn1" type="submit">Submit</button>
            </div>
        </form>
	</main>
    </body>
</html>