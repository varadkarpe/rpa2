<?php
   include("config.php"); //including the database connection file
   $status=0; #flag variable used to display error if it occurs
   if($_SERVER["REQUEST_METHOD"] == "POST") 
   { 
    // username and password sent from form 
        $botid=$_POST['botid'];
        $sql = "SELECT * FROM robots WHERE id = '$botid' AND password='$_POST['password']'";
        $result = sqlsrv_query($conn,$sql);
        $count = sqlsrv_fetch($result);
        //$data=exec("python filename.py 2>&1");;//Placeholder for python output, enter parameters after the file name sperated by single space
        // If result matched $myusername and $mypassword, table row must be 1 row		
        if($count == 1) #home.php code starts here
        {
            #$$uid=$_SESSION['UID_user_uid'];
?>
            <!DOCTYPE html>
            <html>
                <head>
                    <meta charset="UTF-8">
                        <title>
                            RPA
                        </title>
                        <style>
                            body
                            {
                                visibility: visible ; 
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
                            .button1 
                            {
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

                            @keyframes glowing 
                            {
                                0% { background-color: #d1d1e0; box-shadow: 0 0 3px #d1d1e0; }
                                50% { background-color: #d1d1e0; box-shadow: 0 0 40px #d1d1e0; }
                                100% { background-color: #d1d1e0; box-shadow: 0 0 3px #d1d1e0; }
                            }

  
                            .button1 
                            {
                                background-color: #004A7F;
                                -webkit-border-radius: 100px;
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

                            @keyframes glowing 
                            {
                                0% { background-color: #80ff80; box-shadow: 0 0 3px #80ff80; }
                                50% { background-color: #80ff80; box-shadow: 0 0 40px #80ff80; }
                                100% { background-color: #80ff80; box-shadow: 0 0 3px #80ff80; }
                            }

                            .button2 
                            {
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
                            .center
                            {
                                position: absolute;
                                top: 50%;
                                left: 50%;
                                transform: translate(1300%,-1000%);
                            }
                            input[type="checkbox"]
                            {
                                position: relative;
                                width:40px;
                                height: 20px;
                                -webkit-appearance:none;
                                background: #c6c6c6;
                                outline: none;
                                border-radius: 20px;
                                box-shadow: inset 0 0 5px rgba(0,0,0,.2);
                                transition: .5s;
                            }
                            input[type="checkbox"]:checked
                            {
                                background: #03a8f4;
                            }
                            input[type="checkbox"]:before
                            {
                                content: '';
                                position: absolute;
                                width: 20px;
                                height: 20px;
                                border-radius: 20px;
                                top: 0;
                                left: 0;
                                background: #ffffff;
                                transform: scale(1.1);
                                box-shadow: 0 2px 5px rgba(0,0,0,.2);
                                transition: .5s;
                            }
                            input:checked[type="checkbox"]:before
                            {
                                left: 20px;

                            }
                         
                      </style>
                        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

                    <!-- jQuery library -->
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

                    <!-- Latest compiled JavaScript -->
                        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

                        <script>
                            function changecolor()
                            {
                                var strdata=<?php echo json_encode($data); ?>;
                                //str is of type string, converting it into a javascript array element by element
                                var str=new Array();
                                var j=0;
                                for(int i=0;i<str.length;i++)
                                {
                                    var temp="";
                                    if(strdata[i]!=" "||strdata[i]!="," || strdata!="[" || strdata!="]")
                                    {
                                        temp=temp.concat(strdata[i]);
                                    }
                                    else
                                    {
                                        temp=(Number)temp; //type casting into an integer from a string
                                        str.splice(j,0,temp); //Insertion of the value in a javascript array
                                        j++;
                                    }
                                } 
                                //Write the code here to process the array of values recieved from python

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

                            if (str==7)
                            {
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
                            <a href="index.html"><button >Home</button></a> 
                            <div id="display">
                                Robot ID:<?php echo $botid; ?><br><br>
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
                        <div class="center"><input type="checkbox" name=""></div> 
                                 
                </body>
            </html>
<?php
        }
        

                            
        else
        {
            $str= $str."Invalid Robot ID";
            $status=1; 
?>
            <!DOCTYPE html>
            <html>
                <head>
                    <title>
                        Robot Information
                    </title>
                    <style type="text/css">
                        h2
                        {
                            text-align: center;
                            color: black;
                            text-transform: uppercase;
                            font-weight: 500;
                        }
                        h3
                        {
                            position: absolute;
                            top: 50%;
                            left: 50%;
                            transform: translate(-50%,-50%);
                            background: #ffffff;
                            text-align: center;
                            color: grey;
                            text-transform: uppercase;
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
                            transform: translate(400%,-100%);
                        }
                        button:hover
                        {
                            background: #2ecc71;
                        }   
                    </style>
                </head>
                <body>
                    <h3><?php echo $str ?></h3>
                        
                    <a href="index.html"><button>Home</button></a>
                    </body>
            </html>
<?php  
        }
    }
?>
