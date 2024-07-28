<html>
<body>
	<form method="post">
		Enter a string:<input type="text" name="char1"/><br><br>
		<input type="submit" name="submit">
	</form>
	<?php
	if(isset($_POST['submit']))
	{
		$char=$_POST['char1'];

		if($char == 'a' || $char == 'e' || $char == 'i' || $char == 'o' || $char == 'u' || 
		   $char == 'A' || $char == 'E' || $char == 'I' || $char == 'O' || $char == 'U')		
		{
			echo "$char is vowel.";
		}
		else
		{
			echo "$char is constant.";
		}
	}
	?>
</body>
</html>