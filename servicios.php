<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Affordable and proffessional delivery system service">
    <meta name="keywords" content="delivery service, proffessional delivery, Affordable delivery">
    <meta name="author" content="Cesar Labastida">
    <title>Edfry Systema de Entregos | Bienvenido a Sercios</title>
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <header>
      <div class="container">
          <div id="branding">
            <h1><span class="highlight">Edfry</span> Systema de Entregos</h1>
          </div>
          <nav>
			  <ul>
			  <li><a href="services.php">English</a></li>
			  <li class="current"><a href="#">Español<a></li>
			</ul>
			</nav>
			<nav>
            <ul>
              <li><a href="indice.php">Inicio</a></li>
              <li ><a href="acerca.php">Acerca</a></li>
              <li class="current"><a href="servicios.php">Servicio</a></li>
            </ul>

          </nav>
        </div>
    </header>


      <section id="newsletter">
        <div class="container">
          <h1 class="left">Contactanos al 206-432-0031</h1>


          <h1 class="right"> O mandanos un email a edfrydelivery@gmail.com</h1>
		 </div>
      </section>


      <section id="main">
        <div class="container">
            <article id="main-col">
              <h1 class="page-title">Servicios</h1>
              <ul id="services">
                <li>
                  <h3>Entregos Semanales</h3>
                  <p> Entregos semanales de cualquier tipo de mercancia pequeña. Siempre entregado a tiempo. </p>
                  <p>Precios: Primer pallet $75, luego $50/pallet despues de la primera.</p>
                </li>
                <li>
                  <h3>Mercancia en Paquetes</h3>
                  <p>Ofrecemos varios precios basados en el area de destino.</p>
                  <p>Precio: Empezando a $10/paquete en el area de downtown.</p>
                </li>
                <li>
                  <h3>Entrego de Paquetes Por Zip Code</h3>
                  <p> We offer different rates for each zip code area. </p>
                  <p> Ofrecemos differentes precios por cada area. </p>
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
                <h3>Contactanos</h3>
                <form class="quote" action="enviarmail.php" method="post">
                  <div>
                    <label>Nombre</label><br>
                    <input type="text" placeholder="Nombre" name="name">
                  </div>
                  <div>
                    <label>Email</label><br>
                    <input type="email" placeholder="Correo Email" name="mail">
                  </div>
                  <div>
                    <label>Mensaje</label><br>
                    <textarea placeholder="Message" name="mensaje"></textarea>
                    </div>
                    <button class="button_1" type="submit" name="submit">Enviar</button>
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
