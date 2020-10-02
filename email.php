<?php

 $email_to = "khunlinnaing90@gmail.com";
 $subjet = "simple emails with php";
 $message = " this was sent with a php script\n\n even has new line";
 $header = "from: hello demo <maungmaun@gmail.com>";
 if( mail($email_to, $subjet, $message,$header))
 	echo "success";
 else
 	echo "not success";
?>