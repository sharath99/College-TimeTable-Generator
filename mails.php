<?php
$count=0;
$path="/home/sharathchandra/Downloads/stafftimetable.doc";
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
	$mail->Body = 'your timetable is';
        $mail->addAttachment($path);
$conn= new mysqli("localhost:3306","root","2000","sharath");
    if($conn->connect_error)
    {
        die("connection error".$conn->connect_error);
    }
    else
    {   
        $sql1="select femail from faculty";
        $res1=$conn->query($sql1);
                if($res1->num_rows)
                {
                  while($result=$res1->fetch_assoc())
                  {
                        $mailn=$result['femail'];                  
                        $mail->AddAddress($mailn);
                  }
 	if(!$mail->Send()) {
   	 echo "Mailer Error:" . $mail->ErrorInfo;
         include 'fill.php';
	}
	else
	{
            if($count==0)
                {
            echo "mail sent";
              include 'fill.php';
              $count++;
                }
	}
                }
    }
        ?>