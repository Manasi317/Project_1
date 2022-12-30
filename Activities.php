<?php
session_start();
if ($_SESSION['u_type'] == "NU")
{
?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel = "stylesheet" type = "text/css" href = "h.css" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="navbarr.css">


<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5ced9a00a667a0210d59e2b8/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<!--End of Tawk.to Script-->
</head>
<style>
.parallax {
  /* The image used */
  background-image: url("back.jpg");

  /* Set a specific height */
  min-height: 100%; 
  opacity:0.5;
  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.btn {
  background-color: DodgerBlue;
  border: none;
  color: white;
  font-size: 1.5vw;
  
  cursor: pointer;
  height: 18vw;
  width: 25vw;
  background-color: #000066;
  border-radius: 50%;
}

.btn:hover {
  background-color: RoyalBlue;
}
</style>

<body>
<div id="navbar">
  <a href="our_hackathon.php">Home</a>
  <a href="roadsafety.html">Road Safety </a>
  <a class="active" href="login.php">Activities</a>
  <a href="News.html"> News&Blogs </a>
  <a href="Contact.html"> Contact Us </a>
</div>

<div>
 <img src="ground.jpg" width="100%" height="750px">
    <div id="hid" class="centered" style="width:100%; text-align:center; font-size:4VW; font-family:Algerian; "></div><br>
</div> 

<div class="parallax">

<br><br><button class="btn" onclick="window.location.href = 'poster1.html';" style="margin-right: 10vw">
<b style="font-size:2vw "> ACTIVITY:1</b><br>
<P style="font-family:Cooper Black">DOWNLOAD ROAD SAFETY POSTER</P>
</button>

<button class="btn" onclick="window.location.href = 'login1.php';" style="margin-right: 10vw">
<b style="font-size:2vw "> ACTIVITY:2</b><br>
<P style="font-family:Cooper Black">ROAD SAFETY QUIZ</P>
</button>

<button class="btn"  onclick="window.location.href = 'cross.html';"> 
<b style="font-size:2vw " > ACTIVITY:3</b><br>
<P style="font-family:Cooper Black">ROAD SAFETY CROSSWORD</P>
</button><br><br><br>
<div align="center">
<button class="btn"  onclick="window.location.href = 'setSurvey.php';"> 
<b style="font-size:2vw " > ACTIVITY:4</b><br>
<P style="font-family:Cooper Black">ROAD SAFETY SURVEY</P>
</button>

<button class="btn"  onclick="window.location.href = 'video.html';"> 
<b style="font-size:2vw "> ACTIVITY:5</b><br>
<P style="font-family:Cooper Black">ROAD SAFETY VIDEOS</P>
</button>
</div></div>
<br><br>

<button>
<a href="our_hackathon.php" type="button">LOGOUT</a>
</button>


<script>
// popovers initialization - on click
$('[data-toggle="popover-click"]').popover({
  html: true,
  trigger: 'click',
  placement: 'bottom',
  content: function () { return '<img src="' + $(this).data('img') + '" />'; }
});

  var i = 1;
            function func()
            {
                var message = "ROAD SAFETY ACTIVITIES";
                if( i <= message.length )
                {
                    
                    var txt = message.substring(0,i);
                    document.getElementById("hid").innerHTML = txt;
                    document.getElementById("hid").style.color = "white";
                    
                    
                    setTimeout("func()",200);
                    i++;
                }
                
                else{
                    
                    i = 1;
                    document.getElementById("hid").innerHTML = "";
                    setTimeout("func()",1000);
                }
            }
            
            func();
</script>

<script src="navbar.js">
</script>
</body>
</html>
<?php
}
else{
    header("location:our_hackathon.php"); // redirect to login page!
}
?>
