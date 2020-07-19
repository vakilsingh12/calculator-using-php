<?php
$value="";
if($_SERVER['REQUEST_METHOD']=="POST")
{
	$p=$_POST['first'];
	$q=$_POST['second'];
	if($_REQUEST["btn"]=="+")
	{
		$value=$p+$q;
	}
	if($_REQUEST["btn"]=="-")
	{
		$value=$p-$q;
	}
	if($_REQUEST["btn"]=="*")
	{
		$value=$p*$q;
	}
	if($_REQUEST["btn"]=="/")
	{
		$value=$p/$q;
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>csenotes12.in</title>
	<style type="text/css">
		.block
		{
			background-color: skyblue;
            color:red;
            margin-top: 70px;
            width: 70%;
            margin-left: 100px;

		}
		input
		{
			font-size: 20px;
			border-radius: 12px;
			outline: none;
			padding-left: 10px;
		}
		select
		{
			font-size: 20px;
			border-radius: 12px;
			outline: none;
		}
	</style>
</head>
<body>
<div class="block">
<fieldset>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
Number1: <input type="text" name="first"><br><br>
Number2:<input type="text" name="second"><br><br>
<select name="btn">
	<option value="+">Add</option>
	<option value="-">sub</option>
	<option value="*">multiplication</option>
	<option value="/">division</option>
</select>
<input type="submit" value="submit">
</form>
<hr>
<?php
echo "Value of ".$value;
?>
</div>
</fieldset>

</body>
</html>
