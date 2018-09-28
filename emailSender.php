<?php
//if "email" variable is filled out, send email
  if (isset($_REQUEST['subject']))  {
  
  //Email information
  $admin_email = "ampme@amparame-ya.xyz";
  $email = "amparoforyou@gmail.com";
  $subject = $_REQUEST['subject'];
  $comment = $_REQUEST['comment'];
  
  //send email
  mail($admin_email, "$subject", $comment, "From:" . $email);
  
  //Email response
  echo "ENVIADO";
  }
  
  //if "email" variable is not filled out, display the form
  else  {
   echo "Impossible to send something";
  }
?>
