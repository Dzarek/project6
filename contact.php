<?php
if (isset($_POST['submit'])) {

// twoje dane
$email = 'dzary@onet.pl';

// dane z formularza
$name = $_POST['name'];
$email = $_POST['email'];
$text = $_POST['message'];

if(!empty($name) && !empty($email) && !empty($text)) {

// weryfikujemy wprowadzony w formularzu adres e-mail
function checkMail($checkmail) {
  if(filter_var($checkmail, FILTER_VALIDATE_EMAIL)) {
    if(checkdnsrr(array_pop(explode("@",$checkmail)),"MX")){
        return true;
      }else{
        return false;
      }
  } else {
    return false;
  }
}
?>
<?php
if (checkMail($email)) {
  //dodatkowe informacje: ip i host użytkownika
  $ip = $_SERVER['REMOTE_ADDR'];
  $host = gethostbyaddr($_SERVER['REMOTE_ADDR']);

  //tworzymy szkielet wiadomości
  //treść wiadomości
  $mailText = "Treść wiadomości:\n" . $text . "Od: $name, $email ($ip, $host)";

  //adres zwrotny
  $mailHeader = "From: $name <$email>";

  //funkcja odpowiedzialna za wysłanie e-maila
  @mail($email, 'Formularz kontaktowy', $mailText, $mailHeader) or die('Błąd: wiadomość nie została wysłana');

  //komunikat o poprawnym wysłaniu wiadomości
  echo 'Wiadomość została wysłana';
} else {
  echo 'Adres e-mail jest niepoprawny';
}

} else {
  // komunikat w przypadku nie powodzenia
  echo 'Wypełnij wszystkie pola formularza';
}
}
?>