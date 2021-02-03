<?php

  if (isset($_POST['submit']))  {
  
$name = $_POST['name'];
$subject = "Wiadomość z portfolio";
$mailFrom = $_POST['email'];
$message = $_POST['message'];

$mailTo = "dzary@onet.pl";
$headers = "From: ".$mailFrom;
$txt = "You have recived an e-mail from ".$name.".\n\n".$message;


mail($mailTo, $subject, $txt, $headers);
header("Location: https://dzarek.github.io/project6/")

?>
