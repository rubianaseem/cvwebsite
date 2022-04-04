

<?php
  $name = $_POST['contactName'];
  $visitor_email = $_POST['contactEmail'];
  $subject = $_POST['contactSubject']
  $message = $_POST['contactMessage'];
?>


<?php
	$email_from = 'rubianaseem01@gmail.com';

	$email_subject = "New Form submission";

	$email_body = "You have received a new message from the user $name.\n".
                            "Here is the message:\n $message".
?>
