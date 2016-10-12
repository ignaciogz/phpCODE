<form action="" method="post">
  <label for="name">Name:</label>
  <input type="text" name="name" id="name" />

  <label for="Email">Email:</label>
  <input type="text" name="email" id="email" />

  <label for="Message">Message:</label><br />
  <textarea name="message" rows="20" cols="20" id="message"></textarea>

  <input type="submit" name="submit" value="Submit" />
</form>


<?php
    // from the form
    $name = trim(strip_tags($_POST['name']));
    $email = trim(strip_tags($_POST['email']));
    $message = htmlentities($_POST['message']);

    // set here
    $subject = "Contact form submitted!";
    $to = 'your@email.com';

$body = <<<HTML
       $message
HTML;

    $headers = "From: $email\r\n";
    $headers .= "Content-type: text/html\r\n";

    // send the email
    mail($to, $subject, $body, $headers);

    // redirect afterwords, if needed
    header('Location: thanks.html');
?>


<?php
  //EJEMPLO 2
    $to = "viralpatel.net@gmail.com";
    $subject = "VIRALPATEL.net";
    $body = "Body of your message here you can use HTML too. e.g. <br> <b> Bold </b>";
    $headers = "From: Peter\r\n";
    $headers .= "Reply-To: info@yoursite.com\r\n";
    $headers .= "Return-Path: info@yoursite.com\r\n";
    $headers .= "X-Mailer: PHP5\n";
    $headers .= 'MIME-Version: 1.0' . "\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    mail($to,$subject,$body,$headers);
?> 