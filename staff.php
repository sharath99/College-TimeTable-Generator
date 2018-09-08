<?php
$fid=$_GET["fid"];
$conn= new mysqli("localhost:3306","root","2000","sharath");
    if($conn->connect_error)
    {
        die("connection error".$conn->connect_error);
    }
    else
    {   
        echo "<head><style>
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
    font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif;
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
    </style></head>";
        $sql1="select fname from faculty where fid='$fid'";
        $res1=$conn->query($sql1);
                if($res1->num_rows)
                {
        echo "<center>";
        
        echo "schedule for employee with id".$fid;
        echo "<table border='2' id='customers'>";
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
                $sql="select year,sem,class,sname from alloctable where fname=(select fname from faculty where fid='$fid') and day='$x' and time='$y'";
                $res=$conn->query($sql);
                if($res->num_rows)
                {
                    while($result=$res->fetch_assoc())
                    {
                        echo "year:";
                        echo $result['year'];echo "</br>sem:";
                        echo $result['sem'];echo "</br>sec:";
                        echo $result['class'];echo "</br>subject:";
                        echo $result['sname'];
                        
                    }
                }
                echo "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
                }
                else 
                {
                    echo "<center>";
                    echo "employee with the given id doesn't exist<br>";
                     
                }
              echo "<a href='writedoc.php?fid=$fid'><button type='button' onclick='ena()'>download timetable</button></a>";
              echo "<a href='mail.php?fid=$fid'><button type='button' id='b1' disabled='disable'>send to mail</button></a>";
        echo "<a href='staff.html'><button type='button'>back</button></a>";
        
        echo "</form>";
        echo "</center>";
        
    }
?>
<script>
    function ena()
    {
        document.getElementById('b1').disabled=false;
    }
</script>
