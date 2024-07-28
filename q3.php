<html>
<body>
	<form method="POST">
		Enter A Digit:<input type="number" name="num1"/><br><br>
		<input type="submit" name="submit">
	</form>
	<?php
	function count_digit($num)
	{
		$count=0;
		while($num!=0)
		{
			$num=(int)($num/10);
			$count++;
		}
		return $count;
	}
	if(isset($_POST['submit']))
	{
		$user_input=$_POST['num1'];
		$digit_count=count_digit($user_input);
		echo "Number of Digits is: $digit_count";
	}
	?>
</body>
</html>