<?php
include("dbconnect.php");
session_start();
extract($_POST);
$id=$_REQUEST['id'];
if(isset($_POST['btn']))
{
$ltime=$_REQUEST['textbox3'];

$qr=mysql_query("update register set etime='$textbox3' where id='$id'");

if($qr)
{
?>
<script language="javascript">
	alert("Register Successfully..");
	window.location.href="index.php";
	</script>
	<?php
}
else
{
echo "Error";
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
    <header class="masthead">
      
    </header>
    <main class="main">
        <article class="intro">
           </p>
        </article><!-- .intro -->
        <section class="test-area">
            <div id="origin-text">
                <p align="center" class="style1">Password Speed Test</p>
            </div>
            <!-- #origin-text -->

            <div class="test-wrapper">
             
			  <form method="post" action="" name="form1" >
			  <p>&nbsp;</p>
			  <table width="50%" border="0" align="center">
                <tr>
                  <td width="2%" height="37">&nbsp;</td>
                  <td width="15%">&nbsp;</td>
                  <td width="30%">Email Id </td>
                  <td width="44%"><input type="email" id="test-area1" name="textarea1" ></td>
                  <td width="2%">&nbsp;</td>
                  <td width="2%">&nbsp;</td>
                  <td width="2%">&nbsp;</td>
                  <td width="3%">&nbsp;</td>
                </tr>
                <tr>
                  <td height="43">&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>Password</td>
                  <td><label>
                    <input type="password" name="textarea1" id="test-area">
                  </label></td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td><input type="text" id="textbox3" name="textbox3" value=""></td>
                  <td><label>
                    <input name="btn" type="submit" id="btn" value="Submit">
                    <input type="reset" name="Submit3" value="Reset">
                  </label></td>
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
const testArea = document.querySelector("#test-area");
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
