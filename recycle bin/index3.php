<!DOCTYPE html>
<html lang="en">
<head>

<!--------------- Share Preview ---------------------------->

<meta name="description" content="Uniwatch - Watch Latest Movies & News FREE">
<meta property="og:title" content="Uniwatch - Watch Latest Movies & News FREE "" /> <! — Maximum 35 characters →
<meta property="og:url" content="http://www.uniwatch.ml" /> 
<meta property="og:description" content="Uniwatch is a streaming service for watching latest movies and Live news for Free, Developed by Acrobet Inc."> 
<meta property="og:image" content="images/icon3.png"> 
<meta property="og:type" content="website" />

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="images/icon..png">

    <!--------------------------- Google Fonts -------------------------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merienda+One&family=Reggae+One&display=swap" rel="stylesheet">

<!------------------------- MyStyle --------------------------------->
    <link rel="stylesheet" href="MyStyle/v2.0.3/mystyle.css">
    <script src="MyStyle/v2.0.3/mystyle-icons.js"></script>

    <title>Uniwatch</title>
</head>
<body style="background: #030814;">

<!----------------- fire work ------------------------>
<div class="firework f1" id="firework1">
	<div class="explosion"></div>
	<div class="explosion"></div>
	<div class="explosion"></div>
	<div class="explosion"></div>
	<div class="explosion"></div>
	<div class="explosion"></div>
	<div class="explosion"></div>
	<div class="explosion"></div>
	<div class="explosion"></div>
	<div class="explosion"></div>
	<div class="explosion"></div>
	<div class="explosion"></div>
</div>
<div class="firework f2" id="firework2">
	<div class="explosion"></div>
	<div class="explosion"></div>
	<div class="explosion"></div>
	<div class="explosion"></div>
	<div class="explosion"></div>
	<div class="explosion"></div>
	<div class="explosion"></div>
	<div class="explosion"></div>
	<div class="explosion"></div>
	<div class="explosion"></div>
	<div class="explosion"></div>
	<div class="explosion"></div>
</div>
<div class="firework f3" id="firework3">
	<div class="explosion"></div>
	<div class="explosion"></div>
	<div class="explosion"></div>
	<div class="explosion"></div>
	<div class="explosion"></div>
	<div class="explosion"></div>
	<div class="explosion"></div>
	<div class="explosion"></div>
	<div class="explosion"></div>
	<div class="explosion"></div>
	<div class="explosion"></div>
	<div class="explosion"></div>
</div>

    
<style>
p {
  text-align: center;
  font-size: 60px;
  margin-top: 0px;
  color: white;
}

/*------- Fire work style-------------------------*/

         .firework {
	position: absolute;
}
.explosion {
	position: absolute;
	left: -2px;
	bottom: 0;
	width: 4px;
	height: 80px;
	transform-origin: 50% 100%;
	/* background-color: rgba(0,0,0,.2); */
	overflow: hidden;
}
.explosion:nth-child(1) {
	transform: rotate(0deg) translateY(-15px);
}
.explosion:nth-child(2) {
	transform: rotate(30deg) translateY(-15px);
}
.explosion:nth-child(3) {
	transform: rotate(60deg) translateY(-15px);
}
.explosion:nth-child(4) {
	transform: rotate(90deg) translateY(-15px);
}
.explosion:nth-child(5) {
	transform: rotate(120deg) translateY(-15px);
}
.explosion:nth-child(6) {
	transform: rotate(150deg) translateY(-15px);
}
.explosion:nth-child(7) {
	transform: rotate(180deg) translateY(-15px);
}
.explosion:nth-child(8) {
	transform: rotate(210deg) translateY(-15px);
}
.explosion:nth-child(9) {
	transform: rotate(240deg) translateY(-15px);
}
.explosion:nth-child(10) {
	transform: rotate(270deg) translateY(-15px);
}
.explosion:nth-child(11) {
	transform: rotate(300deg) translateY(-15px);
}
.explosion:nth-child(12) {
	transform: rotate(330deg) translateY(-15px);
}

.firework{
    position: fixed;
}
 .firework .explosion::before {
	content: '';
	position: absolute;
	left: 0;
	right: 0;
	top: 100%;
	height: 40px;
}
.f1 .explosion::before{
	background-color: #ff0000;
}
.f2 .explosion::before {
	background-color: blue;
}
.f3 .explosion::before {
	background-color: green;
}
@keyframes explosion {
	0% {
		top: 100%;
	}
	33%, 100% {
		top: -50%;
	}
}

#firework1 {
	left: 50%;
	top: 50%;
	transform: scale(2);
}
#firework1 .explosion::before {
	animation: explosion 2s ease-in-out infinite;
}

#firework2 {
	left: 40%;
	top: 45%;
	transform: scale(1.5);
}
#firework2 .explosion::before {
	animation: explosion 2s .6s ease-in-out infinite;
}

#firework3 {
	left: 60%;
	top: 65%;
	transform: scale(1);
}
#firework3 .explosion::before {
	animation: explosion 2s .4s ease-in-out infinite;
}

.youtube-link {
	position: fixed;
	left: 20px;
	bottom: 20px;
	color: #fff;
	text-decoration: none;
	font-size: 12px;
}

</style>

<a href="register"><button style="position: fixed; right: 20px; top: 20px;" class="btn blue">Register Now!</button></a>

<center>
    
    <h1 style="color:#94c6ff; font-family: 'Reggae One', cursive; margin-top: 15%; font-size: 50px; display: inline-block;">Uniwatch</h1> <br>
    <h2 style="color: white;">This site will launch on New Year <br> (1st Jan, 2022)</h2>
</center>

<p id="demo"></p>

<script>
// Set the date we're counting down to
var countDownDate = new Date("Jan 1, 2022 12:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>

</body>
</html>



</body>
</html>