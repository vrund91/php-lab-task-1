<html>
<body>
	<div align="center">
	<form  method="POST" style="border: 1px solid black; height: 350; width: 350;">

	<h5 align="right">Login</h5>
	<h1 align="center">Registration</h1>	
	<h4 align="center"><font color="red">Email already exists</font><br><br>
		<label>Username*</label><br>
		<input type="text" name="uname"/><br>
		<lable>Email*</lable><br>
		<input type="email" name="email"/><br>
		<label>Password*</label><br>
		<input type="password" name="paswrd1"/><br>
		<label>Confirm Password*</label><br>
		<input type="password" name="paswrd2"/><br>	
		<input type="submit" name="signup" value="sign up" style="background-color: yellow;"><br><br>
	
    <?php
    if(isset($_POST['signup']))
    {
    	$uname=$_POST['uname'];
    	$Email=$_POST['email'];
    	$pswrd=$_POST['paswrd1'];
    	$cpswrd=$_POST['paswrd2'];

    	echo "Name is: $uname";
    	echo "<br>";
    	echo "Email is: $Email";
    	echo "<br>";
    	echo "password is: $pswrd";
    	echo "<br>";
    	echo "confirm password is: $cpswrd";
    }
    ?>
    </form>
    </div>
</body>
</html> 