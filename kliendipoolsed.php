<!doctype html>
<html lang="en">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <meta charset="UTF-8">
    <title>OttPseudo</title>
</head>
<body>

<button type="button" onclick="alert('Tere maailm')">Tere maailm!</button>

<a href="http://www.khk.ee" onclick="alert('Tere maailm')">Tere maailm!</a>

<a href="" onclick="alert('Jääme siia!')">Jääme siia!</a> <br>

<img id="myImage" onclick="changeImage()" src="http://i.dailymail.co.uk/i/pix/2014/10/15/1413408700148_wps_39_image001_jpg.jpg" width="140" height="100">
<script>
    $(document).ready(function() {
        $('#myImage').click(function() {
            $('#myImage').attr("src", "https://www.petfinder.com/wp-content/uploads/2012/11/122163343-conditioning-dog-loud-noises-632x475.jpg");
        });
    });
</script>
<br>

<button><div id="red" type="button" onclick="red()">red</div></button>
<button><div id="green" type="button" onclick="green()">green</div></button>
<button><div id="blue" type="button" onclick="blue()">blue</div></button>
    <script>
        $(document).ready(function() {
            $("#red").click(function() {
                $("body").css("background-color","red");
            });
        });
        $(document).ready(function() {
            $("#green").click(function() {
                $("body").css("background-color","green");
            });
        });
        $(document).ready(function() {
            $("#blue").click(function() {
                $("body").css("background-color","blue"); 
            });
        });
</script>

</body>
</html>