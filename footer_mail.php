<?php
$name = $_REQUEST['name'];
$email= $_REQUEST['email'];
$tel= $_REQUEST['mobile'];
$query = $_REQUEST['message'];
if($name !='' && $email !='' && $tel !='' && $query !=''){
$to = "imranrealisticone@gmail.com";
$subject = "Signature Global Park Sohna";
$txt = "";
$txt = "<div style='margin:0 auto; width:700px; padding:10px 0 20px 0; background:#efefef;'>
	<h1 style='color:#4D4D4D; padding:0 0 0 32px; font:normal 20px Arial, Helvetica, sans-serif;'><b>Enquiry Signature Global Park Sohna</b></h1>
		<div style='padding:20px; margin:10px 35px; background:#FFF;'>
			<h2 style='color:#1D7BCF; font-size:26px; font:bold Arial, Helvetica, sans-serif;'>Dear Imran</h2>
				<p style='color:#4D4D4D; font:normal 16px Arial, Helvetica, sans-serif; line-height:1.8em;'>You have recieved enquiry</p>
                                              <p style='color:#4D4D4D; font:normal 16px Arial, Helvetica, sans-serif;'>
                                                    <p>
                                                        <strong>Name:</strong> ".$name."<br />
                                                        <strong>Email :</strong> ".$email."<br />
                                                        <strong>Phone:</strong> ".$tel."<br />
                                                        <strong>Enquiry:</strong>".$query."<br />
                                                   </p>
                                                </p>
					  </div>
					  <div style='float:left; width:220px; height:100px; margin:25px 10px 0 32px;'>
					  </div>
					  </div>
					</div>";
	

	
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	
$headers .= "From: ".$email . "\r\n" .
"BCC:-----";

$anu=mail($to,$subject,$txt,$headers);
if($anu)
{
echo  ("<script LANGUAGE='JavaScript'>
   
         window.location = './thanks.html';
       </script>");
}
else{
echo ("<script LANGUAGE='JavaScript'>
          window.alert('Your Mail Not Sent');
          window.location='./index.html';
       </script>");
}

}
else{
echo ("<script LANGUAGE='JavaScript'>
          window.alert('Your Mail Not Sent');
          window.location='./index.html';
       </script>");
}
?>