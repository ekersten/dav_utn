<?php

function email($to,$subject,$message,$headers)
{


  // set as global variable
  global $GLOBAL;
 
  // get From address
  if ( preg_match("/From:.*?[A-Za-z0-9\._%-]+\@[A-Za-z0-9\._%-]+.*/", $headers, $froms) ) {
     preg_match("/[A-Za-z0-9\._%-]+\@[A-Za-z0-9\._%-]+/", $froms[0], $fromarr);
     $from = $fromarr[0];
  }

// echo $from;

  // Open an SMTP connection
  $cp = fsockopen ("10.0.3.66", 25 );
  if (!$cp)
   echo "No abre el puerto";

  $res=fgets($cp,256);
  if(substr($res,0,3) != "220") return "Failed to connect";


  // Say hello...
  fputs($cp, "HELO "."localhost"."\r\n");
  $res=fgets($cp,256);
  if(substr($res,0,3) != "250") return "Failed to Introduce";
 

  // Mail from...
  fputs($cp, "MAIL FROM: <$from>\r\n");
  $res=fgets($cp,256);
  if(substr($res,0,3) != "250") return "MAIL FROM failed";

  // Rcpt to...
  fputs($cp, "RCPT TO: <$to>\r\n");
  $res=fgets($cp,256);
  if(substr($res,0,3) != "250") return "RCPT TO failed";

  // Data...
  fputs($cp, "DATA\r\n");
  $res=fgets($cp,256);
  if(substr($res,0,3) != "354") return "DATA failed";

  // Send To:, From:, Subject:, other headers, blank line, message, and finish
  // with a period on its own line (for end of message)
  fputs($cp, "To: $to\r\nFrom: $from\r\nSubject: $subject\r\n$headers\r\n\r\n$message\r\n.\r\n");
  $res=fgets($cp,256);
  if(substr($res,0,3) != "250") return "Message Body Failed";

  // ...And time to quit...
  fputs($cp,"QUIT\r\n");
  $res=fgets($cp,256);
  if(substr($res,0,3) != "221") return "QUIT failed";

  return true;
}

//$a = "alexjg@sceu.frba.utn.edu.ar";
//$b = "prueba";
//$c = "prueba de mail";
//$d = "De: webmaster@sceu.frba.utn.edu.ar";

//email ($a, $b, $c, $d);

?>
