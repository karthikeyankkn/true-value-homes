<?php
$uname = $_POST['uname'];
  $email =$_POST['email'];
  $file=$_POST['file'];
  if($_POST['submit'] == 'SEND')
  {
	$med="kknmalar2@gmail.com";
	$headers = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
	$headers .= 'From:'.$email."\r\n";	
	
	$to = $med;
        $headers .= ' ' . "\r\n";	
	$subject = "Ouranya Bay - Enquiry Form";
	$message = "<html><body>";
			$message .= "Name:&nbsp;".$uname;
			$message .= "<br/>";
			$message .= "Email-ID:&nbsp;".$email;
			$message .= "<br/>";
			$message .= "Contact no:&nbsp;".$file;
			$message .= "<br/>";
			$message .= "<script src="http://cwc.livserv.in/chat.js?lid=16321" id="lp_cwc_xqzyihjdskw" ></script>
<script src="http://cw1.livserv.in?did=16321&amp;pid=1"></script>
</body></html>";

			
	mail($to, $subject, $message, $headers);
	echo 1;
	}
  else
	{
	echo 0;
	}
	
  ?>