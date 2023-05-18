<?php
include("dbconnect.php");
session_start();
extract($_POST);
$date =date("Y-m-d");
date_default_timezone_set("Asia/Calcutta");
$time=date('g:i a');
$t=date('g:i', strtotime("now"));
if(isset($_POST['btn']))
{
$g=mysql_query("select * from register where email='$textarea1' and password='$textarea'");
$g1=mysql_fetch_array($g);
echo $text=$g1['etime'];
echo $textbox3;
$qry=mysql_query("SELECT * FROM register WHERE etime >='$textbox3' and email='$textarea1' and password='$textarea'");
$num=mysql_num_rows($qry);
if($num==1)
{
$qrt=mysql_query("update login set date='$date' where uname='$textarea1'");
$qrt;
$qrt1=mysql_query("update login set time='$time' where uname='$textarea1'");
$qrt1;
header("location:home.php");
$_SESSION['uname']=$textarea1;
}
$qry=mysql_query("select * from admin where uname='$textarea1' && password='$textarea'");
$num=mysql_num_rows($qry);
if($num)
{
header("location:../admin.php");
}
else
{
?>
<script language="javascript">
	alert("login UnSuccessfully..");
	</script>
	<?php
}
}
?>
<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JS Typing Speed Test</title>
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,700,700i,900,900i" type="text/css" media="all">
    <link rel="stylesheet" href="style.css">
    <style type="text/css">
<!--
.style1 {font-size: 24px}
-->
    </style>
</head>

<body>
    <header class="masthead">KEYSTROKE WITH DATA LEAKAGE DETECTION SECURE EMAIL AUTHENTICATION
      
    </header>
    <main class="main">
        <article class="intro">
           </p>
        </article><!-- .intro -->
        <section class="test-area">
            <div id="origin-text">
                <p align="center" class="style1">User Login </p>
            </div>
            <!-- #origin-text -->

            <div class="test-wrapper">
             
			  <form method="post" action="" name="form1" >
			  <p>&nbsp;</p>
			  <table width="50%" border="0" align="center">
                <tr>
                  <td width="1%" height="37">&nbsp;</td>
                  <td width="24%">&nbsp;</td>
                  <td width="24%">&nbsp;</td>
                  <td width="24%">&nbsp;</td>
                  <td width="24%">&nbsp;</td>
                  <td width="24%">&nbsp;</td>
                  <td width="24%">&nbsp;</td>
                  <td width="27%">Email Id </td>
                  <td width="34%"><input type="email" id="testarea1" name="textarea1" ></td>
                </tr>
                <tr>
                  <td height="43">&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>Password</td>
                  <td><label>
                    <input name="textarea" type="password" id="testarea">
                  </label></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td><input type="text" id="textbox3" name="textbox3" value=""></td>
                  <td><label>
                    <input name="btn" type="submit" id="btn" value="Submit">
                    <input type="reset" name="Submit3" value="Reset">
                  </label></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td colspan="2"><div align="right"><a href="register.php" class="text-center"> New Register</a></div></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
              </table>
			  <p>&nbsp;  </p>
			  <div id="mytext"></div>
            <!-- .test-wrapper -->

            <div class="meta">
                <section id="clock">
                    <div class="timer">00:00:00</div>
                </section>

               
                <label>
               
                </label>
            </div><!-- .meta -->
        </section><!-- .test-area -->
    </main>
</form>
<script>
const testWrapper = document.querySelector(".test-wrapper");
const testArea = document.querySelector("#testarea");
const originText = document.querySelector("#origin-text p").innerHTML;
const resetButton = document.querySelector("#reset");
const theTimer = document.querySelector(".timer");

var timer = [0,0,0,0];
var interval;
var timerRunning = false;

// Add leading zero to numbers 9 or below (purely for aesthetics):
function leadingZero(time) {
    if (time <= 9) {
        time = "0" + time;
    }
	
    return time;
}

// Run a standard minute/second/hundredths timer:
function runTimer() {
    let currentTime = leadingZero(timer[0]) + ":" + leadingZero(timer[1]) + ":" + leadingZero(timer[2]);
    theTimer.innerHTML = currentTime;
    timer[3]++;

    timer[0] = Math.floor((timer[3]/100)/60);
    timer[1] = Math.floor((timer[3]/100) - (timer[0] * 60));
    timer[2] = Math.floor(timer[3] - (timer[1] * 100) - (timer[0] * 6000));
	var textbox3 = document.getElementById('textbox3');
        textbox3.value = theTimer.innerHTML;
	
}

// Match the text entered with the provided text on the page:
function spellCheck() {
    let textEntered = testArea.value;
    let originTextMatch = originText.substring(0,textEntered.length);

    if (textEntered == originText) {
        clearInterval(interval);
        testWrapper.style.borderColor = "#429890";
    } else {
        if (textEntered == originTextMatch) {
            testWrapper.style.borderColor = "#65CCf3";
        } else {
            testWrapper.style.borderColor = "#E95D0F";
        }
    }

}

// Start the timer:
function start() {
    let textEnterdLength = testArea.value.length;
    if (textEnterdLength === 0 && !timerRunning) {
        timerRunning = true;
        interval = setInterval(runTimer, 10);
		
		
    }
	
    console.log(textEnterdLength);
}

// Reset everything:
function reset() {
    clearInterval(interval);
    interval = null;
    timer = [0,0,0,0];
    timerRunning = false;

    testArea.value = "";
    theTimer.innerHTML = "00:00:00";
    testWrapper.style.borderColor = "grey";
}

// Event listeners for keyboard input and the reset
testArea.addEventListener("keypress", start, false);

testArea.addEventListener("keyup", spellCheck, false);
resetButton.addEventListener("click", reset, false);

</script>
            </div>
			
</body>

</html>


