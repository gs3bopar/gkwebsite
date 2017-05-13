<!DOCTYPE html>
<html>
<title>Karan Boparai</title>
<head>
    <link href='http://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>

    <link href='http://fonts.googleapis.com/css?family=Raleway:100' rel='stylesheet' type='text/css'>
    <link href="bootstrap/css/core.css" rel="stylesheet" type="text/css">    
    <script>
        function page(str) {
            if(str.indexOf("photography") != -1) {
                window.location.href = "/gkwebsite/photography.php";
            }
            if(str.indexOf("resume") != -1) {
               window.location.href = "/gkwebsite/resume.pdf";
            }
            if(str.indexOf("github") != -1) {
                window.location.href = "https://github.com/gs3bopar";
            }
            if(str.indexOf("linkedin") != -1) {
                window.location.href = "https://www.linkedin.com/in/gurkaran-boparai/";
            }
        }
    </script>
</head>
    <?php require_once("fixednavbar.php"); ?>
    <body>
        <video playsinline autoplay muted loop id="bgvid">
            <source src="assets/videos/grasspan.mp4" type="video/mp4">
        </video>
        
        <div id="polina">
        <h1 class="hvr-grow" >About</h1>
        <p>I'm candidate for Bachelor of Computer Science at the <i><a style="color:ghostwhite; text-decoration: none;" href="https://uwaterloo.ca/">University of Waterloo </a></i>. I'm currently enrolled in 2A and I love coding.
        Also, I am a person who is positive about every aspect of life. There are many things I like to do, to see, and to experience. I like to read, I like to write, I like to think, I like to dream; I like to talk, I like to listen. I like to see the sunrise in the morning, I like to see the moonlight at night, I like to feel the music flowing on my face, I like to smell the wind coming from the ocean. I like to look at the clouds in the sky with a blank mind, I like to do thought experiment when I cannot sleep in the middle of the night. I like flowers in spring, rain in summer, leaves in autumn, and snow in winter. I like to be surrounded by people. I like country's peace, I like delicious food and comfortable shoes, I like good books and romantic movies. I like the land and the nature, I like people. And, I like to laugh.</p>
        </div>
        <br/>
        <button class="hvr-grow" id="photography" onclick="page(this.id);">Photography</button><br/>
        <button class="hvr-grow"  id="resume" onclick="page(this.id);">Resume</button><br/>
        <button class="hvr-grow"  id="github" onclick="page(this.id);">Github</button><br/>
        <button class="hvr-grow"  id="linkedin" onclick="page(this.id);">Linked In</button>
        <br>
    <?php require_once("ahtmlfooter.php"); ?>    
    </body>
    
</html> 