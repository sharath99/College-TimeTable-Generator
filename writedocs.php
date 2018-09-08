<?php
$conn1= new mysqli("localhost:3306","root","2000","sharath");
    if($connconnect_error)
    {
        die("connection error".$conn->connect_error);
    }
    else
    {   
        $sql5="select fid from faculty";
        $result5=$conn1->query($sql5);
        if($result5->num_rows)
                {
            while($res7=$result5->fetch_assoc())
                    {
              $fid=$res7['fid'];
                
header("Content-type: application/vnd.ms-word");
header("Content-Disposition: attachment;Filename=stafftimetable.doc");
echo "<html>";
echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=Windows-1252\">";
echo "<body>";
$conn= new mysqli("localhost:3306","root","2000","sharath");
$sql10="select fname from faculty where fid=$fid";
        $res10=$conn->query($sql10);
                if($res10->num_rows)
                {
        echo "<center>";
        echo "schedule for employee with id".$fid;
        echo "<table border='5' id='customers'>";
        echo "<tr>
                                <th style='background-color: lightgoldenrodyellow;color: black;'>DAY</th>
				<th style='background-color: lightgoldenrodyellow;color: black;'>09:40-10:40</th>
				<th style='background-color: lightgoldenrodyellow;color: black;'>10:40-11:40</th>
				<th style='background-color: lightgoldenrodyellow;color: black;'>11:40-12:40</th>
				
				<th style='background-color: lightgoldenrodyellow;color: black;'>01:20-02:20</th>
				<th style='background-color: lightgoldenrodyellow;color: black;'>02:20-03:20</th>
				<th style='background-color: lightgoldenrodyellow;color: black;'>03:20-04:20</th>
            </tr>";
        $days=array("monday","tuesday","wednesday","thursday","friday");
        $times=array("9:40-10:40","10:40-11:40","11:40-12:40","1:20-2:20","2:20-3:20","3:20-4:20");
        foreach ($days as $x)  
        {
            echo "<tr>";
            echo "<td style='background-color: lightgoldenrodyellow;color: black;'>".$x."</td>";
            foreach($times as $y)
            {
                echo "<td>";
                
                $sql2="select year,sem,class,sname from alloctable where fname=(select fname from faculty where fid='$fid') and day='$x' and time='$y'";
               $res2=$conn->query($sql2);
                if($res2->num_rows)
                {
                    while($result3=$res2->fetch_assoc())
                    {
                        echo "year:";
                        echo $result3['year'];echo "</br>sem:";
                        echo $result3['sem'];echo "</br>sec:";
                        echo $result3['class'];echo "</br>subject:";
                        echo $result3['sname'];
                        
                    }
                }
                echo "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
                }
               
        echo "</center>";  
echo "</body>";
echo "</html>";
            }
        }
    }
?>