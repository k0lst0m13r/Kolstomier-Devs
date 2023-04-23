<?php
$name = $_POST['name'];
$mailfrom=$_POST['email'];
$subject = "Consulta Kdevs";
$detail=$_POST['message'];
$header="from: $name <$mailfrom>";
// Enter your email address
$to ='kolstomier@protonmail.com';
$send_contact=mail($to,$subject,$detail,$header);
// Check, if message sent to your email
// display message "We've recived your information"
if($send_contact)
 {
   ?>

<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

   <link rel="stylesheet" href="assets/css/main.css" />



   <div class="mayor" align="center">


    <h3>Estimado <?php echo $name ?> ,</h3>

<h4>Recibimos su consulta</h4>
<h4>Le responderemos a la brevedad.</h4>
<h4>Saludos,</h4>
<h4>KolstomierDevs.</h4>

</div>
 <?php
   }
        else
         {
           ?>  <table border=0 align=center align=center  style="border:1px solid;color:red; background-color: lightblue;  border-color: lightblue;  width:80%;height:80%">
<tr><td>Dear <?php echo $name ?> ,</td></tr>
<tr><td>Sorry Unable to send</td></tr>
<tr><td>Regards,</td></tr>
<tr><td>Support Team.</td></tr>

</table>
         <?php
          }
?>
