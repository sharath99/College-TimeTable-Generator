<?php
$fid=$_GET['fid'];
$conn= new mysqli("localhost:3306","root","2000","sharath");
    if($conn->connect_error)
    {
        die("connection error".$conn->connect_error);
    }
    else
    {   
        $sql1="select * from faculty where fid='$fid'";
        $res1=$conn->query($sql1);
                if($res1->num_rows)
                {
                    while($result=$res1->fetch_assoc())
                    {
                        $mailn=$result['femail'];
                        $x='Faculty id:'.$result['fid'].'<br>';
                        $p='Faculty name:'.$result['fname'].'<br>';
                       $y='Faculty email:'.$result['femail'].'<br>';
                                $z='Your timetable is';
                                $w=$x.$p.$y.$z;
                               
                    }    
                }
    }
$path="/home/sharathchandra/Downloads/$fid.doc";
require'PHPMailer-5.2.25/PHPMailerAutoload.php'; 
$mail=new PHPMailer();
$mail->isSMTP();
$mail->SMTPDebug = 0;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
	$mail->Host ='smtp.gmail.com';
	$mail->Port = '587';
	$mail->isHTML(true);
	$mail->Username ='cbittimetabledetails@gmail.com';
	$mail->Password = 'cbit1234';
	$mail->SetFrom('cbittimetabledetails@gmail.com');
	$mail->Subject ='STAFF TIMETABLE';
	$mail->Body = $w;
        $mail->addAttachment($path);
        $mail->AddAddress($mailn);
 	if(!$mail->Send()) {
   	 echo "Mailer Error:" . $mail->ErrorInfo;
         include 'staff.html';
	}
	else
	{
            echo "mail sent";
              include 'staff.html';
	}
        ?>