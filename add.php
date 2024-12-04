<?php
	$con = mysqli_connect("127.0.0.1", "root", "", "desiertoverde");
	if (!$con) {
		echo "Hubo un problema" . mysqli_errno() . PHP_EOL;
		exit;
	}

	if (isset($_REQUEST['curp'])) {
		$curp = $_REQUEST['curp'];
		$nombre = $_REQUEST['nombre'];
		$apellido = $_REQUEST['apellido'];
		$telefono = $_REQUEST['telefono'];

		$query = 'INSERT INTO usuarios ( curp , nombres , apellidos , num_tel) VALUES ("'.$curp.'" , "'.$nombre.'" , "'.$apellido.'", "'.$telefono.'");';

		if (mysqli_query($con , $query)) {
		}else{
			echo "Algo salio mal";
		}

	}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Desierto Verde | LOL </title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet icon" href="img/logo_oficial.jpeg">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <!---------BARRA DE NAVEGACION------------->
<nav>
    <div class="nav__bar">
      <i class='bx bx-menu'></i>
      <div class="logo"><p class="big"><a href="index.html">Desierto Verde</a></p></div>
      <div class="nav-links">
        <div class="sidebar-logo">
          <span class="logo-name">Desierto Verde</span>
          <i class='bx bx-x' ></i>
        </div>
        <ul class="links">
          <li><a href="index_nosotros.html">¿Quienes somos?</a></li>
          <li>
            <a href="index_plantas.html">Plantas</a>
            <i class='bx bxs-chevron-down htmlcss-arrow arrow  '></i>
            <ul class="htmlCss-sub-menu sub-menu">
              <li><a href="index_cuidados.html">Cuidados</a></li>
              <li><a href="index_jardineria.html">Jardineria</a></li>
              <li><a href="index_utiles.html">Plantas Utiles</a></li>
            </ul>
          </li>
          <li>
            <a href="index_agua.html">Agua</a>
            <i class='bx bxs-chevron-down js-arrow arrow '></i>
            <ul class="js-sub-menu sub-menu">
              <li><a href="index_ahorro_agua.html">Ahorro de Agua</a></li>
              <li><a href="index_futuro.html">Futuro del agua</a></li>
              <li><a href="index_importancia.html">Importancia del agua</a></li>
            </ul>
          </li>
          <li><a href="index_clima.html">Clima</a></li>
          <li><a href="index_reciclaje.html">Reciclaje</a></li>
          <li><a href="index_unetenos.html">¡Unetenos!</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-----------CONTENIDO DE LA PAGINA------------>
  <div class="carta1"> 
  	<a class="dismiss1" href="index.html">×</a>
  <div class="header1"> 
    <div class="image1">
      <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M20 7L9.00004 18L3.99994 13" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
      </div> 
      <div class="content1">
         <span class="title1">Registro Exitoso</span> 
         <p class="message1">Gracias por registrarte con nosotros, pronto pondremos a tu alcance nuevas funciones para hacer tu recorrido por la pagina mas comoda!</p> 
         </div> 
         <div class="actions1">
            <a class="history1" href="index.html">Volver al inicio</a>
            <a class="track1" href="index_unetenos.html">Volver a registrar</a>
         </div> 
      </div> 
    </div>
  <!----------AQUI INICIA EL FOOTER, ESO RARO SON LAS IMAGENES DE ICONOS K SE SACAN EN IONICONS----------------------->
    <footer class="footer">
      <ul class="social-icon">
        <li class="icon-elem">
          <a href="https://www.instagram.com/desierto_verde_cbtis206?igsh=MWRtcXN0c2Fybm56bQ==" class="icon" target="_blanck">
            <ion-icon name="logo-instagram"></ion-icon>
          </a>
        </li>
        <li class="icon-elem">
          <a href="https://www.tiktok.com/@desiertoverdecbtis206?_t=8rDyCcg0fiB&_r=1" class="icon" target="_blanck">
            <ion-icon name="logo-tiktok"></ion-icon>
          </a>
        </li>
        <li class="icon-elem">
          <a href="https://www.facebook.com/DESIERTOVERDECBTIS206?locale=es_LA" class="icon" target="_blanck">
            <ion-icon name="logo-facebook"></ion-icon>
          </a>
        </li>
      </ul>
      <ul class="menu">
        <li class="menu-elem">
          <a href="index.html" class="menu-icon"> Inicio </a>
        </li>
        <li class="menu-elem">
          <a href="" class="menu-icon"> Nosotros </a>
        </li>
        <li class="menu-elem">
          <a href="" class="menu-icon"> Informacion </a>
        </li>
        <li class="menu-elem">
          <a href="" class="menu-icon"> Equipo </a>
        </li>
        <li class="menu-elem">
          <a href="" class="menu-icon"> Desierto Verde </a>
        </li>
      </ul>
      <p class="text">2024 | Todos los derechos reservados</p>
    </footer>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <script src="javascript/js.js"></script>
</body>
</html>
