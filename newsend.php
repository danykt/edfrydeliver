<?
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$subject = "Customer email from website";
		$mailFrom = $_POST['mail'];
		$message = $_POST['message'];
		
		$mailTo "dany-hern1@hotmail.com"; // este es el que va recibir romulo
		$headers = "FROM: ". $mailFrom;
		$txt = "You have recieved an email from".$name.".\n\n".$message;
		
		
		mail($mailTo,$subject,$txt,$headers);
		header("Location: index.php?mailsend");
	}
?>