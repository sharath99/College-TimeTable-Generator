<?php
$count=0;
$conn=new mysqli("localhost:3306","root","2000","sharath");
    if(!$conn)
    {
        die("connection failed".mysqli_connect_errno());
    }
    else
    {
        for($x=1,$y=501,$z=1001,$w=3001,$u=4001;$x<=500;$x++,$y++,$z++,$w++)
        {
            $year=$_POST[$x];
            $sem=$_POST[$y];
            $class=$_POST[$z];
            $subs=$_POST[$w];
            $fname=$_POST[$u];
            $count++;
            if($count==5)
            {
                $count=0;
                $u++;
            }
            if($sem!=""){
           $sql="insert into fopt values('$year','$sem','$class','$subs','$fname')";
           $conn->query($sql);
            }
        }
        echo "faculty subjects inserted";
        include 'fills1.php';
    }
?>