<?php

if (isset($_POST['name']) && isset($_POST['message']))
{
  $name = $_POST['name'];
  $message = $_POST['message'];
  $subject = $_POST['subject'];
  $to = "fkdjsa@hotmail.com";
  $body = '<html>
            <body>
              <h2>MESSAGE FROM CONTACT-US PAGE</h2>
              <p>Name: '.$name .'</p>
              <p>Message: '.$message .'</p>
            </body>
          </html>';
  $headers = "From: ".$name ." <.$message" .">\r\n";
  $headers = "Replay-To: ".$message."\r\n";
  $headers = "MIME-Version: 1.0\r\n";
  $headers = "Content-type: text/html; charset=utf-8";

  $send = mail($to, $subject, $body, $headers);
  if ($send) {
   echo '<br>';
   echo 'Thanks for Contacting me. I will be with you shortly.';
  }
  else {
   echo 'error';
  }
}
else{
  echo "Form not filled out";
}

?>
