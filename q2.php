<html>
<body>
	<form method="POST">
		Enter a age:<input type="number" name="num1"/><br><br>
		<input type="submit" name="submit">
	</form>
	<?php
	if(isset($_POST['submit']))
	{
		$age=$_POST['num1'];
		if($age > 18)
		{
			echo "$age,You are eligible for voting.";
		}
		else
		{
			echo "$age,You are not eligible for voting.";
		}
	}
	?>
</body>
</html>