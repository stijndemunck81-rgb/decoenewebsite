<?php 
$subject = 'Contact via website'; 
$to = "info@kinecallebautdecoene.be"; 
$from = $_POST['emailadres'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$phone = $_POST['phone_number'];

$email = "Persoon: " . $first_name . " " . $last_name . "\n\n" . "Telefoonnummer: " . $phone . "\n\n" . "Email: " . $from . "\n\n" . " Schreef het volgende:" . "\n\n" . $_POST['message'];

$headers   = array(); 
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/plain; charset=iso-8859-1'; 
$headers[] = 'from: www.kinecallebautdecoene.be'; 
// $headers[] = "Reply-To: <{$from}>"; 
$headers[] = "Subject: {$subject}"; $headers[] = "X-Mailer: PHP/".phpversion();
mail($to, $subject, $email, $headers); 
header('Location: bedankt.html');
  
?>


