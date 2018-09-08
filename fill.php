<?php
session_start();
//echo "welcome to ".$_SESSION['user'];
?>
<html>
    <head>
        <style>
            body{
                background: url('back1.jpeg') no-repeat;
                background-size: cover;
                padding: 10px;
            }
body {
    margin: 0;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 25%;
    background-color: lightsteelblue;
    position: fixed;
    height: 100%;
    overflow: auto;
}

li a {
    display: block;
    color: #000;
    padding: 16px 16px;
    text-decoration: none;
}

li a.active {
    background-color: #4CAF50;
    color: white;
}

li a:hover:not(.active) {
    background-color: #555;
    color: white;
}
</style>
<script>
    function ena()
    {
        document.getElementById('b1').disabled=false;
    }
</script>
    </head>
<body>
<ul>
    <li><a href="register1.php"><input type="button" value="enter faculty registration" style="width: 270px;height: 40px"/></a></br></li>
    <li><a href="fills1.php"><input type="button" value="enter faculty subjects" style="width: 270px;height: 40px"/></a></br></li>
    <li><a href="fillt1.php"><input type="button" value="fill timetables" style="width: 270px;height: 40px"/></a></br></li>
    <li><a href="writedocs.php"><input type="button" value="download timetables" style="width: 270px;height: 40px" onclick="ena()"/></a></br></li>
    <li><a href="mails.php"><input type="button" id="b1" value="send mail to staff" style="width: 270px;height: 40px" disabled="disable"/></a></br></li>
    <li style="text-align:center"><a href="logout.php">logout</a></li>
</ul>
    <div style="margin-left:25%;padding:1px 16px;height:1000px;">
        <h1>WELCOME</h1>
        <p>Hello admin</p>
        <p>Enter faculty subjects first and timetables next</p>
        <p>Download the timetables file first and then send to mail</p>
    </div>
</body>
</html>
