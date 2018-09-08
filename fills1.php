<?php
session_start();
?>
<html>
    <head>
        <style>
            .button {
    background-color: #555555;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
.button:hover{
    background-color: #008CBA;
}
            #customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: lightgoldenrodyellow;
    color: black;
}
        </style>
    <script>
        function ycall()
        {
            var w=document.getElementById(300).selectedIndex;
                var x=document.getElementsByTagName("option")[w].value;
                
    if (x == "" ) {
        return;
    } else {
        
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var d = this.responseText;
                document.getElementById("id1").innerHTML=d;
            }
        };
        xmlhttp.open("GET","fillsi.php?q="+x,true);
        xmlhttp.send();
    }
        }
        function ycall1(n)
        {
            var a=n-2000;
            var b=500+a;
            var g=3000+a;
            
           
                var u=document.getElementById(a);
                var l= u.options[u.selectedIndex].value;
               
                var z=document.getElementById(b);
                var m=z.options[z.selectedIndex].value;
                
    if (l == "" || m == "") {
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var p="<select name='";var s=g;var c="'>";
                
                  var d = this.responseText;
                  var e="</select>";
                document.getElementById(n).innerHTML=p+s+c+d+e;
            }
        };
        xmlhttp.open("GET","fillsi2.php?q="+l+"&r="+m,true);
        xmlhttp.send();
    }
        }
        </script>
    </head>
    <body>
        <center>
            <form action="fills.php" method="POST">
        <select id="300" name="300" onchange="ycall()">
            <option value="">select department</option>
            <option value="CSE">CSE</option>
            <option value="ECE">ECE</option>
        </select>
        <div id="id1"></div>
        <button type="submit" class="button">SUBMIT</button>
        <a href="fill.php"><button type="button" class="button">back</button></a>
            </form>
        </center>
    
    </body>
</html>