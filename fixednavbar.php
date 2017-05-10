<!DOCTYPE html>
<html>
<title>Navbar</title>
<head>
<!--require_once("ahtmlheader.php"); ?> -->
    <script src="http://code.jquery.com/jquery-1.9.0.min.js"></script>
    <link href="bootstrap/css/core.css" rel="stylesheet" type="text/css"> 
<script>
var showText = function (target, message, index, interval) {    
  if (index < message.length) { 
    $(target).append(message[index++]); 
    setTimeout(function () { showText(target, message, index, interval); }, interval); 
  }
}
    
$(function () { 
  showText("#msg", "Hi, My name is Gurkaran Singh Boparai!", 0, 250);
});     
</script>
    <style>
        #msg {  
          font-family: 'Raleway', Helvetica, Arial, sans-serif;
          font-weight:500; 
          color: ghostwhite;
          font-size: 1.5rem;
        }
    </style>      
</head> 
<body>
    
<div class="navbar" style="background: rgba(0,0,0,0.8); box-shadow: 0px 0px 8px 0px #000000;" >
      <a href="#">
          <div id="msg"> 
            <span id="text_target"></span>
          </div>      
      </a> 
          <!--
      <form class="form-inline" style="float: right">
        <input class="form-control mr-sm-2" type="text" placeholder="Search">
        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
      </form> 
    <div style="float: right; position: absolute; clear: both; right: 0" class="nav navbar-right">        
<canvas id="myCanvas" width="300" height="45"></canvas>
<script>
    var canvas = document.getElementById("myCanvas");
    console.log(canvas);
    var ctx = canvas.getContext("2d");
    var x = canvas.width/2;
    var y = canvas.height-30;
    var dx = 2;
    var dy = -2;
    var ballRadius = 6;
    
    function drawBall() {
        ctx.beginPath();
        ctx.arc(x, y, ballRadius, 0, Math.PI*2);
        ctx.fillStyle = "#FFFFFF";
        ctx.fill();
        ctx.closePath();
    }
    
    function draw() {
        //ctx.clearRect(0, 0, canvas.width, canvas.height);
        drawBall();
        if(x + dx > canvas.width-ballRadius || x + dx <             ballRadius) {
            dx = -dx;
        }
        if(y + dy > canvas.height-ballRadius || y + dy <             ballRadius) {
            dy = -dy;
        }
        x += dx;
        y += dy;
    }
    setInterval(draw, 50);
    

</script>         
    </div>-->
</div>        
    
    </body>
</html>