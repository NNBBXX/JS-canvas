<?php
 $ppost = $_POST['name']
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<img style="display: none" id="myPicture" >
<canvas id="myCanvas" width="640" height="311"></canvas>
<script>
    window.onload = choosePic;
    function choosePic() {
        var myPix = new Array("images/lion.jpg","images/tiger.jpg","images/bear.jpg");
        var randomNum = Math.floor((Math.random() * myPix.length));
        document.getElementById("myPicture").src = myPix[randomNum];
    }
    var c=document.getElementById("myCanvas");
    var img=document.getElementById("myPicture");
    var ctx=c.getContext("2d");
    var teXt =
    var index = Math.floor((Math.random() * teXt.length));
    img.onload = function() {
        ctx.drawImage(img,10,10);
        ctx.font="30px Arial";
        ctx.fillText(<?php $ppost; ?>,10,50);
    }
</script>
</body>
</html>