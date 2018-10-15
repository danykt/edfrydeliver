<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Affordable and proffessional delivery system service">
    <meta name="keywords" content="delivery service, proffessional delivery, Affordable delivery">
    <meta name="author" content="Cesar Labastida">
    <title>Edfry Delivery System | Welcome to about</title>
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
			  <li><a href="servicios.php">Español<a></li>
			</ul>
		  </nav>
		  <nav>
            <ul>
              <li><a href="index.php">Home</a></li>
              <li ><a href="about.php">About</a></li>
              <li class="current"><a href="services.php">Service</a></li>
            </ul>

          </nav>
        </div>
    </header>


      <section id="newsletter">
        <div class="container">
          <h1 class="left">Contact Us at <span class="highlight">206-432-0031</span></h1>


          <h1 class="right"> Or email us at <span class="highlight">edfrydelivery@gmail.com </span></h1>
		 </div>
      </section>

      <section id="main">
        <div class="container">
            <article id="main-col">
              <h1 class="page-title">Services</h1>
              <ul id="services">
                <li>
                  <h3>Weekly Delivery</h3>
                  <p> Weekly delivery of any type of small merchandise. Always delivery on a set schedule. </p>
                  <p>Pricing: First pallet $75.00/pallet, then $50.00/pallet after first one. </p>
                </li>
                <li>
                  <h3>Packaging Merchandise</h3>
                  <p>  We offer various prices based on destination zip code.</p>
                  <p>Pricing: Starting at 10/package in downtown. </p>
                </li>
                <li>
                  <h3>Zip code package delivery</h3>
                  <p> We offer different rates for each zip code area. </p>
                  <ul id="services">
					<li> Bellevue: $17.00 - $18.00 </li>
					<li> Redmond: $20.00 </li>
					<li> Everett: $25.00 </li>
				  </ul>
                </li>
              </ul>

              </article>

              <aside id="sidebar">
                <div class="dark">
                <h3>Contact Us</h3>
                <form class="quote" action="sendemail.php" method="post">
                  <div>
                    <label>Name</label><br>
                    <input type="text" placeholder="Name" name="name">
                  </div>
                  <div>
                    <label>Email</label><br>
                    <input type="email" placeholder="Email Adress" name="mail">
                  </div>
                  <div>
                    <label>Message</label><br>
                    <textarea placeholder="Message" name="message"></textarea>
                    </div>
                    <button class="button_1" type="submit" name="submit">Send Mail</button>
                  </form>
                </div>
              </aside>
            </div>
      </section>
      <div id="footer">
        <p> Edfry Delivery System, Copyright &copy; 2018 </p>
      </div>
     </body>
</html>
