<?php 
if(!empty($_POST)){
	 
	if(isset($_POST['contact'])){
	
		
		$fullname = $_POST['fullname'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		
		$to = 'aliciaj.com' . ', ';
		$to .= $email;
		
		$subject = "$name has contacted you through The Barn.";
		
		$error_list = array();
		
		if(empty($error_list)){
			$message .= "\t Name: $name \n"; 
			$message .= "\t Email: $email \n"; 
			$message .= "\t Comments: $message \n";
			
			//echo $message;
			$mail = @mail($to, $subject, $message);
			if($mail){
				//echo "yay contact sent";
			}else{
				//echo "not sending email";
			}//mail sent
		}else{
			//echo "error";
		}//empty error list

	}else{
		//echo "nothing was sent";
	}//isset contact
	
	
?>