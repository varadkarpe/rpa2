<?php
	include('config.php');
	$str=""; #This string will store the data which is to displayed on the screen to the user.
	$name=$_POST['botname']; #Copying values into local variables
	$tool=$_POST['toolused'];
	$loc=$_POST['location'];
	$curr=$_POST['currstate'];

	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{	
		if($name==""||$tool==""||$loc==""||$curr=="") #Checking for blank entries
		{
			$str=$str."Information has been entered incorrectly";
		}
		else
		{
			#generating unique key for the robot
			A:
			$number=(string)mt_rand(0,9);
			$number=$number.(string)mt_rand(0,9);
			$code=chr(mt_rand(65,90));
			$code=$code.chr(mt_rand(65,90));
			$code=$number.$code;
			$code=$code.(string)mt_rand(0,9);
			$result=sqlsrv_query($conn,"SELECT * FROM robots WHERE id='$code'");
			$result2=mysqli_fetch($result);
			if ($result2) 
			{
				goto A; #generating a new code because the one created isnt unique
			}
			else
			{
				$sql=sqlsrv_fetch($conn,"INSERT INTO robots(id,name,tool,location,state)VALUES('$code','$name','$tool','$loc','$curr')");
				if ($sql) #Checking whether insertion has been successful or not
				{
    				$str=$str."New robot created successfully<br>"; 
    				$str=$str."Unique code:".$code."<br>";
    				$str=$str."Tool:".$tool."<br>";
    				$str=$str."Location:".$loc."<br>";
    				$str=$str."Current State:".$curr."<br>";
    			} 
    			else 
    			{
    				$str=$str."Error" . $sql . "<br>" . $conn->error;
    			}	
			}	
		}
	} 
	else #Message to displayed if the user has left any fields blank
	{
		$str=$str."Not all fields have been entered.";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Result</title>
	<style type="text/css">
		div
		{
			position: absolute;
  			top: 50%;
  			left: 50%;
  			transform: translate(-50%,-50%);	
		}
		h3
		{
  			color: grey;
  			font-weight: 500;
		}
		button
		{
  			border:0;
  			background: none;
  			display: block;
  			margin: 20px auto;
  			text-align: center;
  			border: 2px solid #2ecc71;
  			padding: 14px 40px;
  			outline: none;
  			color: black;
  			border-radius: 24px;
  			transition: 0.25s;
  			cursor: pointer;
		}
		button:hover
		{
  			background: #2ecc71;
		}
	</style>
</head>
<body>
	<div>
		<h3><?php echo $str; ?></h3> 
		<br>
		<a href="index.html"><button value="Home">Home</button></a>
	</div>
	<center>
		
	</center>
</body>
</html>