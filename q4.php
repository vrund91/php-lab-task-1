<html>
<body>
	<form method="POST">
		Enter a value:<input type="number" name="num1"/><br><br>
		<select name="choice">
			<option value="1">square</option>
			<option value="2">Factorial</option>
			<option value="3">square root</option>
			<option value="4">Exit</option>
		</select>
		<input type="submit" name="submit">
	</form>
	<?php
	if(isset($_POST['submit']))
	{
		$num=$_POST['num1'];
		$choice=$_POST['choice'];

		switch($choice)
		{
			case 1:
			$result = $num * $num;
			echo "square of $num: $result";
			break;

			case 2:
			function fact($n)
			{
				if($n == 0 || $n == 1)
				{
					return 1;
				}
				else
				{
					return $n * fact($n-1);
				}
			}
			$result=fact($num);
			echo "factorial of $num is: $result";
			break;

			case 3:
			$result=sqrt($num);
			echo "square root of $num is: $result";
			break;

			case 4:
			echo "Exit";
			break;

			default:
			echo "Invalid choice";
		}
	}

	?>
</body>
</html>