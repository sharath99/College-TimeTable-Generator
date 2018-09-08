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
	<title>time_table</title>
        <script>
            function ycall() {
                var w=document.getElementById("year").selectedIndex;
                var x=document.getElementsByTagName("option")[w].value;
                var z=document.getElementById("sem").selectedIndex;
                var y=document.getElementsByTagName("option")[z].value;
                var u=document.getElementById("sem").selectedIndex;
                var v=document.getElementsByTagName("option")[u].value;
    if (x == "" || y == "") {
        
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
            if (this.readyState == 4 && this.status == 200) {var j;
                for(var i=1,j=51;i<31,j<81;i++,j++){
                
                var a="<select name=";var b=j;var c=">";
                  var d = this.responseText;
                  var e="</select>";var k="</button>";
                  document.getElementById(i).innerHTML=a+b+c+d+e;
                }
            }
        };
        xmlhttp.open("GET","fillti.php?q="+x+"&r="+y+"&t="+v,true);
        xmlhttp.send();
    }
}
            function ycall2() {
                var w=document.getElementById("year").selectedIndex;
                var x=document.getElementsByTagName("option")[w].value;
                var z=document.getElementById("sem").selectedIndex;
                var y=document.getElementsByTagName("option")[z].value;
                var u=document.getElementById("sem").selectedIndex;
                var v=document.getElementsByTagName("option")[u].value;
    if (x == "" || y == "") {
        
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
            if (this.readyState == 4 && this.status == 200) {var j;
                for(var j=1;j<31;j++){
                  var l="<input type='text'>";
                   var d = this.responseText;
                  document.getElementById(i).innerHTML=l;
                }
            }
        };
        xmlhttp.open("GET","fillti2.php?q="+x+"&r="+y+"&t="+v,true);
        xmlhttp.send();
    }
}
        </script>
        
</head>
<body>
	<form action="fillt.php" method="POST">
	<div>
		<center>
			<h1>FILL THE TIME TABLE</h1>
			<p>Write the class in the text box and fill the subjects in the given time table format and submit</p>
                        <select id="year" name="year" onchange="ycall()">
                            <option value="">select year</option>
                            <option value="1">year1</option>
                            <option value="2">year2</option>
                        </select>
                        <select id="sem" name="sem" onchange="ycall()">
                            <option value="">select sem</option>                     
                            <option value="1">sem1</option>
                            <option value="2">sem2</option>
                        </select>
                        <select id="class" name="class">
                            <option value="">select class</option>                            
                            <option value="1">C1</option>
                            <option value="2">C2</option>
                        </select>
		</center>
	</div>
	<center>
		<table border="1" id="customers">
			<tr>
				<th>DAY</th>
				<th>09:40-10:40</th>
				<th>10:40-11:40</th>
				<th>11:40-12:40</th>
				<th>12:40-01:20</th>
				<th>01:20-02:20</th>
				<th>02:20-03:20</th>
				<th>02:20-04:20</th>
			</tr>
			<tr>
				<td>MONDAY</td>
				<td>
                                   
                                    <div id="1">
                                       
                                    </div>
                                        
				</td>
				<td>
					<div id="2">
                                       
                                    </div>
				</td>
				<td>
					<div id="3">
                                       
                                    </div>
				</td>
				<td rowspan="5">LUNCH BREAK</td>
				<td>
					<div id="4">
                                       
                                    </div>
				</td>
				<td>
					<div id="5">
                                       
                                    </div>
				</td>
				<td>
					<div id="6">
                                       
                                    </div>
				</td>
			</tr>
				<td>TUESDAY</td>
				<td>
					<div id="7">
                                       
                                    </div>
				</td>
				<td>
					<div id="8">
                                       
                                    </div>
				</td>
				<td>
					<div id="9">
                                       
                                    </div>
				</td>
				<td>
					<div id="10">
                                       
                                    </div>
				</td>
				<td>
					<div id="11">
                                       
                                    </div>
				</td>
				<td>
					<div id="12">
                                       
                                    </div>
				</td>
			</tr>
				<td>WEDNESDAY</td>
				<td>
					<div id="13">
                                       
                                    </div>
				</td>
				<td>
					<div id="14">
                                       
                                    </div>
				</td>
				<td>
					<div id="15">
                                       
                                    </div>
				</td>
				<td>
					<div id="16">
                                       
                                    </div>
				</td>
				<td>
					<div id="17">
                                       
                                    </div>
				</td>
				<td>
					<div id="18">
                                       
                                    </div>
				</td>
			</tr>
				<td>THURSDAY</td>
				<td>
					<div id="19">
                                       
                                    </div>
				</td>
				<td>
					<div id="20">
                                       
                                    </div>
				</td>
				<td>
					<div id="21">
                                       
                                    </div>
				</td>
				<td>
					<div id="22">
                                       
                                    </div>
				</td>
				<td>
					<div id="23">
                                       
                                    </div>
				</td>
				<td>
					<div id="24">
                                       
                                    </div>
				</td>
			</tr>
				<td>FRIDAY</td>
				<td>
					<div id="25">
                                       
                                    </div>
				</td>
				<td>
					<div id="26">
                                       
                                    </div>
				</td>
				<td>
					<div id="27">
                                       
                                    </div>
				</td>
				<td>
					<div id="28">
                                       
                                    </div>
				</td>
				<td>
					<div id="29">
                                       
                                    </div>
				</td>
				<td>
					<div id="30">
                                       
                                    </div>
				</td>
			</tr>
		</table>
		<button type="submit" class="button">SUBMIT</button>
                <a href='fill.php'><button type='button' class="button">back</button></a>
                <a href='editm.php'><button type="button" class="button">edit</button></a>
	</center>
	</form>
    
</body>
</html>