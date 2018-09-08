<?php
$year=$_GET['year'];
$sem=$_GET['sem'];
$class=$_GET['class'];
$conn= new mysqli("localhost:3306","root","2000","sharath");
    if($connconnect_error)
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
        echo "<center>";
        echo "time table for B.E-";echo $year; echo "/4";echo "\tsem-";echo $sem; echo "\tsection";echo $class;
        echo "<table border='2' id='customers'>";
        echo "<tr>
				<th>DAY</th>
				<th>09:40-10:40</th>
				<th>10:40-11:40</th>
				<th>11:40-12:40</th>
				
				<th>01:20-02:20</th>
				<th>02:20-03:20</th>
				<th>02:20-04:20</th>
			</tr>";
        echo "<tr>";
        echo "<td style='background-color: lightgoldenrodyellow;color: black;'>";
        echo "MONDAY";
        echo "</td>";
        $sql="select sname from alloctable where year='$year' and class='$class' and sem='$sem' and day='monday'";
        $res=$conn->query($sql);
        if($res->num_rows)
        {
            while($result=$res->fetch_assoc())
            {
                echo "<td>";
                echo $result['sname'];
                echo "</td>";
            }
        }
        echo "</tr>";
        echo "<tr>";
        echo "<td style='background-color: lightgoldenrodyellow;color: black;'>";
        echo "TUESDAY";
        echo "</td>";
        $sql="select sname from alloctable where year='$year' and class='$class' and sem='$sem' and day='tuesday'";
        $res=$conn->query($sql);
        if($res->num_rows)
        {
            while($result=$res->fetch_assoc())
            {
                echo "<td>";
                echo $result['sname'];
                echo "</td>";
            }
        }
        echo "<tr>";
        echo "<td style='background-color: lightgoldenrodyellow;color: black;'>";
        echo "WEDNESDAY";
        echo "</td>";
        $sql="select sname from alloctable where year='$year' and class='$class' and sem='$sem' and day='wednesday'";
        $res=$conn->query($sql);
        if($res->num_rows)
        {
            while($result=$res->fetch_assoc())
            {
                echo "<td>";
                echo $result['sname'];
                echo "</td>";
            }
        }
        echo "</tr>";
        //echo "<tr><td rowspan='5'>LUNCH BREAK</td></tr>";
        echo "<tr>";
        echo "<td style='background-color: lightgoldenrodyellow;color: black;'>";
        echo "ThURSDAY";
        echo "</td>";
        $sql="select sname from alloctable where year='$year' and class='$class' and sem='$sem' and day='thursday'";
        $res=$conn->query($sql);
        if($res->num_rows)
        {
            while($result=$res->fetch_assoc())
            {
                echo "<td>";
                echo $result['sname'];
                echo "</td>";
            }
        }
        echo "</tr>";
        echo "<tr>";
        echo "<td style='background-color: lightgoldenrodyellow;color: black;'>";
        echo "FRIDAY";
        echo "</td>";
        $sql="select sname from alloctable where year='$year' and class='$class' and sem='$sem' and day='friday'";
        $res=$conn->query($sql);
        if($res->num_rows)
        {
            while($result=$res->fetch_assoc())
            {
                echo "<td>";
                echo $result['sname'];
                echo "</td>";
            }
        }
        echo "</tr>";
        echo "</table>";
        echo "<a href='student.html'><button type='button'>back</button></a>";
        echo "</center>";
    }
?>