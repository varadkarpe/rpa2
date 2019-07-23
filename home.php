<?php
#$$uid=$_SESSION['UID_user_uid'];
include('db.php');
if (isset($_SESSION['botid']))
{ 
  $code=$_SESSION['botid']

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>RPA</title>
  
  
 
     

  <style>
  body
  {
	background-color:skyblue;  
  }
  
  #header
  {
	  height:100px;
	  width:100%;
  }
  
   #input
  {
	  height:100px;
	  width:100%;
  }
  
  #state
  {
	  height:500px;
	  width:50%;
	  float:left;
  }
  
  #display
  {
	  height:500px;
	  width:50%;
	  float:left;
  }

  
  .button1 {
  background-color: #004A7F;
  -webkit-border-radius: 10px;
  border-radius: 10px;
  border: none;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-family: Arial;
  font-size: 20px;
  padding: 5px 10px;
  text-align: center;
  text-decoration: none;
  -webkit-animation: glowing 1500ms infinite;
  -moz-animation: glowing 1500ms infinite;
  -o-animation: glowing 1500ms infinite;
  animation: glowing 1500ms infinite;
}

@keyframes glowing {
  0% { background-color: #d1d1e0; box-shadow: 0 0 3px #d1d1e0; }
  50% { background-color: #d1d1e0; box-shadow: 0 0 40px #d1d1e0; }
  100% { background-color: #d1d1e0; box-shadow: 0 0 3px #d1d1e0; }
}

  
  .button1 {
  background-color: #004A7F;
  -webkit-border-radius: 10px;
  border-radius: 10px;
  border: none;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-family: Arial;
  font-size: 20px;
  padding: 5px 10px;
  text-align: center;
  text-decoration: none;
  -webkit-animation: glowing 1500ms infinite;
  -moz-animation: glowing 1500ms infinite;
  -o-animation: glowing 1500ms infinite;
  animation: glowing 1500ms infinite;
}

@keyframes glowing {
  0% { background-color: #80ff80; box-shadow: 0 0 3px #80ff80; }
  50% { background-color: #80ff80; box-shadow: 0 0 40px #80ff80; }
  100% { background-color: #80ff80; box-shadow: 0 0 3px #80ff80; }
}

  .button2 {
  background-color: #004A7F;
  -webkit-border-radius: 10px;
  border-radius: 10px;
  border: none;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-family: Arial;
  font-size: 20px;
  padding: 5px 10px;
  text-align: center;
  text-decoration: none;
  -webkit-animation: glowing 1500ms infinite;
  -moz-animation: glowing 1500ms infinite;
  -o-animation: glowing 1500ms infinite;
  animation: glowing 1500ms infinite;
}

@keyframes glowing {
  0% { background-color: #66ff66; box-shadow: 0 0 3px #66ff66; }
  50% { background-color: #66ff66; box-shadow: 0 0 40px #66ff66; }
  100% { background-color: #66ff66; box-shadow: 0 0 3px #66ff66; }
}


.button3 {
  background-color: #004A7F;
  -webkit-border-radius: 10px;
  border-radius: 10px;
  border: none;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-family: Arial;
  font-size: 20px;
  padding: 5px 10px;
  text-align: center;
  text-decoration: none;
  -webkit-animation: glowing 1500ms infinite;
  -moz-animation: glowing 1500ms infinite;
  -o-animation: glowing 1500ms infinite;
  animation: glowing 1500ms infinite;
}

@keyframes glowing {
  0% { background-color: #4dff4d; box-shadow: 0 0 3px #4dff4d; }
  50% { background-color: #4dff4d; box-shadow: 0 0 40px #4dff4d; }
  100% { background-color: #4dff4d; box-shadow: 0 0 3px #4dff4d; }
}

.button4 {
  background-color: #004A7F;
  -webkit-border-radius: 10px;
  border-radius: 10px;
  border: none;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-family: Arial;
  font-size: 20px;
  padding: 5px 10px;
  text-align: center;
  text-decoration: none;
  -webkit-animation: glowing 1500ms infinite;
  -moz-animation: glowing 1500ms infinite;
  -o-animation: glowing 1500ms infinite;
  animation: glowing 1500ms infinite;
}

@keyframes glowing {
  0% { background-color: #33ff33; box-shadow: 0 0 3px #33ff33; }
  50% { background-color: #33ff33; box-shadow: 0 0 40px #33ff33; }
  100% { background-color: #33ff33; box-shadow: 0 0 3px #33ff33; }
}

.button5 {
  background-color: #004A7F;
  -webkit-border-radius: 10px;
  border-radius: 10px;
  border: none;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-family: Arial;
  font-size: 20px;
  padding: 5px 10px;
  text-align: center;
  text-decoration: none;
  -webkit-animation: glowing 1500ms infinite;
  -moz-animation: glowing 1500ms infinite;
  -o-animation: glowing 1500ms infinite;
  animation: glowing 1500ms infinite;
}

@keyframes glowing {
  0% { background-color: #1aff1a; box-shadow: 0 0 3px #1aff1a; }
  50% { background-color: #1aff1a; box-shadow: 0 0 40px #1aff1a; }
  100% { background-color: #1aff1a; box-shadow: 0 0 3px #1aff1a; }
}

.button6 {
  background-color: #004A7F;
  -webkit-border-radius: 10px;
  border-radius: 10px;
  border: none;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-family: Arial;
  font-size: 20px;
  padding: 5px 10px;
  text-align: center;
  text-decoration: none;
  -webkit-animation: glowing 1500ms infinite;
  -moz-animation: glowing 1500ms infinite;
  -o-animation: glowing 1500ms infinite;
  animation: glowing 1500ms infinite;
}

@keyframes glowing {
  0% { background-color: #00ff00; box-shadow: 0 0 3px #00ff00; }
  50% { background-color: #00ff00; box-shadow: 0 0 40px #00ff00; }
  100% { background-color: #00ff00; box-shadow: 0 0 3px #00ff00; }
}


.button7 {
  background-color: #004A7F;
  -webkit-border-radius: 10px;
  border-radius: 10px;
  border: none;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-family: Arial;
  font-size: 20px;
  padding: 5px 10px;
  text-align: center;
  text-decoration: none;
  -webkit-animation: glowing 1500ms infinite;
  -moz-animation: glowing 1500ms infinite;
  -o-animation: glowing 1500ms infinite;
  animation: glowing 1500ms infinite;
}

@keyframes glowing {
  0% { background-color: #00e600; box-shadow: 0 0 3px #00e600; }
  50% { background-color: #00e600; box-shadow: 0 0 40px #00e600; }
  100% { background-color: #00e600; box-shadow: 0 0 3px #00e600; }
}
  </style>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<script>
function changecolor(str)
{

    if (str==1){
        

document.getElementById("start").className = "button1";
document.getElementById("state1").className = "btn btn-default";
document.getElementById("state2").className = "btn btn-default";
document.getElementById("state3").className = "btn btn-default";
document.getElementById("state4").className = "btn btn-default";
document.getElementById("state5").className = "btn btn-default";
document.getElementById("end").className = "btn btn-default";

	}   

if (str==2){
        
 


document.getElementById("start").className = "button1";
document.getElementById("state1").className = "button2";
document.getElementById("state2").className = "btn btn-default";
document.getElementById("state3").className = "btn btn-default";
document.getElementById("state4").className = "btn btn-default";
document.getElementById("state5").className = "btn btn-default";
document.getElementById("end").className = "btn btn-default";
	}    

if (str==3){
        
 


document.getElementById("start").className = "button1";
document.getElementById("state1").className = "button2";
document.getElementById("state2").className = "button3";
document.getElementById("state3").className = "btn btn-default";
document.getElementById("state4").className = "btn btn-default";
document.getElementById("state5").className = "btn btn-default";
document.getElementById("end").className = "btn btn-default";
	}       	
    
	
	if (str==4){
        
 


document.getElementById("start").className = "button1";
document.getElementById("state1").className = "button2";
document.getElementById("state2").className = "button3";
document.getElementById("state3").className = "button4";
document.getElementById("state4").className = "btn btn-default";
document.getElementById("state5").className = "btn btn-default";
document.getElementById("end").className = "btn btn-default";
	}   

if (str==5){
        
 

document.getElementById("start").className = "button1";
document.getElementById("state1").className = "button2";
document.getElementById("state2").className = "button3";
document.getElementById("state3").className = "button4";
document.getElementById("state4").className = "button5";
document.getElementById("state5").className = "btn btn-default";
document.getElementById("end").className = "btn btn-default";
	}     

if (str==6){
        
 
document.getElementById("start").className = "button1";
document.getElementById("state1").className = "button2";
document.getElementById("state2").className = "button3";
document.getElementById("state3").className = "button4";
document.getElementById("state4").className = "button5";
document.getElementById("state5").className = "button6";
document.getElementById("end").className = "btn btn-default";
	}   

if (str==7){
        
 

document.getElementById("start").className = "button1";
document.getElementById("state1").className = "button2";
document.getElementById("state2").className = "button3";
document.getElementById("state3").className = "button4";
document.getElementById("state4").className = "button5";
document.getElementById("state5").className = "button6";
document.getElementById("end").className = "button7";
	}       	
}
</script>

 
</head>
<body bgcolor="#E6E6FA">
  <div class="wrapper">
<div id="header">
		<br>
		<center>
		<h3 style="color:black">Process Insights As On dd/mm/yyyy</h3>
		</center>
</div>		
<div id="input">

	<div class="row">
	<div class="col-sm-6">
	
	Start Date : <input type="date" size="100" name="startdate" class="btn btn-default"> 
	End Date : <input type="date" size="100"  name="enddate" class="btn btn-default">
	</div>
	<div class="col-sm-3" >
	<select name="robotname" id="robotname" class="btn btn-default">
	<option value="1"> Robot1 </option>
	<option value="2"> Robot2 </option>
	<option value="3"> Robot3 </option>
	<option value="4"> Robot4 </option>
	<option value="5"> Robot5 </option>
	<option value="6"> Robot6 </option>
	<option value="7"> Robot7 </option>
	<select>
	<button type="submit"  class="btn btn-success" onclick="changecolor(robotname.value)" name="submit">Submit</button><br>
	</div>
	<div class="col-sm-3" >
	Active/Deactive
	</div>
	</div>
</div>
 <div id="state">
 <center>
 <div id="start" name="start"  class="btn btn-default" > Start</div><br><br>
 <button id="state1" name="state1" class="btn btn-default" >State 1</button><br><br>
 <button id="state2" name="state2" class="btn btn-default">State 2</button><br><br>
 <button id="state3" name="state3" class="btn btn-default">State 3</button><br><br>
 <button id="state4" name="state4" class="btn btn-default">State 4</button><br><br>
 <button id="state5" name="state5" class="btn btn-default">State 5</button><br><br>
 <button id="end" name="end" class="btn btn-default">End</button><br><br>
  </center>
</div> 
<div id="display">
Robot ID:<?php echo $code; ?><br><br>
Last Run:  <br><br>
Last Successful Run:<br><br>
Next Possible Run:<br><br>
Next Possible Run Prediction:<br><br><br><br>
Total No. of Runs:<br><br>
% Of End to End Runs(Start and End):<br><br>
% Of Complete Runs(Start, states and End):<br><br><br><br>
State Where Maximum Failure Occurs:<br><br>
Possible Cause Of Failures:<br><br>

</div>

 </div>  
 
</body>
</html>
<?php
}
else
{
  echo "Error";
}
?>
