<?php
// variables for validation
$recaptchaSecret = '6Lea9DwUAAAAAD8-V-L4WfCVC_K8HV2brbkO6Bya';

try {

	if(isset($_POST['message'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$to      = 'apk29@hotmail.com';
		$subject = 'Contact from DawnLee';
		$headers = 'From: '. $email . "\r\n" .
		'Reply-To: '. $email . "\r\n" .
		'X-Mailer: PHP/' . phpversion();
		$status = mail($to, $subject, $message, $headers);

		if($status == TRUE){	
			$res['sendstatus'] = 'done';
			$res['message'] = 'Thank you for your message.';
		}
		else { $res['message'] = 'Failed to send mail. Please send message to apk29@hotmail.com';
		} 
		echo json_encode($res);
		
	}
		
}
	 catch (Exception $e)
	 {
		$res['message'] = $errorMessage;
		echo json_encode($res); 
   }

?>