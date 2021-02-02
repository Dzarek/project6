<?php
//jeżeli zmienna "email" została wypełniona, wysyłamy wiadomość
  if (isset($_REQUEST['email']))  {
  
  //Informację o emailu, na który będzie wysyłana wiadomość
  $admin_email = "jarekjanas95@gmail.com";
  $email = $_REQUEST['email'];
  $subject = $_REQUEST['name'];
  $comment = $_REQUEST['message'];
  
  //wysyłamy email
  mail($admin_email, "$subject", $comment, "From:" . $email);
  
  //komunikat potwierdzający
  echo "Dziękujemy za kontakt z nami!";
  }
  
  //jeżeli zmienna z wartością "email" nie została wypełniona pokazujemy ponownie formularz
  else  {
?>


  
