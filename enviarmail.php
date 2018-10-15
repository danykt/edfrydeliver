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
    <title>Edfry Systema de Entrego | Gracias</title>
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
			  <li><a href="index.php">English</a></li>
			  <li class="current"><a href="acerca.php">Español<a></li>
			</ul>
            <ul>
              <li><a href="indexes.php">Inicio</a></li>
              <li><a href="acerca.php">Acerca</a></li>
              <li><a href="servicios.php">Servicios</a></li>
            </ul>

          </nav>
        </div>
    </header>

	   <section id="showcase2">
        <div class="container">
          <h1>Gracias!</h1>
        </div>
      </section>
	  
	  
	      <section id="newsletter">
        <div class="container">
   
		  
		  
		  	<?php
				if(mail($to,$subject,$body,$from)){
					echo '<h1> Gracias!</h1>';
					echo '<h1> Gracias por contactarnos nos pondremos en contacto contigo tan pronto como sea possible</h1>';
				}else{
					echo '<h1>En este momento no pudimos mandar tu mensaje porfavor llamanos al 206-332-0031 o a edfrysdelivery@gmail.com </h1> ';
				}
		
		
			?>
		 </div>
      </section>

		

		
      <div id="footer">
        <p> Edfry Delivery System, Copyright &copy; 2018 </p>
      </div>
    </body>
</html>
