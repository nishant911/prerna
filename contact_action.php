<?php
if(isset($_GET['email'])) {
    
    $email_to = "info@prernahealthcare.org";
    $email_subject = "Contact Us Form";
 
    $name = $_GET['name'];
    $email_from = $_GET['email'];
    $subject = $_GET['subject']; // 
    $comments = $_GET['comments'];
 
    $email_message = "\n\n";
    
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
    $email_message .= "Name: ".clean_string($name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Subject: ".clean_string($subject)."\n";
    $email_message .= "Message: ".clean_string($comments)."\n";
 
// create email headers
$visitor_email = $_POST['email'];
$headers = "From: $email_from \r\n";
$headers .= "Cc:  \r\n";
$headers .= "Bcc: prernahealthcaredotorg@gmail.com \r\n";
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
<?php
}
?>