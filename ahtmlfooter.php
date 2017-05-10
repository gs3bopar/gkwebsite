<head> 
    <link href="bootstrap/css/core.css" rel="stylesheet" type="text/css"> 
    <script>
    function image(img) { 
        if(img.indexOf("twitter") != -1) {
            window.location.href = "http://www.twitter.com";
        }
        if(img.indexOf("facebook") != -1) {
           window.location.href = "http://www.facebook.com";
        }
        if(img.indexOf("google") != -1) {
            window.location.href = "http://www.google.com";
        }
        if(img.indexOf("youtube") != -1) {
            window.location.href = "http://www.youtube.com";
        }
    } 
    </script>
</head>
    <div class="footer" style="background: rgba(0,0,0,0.8); box-shadow: 0px 0px 8px 0px #000000;">
        <div class="middle" >
        <img class="hvr-grow" id="image1" src="images/social/facebook.png"  onclick="image(this.src);"/>
        
        <img class="hvr-grow" id="image1" src="images/social/twitter.png"   onclick="image(this.src);"/>
        
        <img class="hvr-grow" id="image1" src="images/social/google.png"   onclick="image(this.src);" />
        
        <img class="hvr-grow" id="image1" src="images/social/youtube.png"   onclick="image(this.src);"/>
        </div>
<!--
        <p>&nbsp;&nbsp;© 2017.
            <a href="#">Gurkaran </a>
        
        </p> -->
    </div>