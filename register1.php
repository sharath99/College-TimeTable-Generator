<?php
session_start();
?>
<html>
    <script>
     function any()
     {
         document.getElementById("fid").style.background="cyan";
     }
     function any1()
     {
         document.getElementById("fid").style.background="white";
     }
     function any2()
     {
         var p=/^[0-9]{1,}$/;
        var s=document.getElementById("fid").value;
     if(!s.match(p))
     {
         document.getElementById("id1").innerHTML="<img src='wrong.jpeg' height='20px' width='20px'/>";
         document.getElementById("fid").value="";
     }
     else
     {
         document.getElementById("id1").innerHTML="<img src='tick.jpeg' height='20px' width='20px'/>";
     }
         document.getElementById("fname").style.background="cyan";
     }
     function any3()
     {
         document.getElementById("fname").style.background="white";
     }
     function any4()
     {
         var s=/^[^0-9]{1,}$/;
     document.getElementById("fname").value=document.getElementById("fname").value.toUpperCase();
     document.getElementById("fname").style.background="white";
     if(!document.getElementById("fname").value.match(s))
     {
        document.getElementById("na").innerHTML="<img src='wrong.jpeg' height='20px' width='20px'/>";
        document.getElementById("fname").value=" ";
     }
     else 
     {
         document.getElementById("na").innerHTML="<img src='tick.jpeg' height='20px' width='20px'/>";
     }
         document.getElementById("femail").style.background="cyan";
     }
     function any5()
     {
         
        var p=/^[a-z,0-9,.,_]{1,}\@[a-z]{1,}\.[a-z]{1,}$/;
        var s=document.getElementById("femail").value;
     if(!s.match(p))
     {
         document.getElementById("em").innerHTML="<img src='wrong.jpeg' height='20px' width='20px'/>";
         document.getElementById("femail").value="";
     }
     else
     {
         document.getElementById("em").innerHTML="<img src='tick.jpeg' height='20px' width='20px'/>";
     }
         document.getElementById("femail").style.background="white";
     }
    </script>
    <body>
        <center>
        <form action="register.php" method="GET">
        <h1 style="text-align:center">REGISTRATION FORM</h1>
        <table border="0" cellspacing="15">
            <tr>
                <td>FACULTY ID:
                </td> 
                <td><input type="text" name="fid" id="fid"  onfocus="any()" onblur="any1()" required>
                </td> 
                <td><p id="id1"></p>
                </td> 
            </tr>
            <tr>
                <td>FACULTY NAME:
                </td> 
                <td><input type="text" name="fname" id="fname"  onfocus="any2()" onblur="any3()" required>
                </td> 
                <td><p id="na"></p>
                </td> 
            </tr>
            <tr>
                <td>EMAIL:
                </td> 
                <td><input type="text" name="femail" id="femail"  onfocus="any4()" onblur="any5()" required>
                </td> 
                <td><p id="em"></p>
                </td> 
            </tr>
            <tr>
                <td>
                    DEPARTMENT:
                </td>
                <td>
                    <select id="fdept" name="fdept" >
                            <option value="CSE">CSE</option>
                            <option value="ECE">ECE</option>
                        </select>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:center">
                <input type="submit" value="save" >
                <a href="fill.php"><button type="button">back</button></a>
                </td>
            </tr>
        </table>
        </form>
       </center>
    </body>
</html>