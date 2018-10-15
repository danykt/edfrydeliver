<?php
	if(isset($_POST['submit'])){
			$name = $_POST['name'];
			$subject = "Customer email from website";
			$mailFrom = $_POST['mail'];
			$message = $_POST['message'];



		$from= 'From: Mail Contact From <romulo@edfrysdelivery.dx.am >';
		$to='edfrysdelivery@hotmail.com';
		$body= "FROM: ". $mailFrom. ".\n\n NAME:".$name.". \n\n MESSAGE:".$message.".";
		

	}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Affordable and proffessional delivery system service">
    <meta name="keywords" content="delivery service, proffessional delivery, Affordable delivery">
    <meta name="author" content="Cesar Labastida">
    <title>Edfry Delivery System | Welcome</title>
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
	   <header>
      <div class="container">
          <div id="branding">
            <h1><span class="highlight">Edfry</span> Delivery System</h1>
          </div>
          <nav>
			  <ul>
			  <li class="current"><a href="index.php">English</a></li>
			  <li><a href="acerca.php">Español<a></li>
			</ul>
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="about.php">About</a></li>
              <li><a href="services.php">Service</a></li>
            </ul>

          </nav>
        </div>
    </header>
	   <section id="showcase2">
        <div class="container">
          <h1>Thank You!</h1>
        </div>
      </section>
	  
	  
	      <section id="newsletter">
        <div class="container">
   
		  
		  
		  	<?php
				if(mail($to,$subject,$body,$from)){
					echo '<h1> Thank you!</h1>';
					echo '<h1> Thank you for contacing us we will reply to your message as soon as we can.</h1>';
				}else{
					echo '<h1>We could not deliver your message. Please contact us at 206-432-0031 or through email at edfrydelivery@gmail.com </h1> ';
				}
		
		
			?>
		 </div>
		
      <div id="footer">
        <p> Edfry Delivery System, Copyright &copy; 2018 </p>
      </div>
    </body>
</html>
