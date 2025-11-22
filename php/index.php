
<!doctype html>
<html lang="es">
  <head>
      <title>Colegio Dario Salas Díaz</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">      
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <link rel="stylesheet" href="index.css" />   
        <link rel="stylesheet"
              href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
              integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
              crossorigin="anonymous" />
  </head>
  <body>

  <div class="container mt-5" style="background-color: #f9f9f9;">
    <div class="row justify-content-md-center">
      <div class="col-md-12 mt-5 mb-5">
        <h1 class="text-center" style="font-weight: 800;">Como Llenar Select HTML con PHP y MySQL</h1>
      </div>

      <?php
     

		 include("connect.php");
		 $getmysql = new mysqlconex();
            $getconex = $getmysql->conex();
			
         $sqlClientes         = ("SELECT * FROM  news ORDER BY new_id DESC LIMIT 10"); 
		
        $dataClientesSelect  = mysqli_query($getconex, $sqlClientes);

        $dataClientes_ol       = mysqli_query($getconex, $sqlClientes); //Lista ordenada
        $dataClientes_ul       = mysqli_query($getconex, $sqlClientes); //lista desordenada
        $dataClientes_radio    = mysqli_query($getconex, $sqlClientes); //inputs tipo radio
        $dataClientes_checkbox = mysqli_query($getconex, $sqlClientes); //inputs tipo checkbox
		
		$sqlTitle = "SELECT new_title FROM news WHERE new_id=1";
		$new_date = "SELECT new_date FROM news WHERE new_id=1";
		$sqlTitle2 = "SELECT new_title FROM news WHERE new_id=2";
		$new_date2 = "SELECT new_date FROM news WHERE new_id=2";
		$sqlTitle3 = "SELECT new_title FROM news WHERE new_id=3";
		$new_date3 = "SELECT new_date FROM news WHERE new_id=3";
		$sqlTitle4 = "SELECT new_title FROM news WHERE new_id=4";
		$new_date4 = "SELECT new_date FROM news WHERE new_id=4";
		$sqlTitle5 = "SELECT new_title FROM news WHERE new_id=5";
		$new_date5 = "SELECT new_date FROM news WHERE new_id=5";
		$sqlTitle6 = "SELECT new_title FROM news WHERE new_id=6";
		$new_date6 = "SELECT new_date FROM news WHERE new_id=6";

       $sqlTitleYou = "SELECT you_title FROM youtube WHERE you_id=1";
		$sqlTextYou = "SELECT you_text FROM youtube WHERE you_id=1";
		$sqlVideoYou = "SELECT you_video FROM youtube WHERE you_id=1";
		$sqlGoYou = "SELECT you_go FROM youtube WHERE you_id=1";
		 $sqlTitleYou2 = "SELECT you_title FROM youtube WHERE you_id=2";
		$sqlTextYou2 = "SELECT you_text FROM youtube WHERE you_id=2";
		$sqlVideoYou2 = "SELECT you_video FROM youtube WHERE you_id=2";
		$sqlGoYou2 = "SELECT you_go FROM youtube WHERE you_id=2";
		
      ?>


    <div class="col-md-2 mb-5">
      <label for="clientes" class="text-right">Lista de Clientes</label>
      <select name="nombre" class="form-control form-control-sm">
        <option value="">Seleccione el Cliente</option>
        <?php
          while ($dataSelect = mysqli_fetch_array($dataClientesSelect)) { ?>
            <option value="<?php echo $dataSelect["new_id"]; ?>">
              <?php echo ($dataSelect["new_title"]); ?>
            </option>
        <?php } ?>
      </select>
    </div>

   

    <div class="col-md-2 mb-5">
      <ul>
      <?php
        while ($dataUL = mysqli_fetch_array($dataClientes_ul)) { ?>
        <li><?php echo ($dataUL["new_title"]); ?></li>
        <?php } ?>
      </ul>
    </div>

    <div class="col-md-2 mb-5">
      <?php
        while ($dataRadio = mysqli_fetch_array($dataClientes_radio)) { ?>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="nombre" id="<?php echo ($dataRadio["new_id"]); ?>" value="<?php echo ($dataRadio["new_id"]); ?>">
          <label class="form-check-label" for="nombre">
          <?php echo ($dataRadio["new_title"]); ?>
          </label>
        </div>
      <?php } ?>
    </div>

    <div class="col-md-2 mb-5">
      <?php

        while ($dataCheckbox = mysqli_fetch_array($dataClientes_checkbox)) { ?>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="nombre" value="<?php echo $dataCheckbox["new_id"]; ?>" id="<?php echo $dataCheckbox["new_id"]; ?>">
          <label class="form-check-label" for="<?php echo $dataCheckbox["new_id"]; ?>">
            <?php echo ($dataCheckbox["new_title"]); ?>
          </label>
        </div>
      <?php } ?>
    </div>


  </div>
  </div>




   
        <audio controls autoplay>
            <source src="music/Illapu - Cacharpaya Del Pasiri (Audio).mp3" type="audio/mpeg">

            Your browser does not support the audio element.
        </audio>

        <!--button up  -->
        <button class="btn-scrolltop" id="btn_scrolltop">
            <i class="fas fa-chevron-up"></i>
        </button> 

        <div class="text-center">
            <img src="images/wiphala.png" class="img-fluid" alt="Logo" width="170" height="158">
            <img src="images/icon.png"  class="img-fluid" alt="Logo" width="170" height="158">
            <img src="images/wiphala.png" class="img-fluid" alt="Logo" width="170" height="158">
        </div>


        <!--Navbar -->
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">

                <span class="navbar-text text-light">
                    &nbsp;&nbsp;


                    <a href="https://www.google.com/maps/place/Escuela+Dar%C3%ADo+Salas+D%C3%ADaz+(F-3)/@-18.5006097,-70.2544275,17z/data=!3m1!4b1!4m6!3m5!1s0x915007f7962a93e5:0xccffe47c2cc8a5c6!8m2!3d-18.5006097!4d-70.2544275!16s%2Fg%2F11g71d57fg?entry=ttu&g_ep=EgoyMDI1MTEwMi4wIKXMDSoASAFQAw%3D%3D" class="btn btn-raised shadow my-button w-xs purple" target="_blank" rel="noopener noreferrer">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill"  viewBox="0 0 16 16">
                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
                        </svg>
                    </a>&nbsp;Av. Senador Humberto Palza Corvacho 6351, Arica
                </span>
            </div>
        </nav>


        <!--        <div class="collapse" id="navbarToggleExternalContent">
                    <div class="p-4">
                        <div class="d-flex">
                    <hr class="my-3">
                </div>
                        <h5 id="text-external-navbar"><a class="navbar-brand" aria-current="page" href="index.html">Inicio</a></h5>
                        <hr class="my-3">
                        <h5 id="text-external-navbar"><a class="navbar-brand" aria-current="page" href="proyectoeducativo.html">Proyecto educativo</a></h5>
                        <hr class="my-3">
                        <h5 id="text-external-navbar"><a class="navbar-brand"  href="">Organización</a></h5>
                        <hr class="my-3">
                        <h5 id="text-external-navbar"><a class="navbar-brand" href="docentes.html">Docentes</a></h5>
                        <hr class="my-3">
                        <h5 id="text-external-navbar"><a class="navbar-brand"  href="">Asistentes</a></h5>
                        <hr class="my-3">
                        <h5 id="text-external-navbar"><a class="navbar-brand"  href="">Programa de integración</a></h5>
                        <hr class="my-3">
                        <h5 id="text-external-navbar"><a class="navbar-brand"  href="">Academias</a></h5>
                        <hr class="my-3">
                        <h5 id="text-external-navbar"><a class="navbar-brand"  href="admision.html">Admisión 2026</a></h5>
                        <hr class="my-3">
                        <h5 id="text-external-navbar"><a class="navbar-brand"  href="contacto.html">Contacto</a></h5>
        
                    </div>
                </div>-->



        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">

                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="p-4">

                    <h5 id="text-external-navbar"><a class="navbar-brand" aria-current="page" href="index.html">Inicio</a></h5>
                    <div class="d-flex">
                        <hr class="my-3">
                    </div>
                    <h5 id="text-external-navbar"><a class="navbar-brand" aria-current="page" href="proyectoeducativo.html">Proyecto educativo</a></h5>
                    <div class="d-flex">
                        <hr class="my-3">
                    </div>
                    <h5 id="text-external-navbar"><a class="navbar-brand"  href="">Organización</a></h5>
                      <div class="d-flex">
                        <hr class="my-3">
                    </div>
                    <h5 id="text-external-navbar"><a class="navbar-brand" href="docentes.html">Docentes</a></h5>
                       <div class="d-flex">
                        <hr class="my-3">
                    </div>
                    <h5 id="text-external-navbar"><a class="navbar-brand"  href="">Asistentes</a></h5>
                      <div class="d-flex">
                        <hr class="my-3">
                    </div>
                    <h5 id="text-external-navbar"><a class="navbar-brand"  href="">Programa de integración</a></h5>
                       <div class="d-flex">
                        <hr class="my-3">
                    </div>
                    <h5 id="text-external-navbar"><a class="navbar-brand"  href="">Academias</a></h5>
                     <div class="d-flex">
                        <hr class="my-3">
                    </div>
                    <h5 id="text-external-navbar"><a class="navbar-brand"  href="admision.html">Admisión 2026</a></h5>
                      <div class="d-flex">
                        <hr class="my-3">
                    </div>
                    <h5 id="text-external-navbar"><a class="navbar-brand"  href="contacto.html">Contacto</a></h5>
                </div>
            </div>
        </div>

        <div class="d-flex">
            <hr class="my-3">
        </div>
        <!--Navbar -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container justify-content-center"> 


                <div class="container-fluid">

                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!--                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                                            <span class="navbar-toggler-icon"></span>
                                        </button>-->
                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav">
                            <li class="nav-item">

                                <a class="navbar-brand" aria-current="page" href="index.html">Inicio</a>

                            </li>

                            <!--                              <li class="nav-item dropdown">
                                                              
                                                                    <a class="btn btn-outline-light btn-floating m-1" href="misionyvision.html" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                Misión y visión
                                                            </a>
                                                           
                                                          <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="misionyvision.html">Historia</a></li>
                                                                 <li><hr class="dropdown-divider"></li>
                                                               <li><a class="dropdown-item" href="#">Misión y visión</a></li>                                
                                                            </ul> 
                                                        </li>  -->
                            <li class="nav-item">
                                <a class="navbar-brand" href="proyectoeducativo.html">Proyecto educativo</a>
                            </li>
                            <li class="nav-item">
                                <a class="navbar-brand" href="">Organización</a>
                            </li>
                            <li class="nav-item">
                                <a class="navbar-brand" href="docentes.html">Docentes</a>
                            </li>
                            <li class="nav-item">
                                <a class="navbar-brand" href="">Asistentes</a>
                            </li>
                            <li class="nav-item">
                                <a class="navbar-brand" href="">Programa de integración</a>
                            </li> 
                            <li class="nav-item">
                                <a class="navbar-brand" href="#">Academias</a>
                            </li>

                            <li class="nav-item">
                                <a class="navbar-brand" href="admision.html">Admisión 2026</a>
                            </li>
                            <li class="nav-item">
                                <a class="navbar-brand" href="contacto.html">Contacto</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <div class="d-flex">
            <hr class="my-3">
        </div>




        <!-- Carousel -->
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel" data-bs-interval="3000">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="images/1.jpg" class="d-block w-100" alt="...">
                </div>

                <div class="carousel-item" data-bs-interval="2000">
                    <img src="images/2.jpg" class="d-block w-100" alt="...">

                </div>
                <div class="carousel-item">
                    <img src="images/3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>

        </div>


      
  




    
        
        <!--Noticias -->

        <div class="container"> 
            <h1>Noticias</h1>
        </div>
        <div class="album py-1 bg-body-tertiary">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="images/noticia1/card1-1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
	
                                <h5 class="card-title">			 
								<?php 		
      $result = mysqli_query($getconex, $sqlTitle);
while($row = mysqli_fetch_array($result)){
    echo $row['new_title']."<br>";
} ?>	
</h5>

<?php 		
      $result = mysqli_query($getconex, $new_date);
while($row = mysqli_fetch_array($result)){
    echo $row['new_date']."<br>";
} ?>
                               				     
	
 

    
                                <a href="noticia1.php" class="btn btn-raised shadow my-button w-xs purple">Leer</a>
								   <a href="" class="btn btn-raised shadow my-button w-xs purple">Leer en facebook</a>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="images/noticia2/card2-1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">
															<?php 		
      $result = mysqli_query($getconex, $sqlTitle2);
while($row = mysqli_fetch_array($result)){
    echo $row['new_title']."<br>";
} ?>
								</h5>
                               <?php 		
      $result = mysqli_query($getconex, $new_date2);
while($row = mysqli_fetch_array($result)){
    echo $row['new_date']."<br>";
} ?>
                                <a href="noticia2.html"  target="_blank" rel="noopener noreferrer" class="btn btn-raised shadow my-button w-xs purple">Leer</a>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="images/card3-1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">															
								<?php 		
      $result = mysqli_query($getconex, $sqlTitle3);
while($row = mysqli_fetch_array($result)){
    echo $row['new_title']."<br>";
} ?></h5>
                           <?php 		
      $result = mysqli_query($getconex, $new_date3);
while($row = mysqli_fetch_array($result)){
    echo $row['new_date']."<br>";
} ?>
                                <a href="noticia3.html"  target="_blank" rel="noopener noreferrer" class="btn btn-raised shadow my-button w-xs purple">Leer</a>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="images/card4-1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">							<?php 		
      $result = mysqli_query($getconex, $sqlTitle4);
while($row = mysqli_fetch_array($result)){
    echo $row['new_title']."<br>";
} ?></h5>
                                                  <?php 		
      $result = mysqli_query($getconex, $new_date4);
while($row = mysqli_fetch_array($result)){
    echo $row['new_date']."<br>";
} ?>
                                <a href="noticia4.html"  target="_blank" rel="noopener noreferrer" class="btn btn-raised shadow my-button w-xs purple">Leer</a>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="images/card5-1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">	<?php 		
      $result = mysqli_query($getconex, $sqlTitle5);
while($row = mysqli_fetch_array($result)){
    echo $row['new_title']."<br>";
} ?></h5>
                                                                             <?php 		
      $result = mysqli_query($getconex, $new_date5);
while($row = mysqli_fetch_array($result)){
    echo $row['new_date']."<br>";
} ?>
                                <a href="noticia5.html"  target="_blank" rel="noopener noreferrer" class="btn btn-raised shadow my-button w-xs purple">Leer</a>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="images/card6-1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">	<?php 		
      $result = mysqli_query($getconex, $sqlTitle6);
while($row = mysqli_fetch_array($result)){
    echo $row['new_title']."<br>";
} ?></h5>
                                         <?php 		
      $result = mysqli_query($getconex, $new_date6);
while($row = mysqli_fetch_array($result)){
    echo $row['new_date']."<br>";
} ?>
                                <a href="noticia6.html"  target="_blank" rel="noopener noreferrer" class="btn btn-raised shadow my-button w-xs purple">Leer</a>
                            </div>
                        </div>
                    </div> 

                    <!--Sección youtube -->

                    <div class="container"> 
                        <h1>Sección youtube</h1> <img src="images/youtube.png" width="170" height="183" alt="...">
                    </div>

                    <div class="col">                 
                        <div class="card" style="width: 18rem;">
                     <?php 		
      $result = mysqli_query($getconex, $sqlVideoYou);
while($row = mysqli_fetch_array($result)){
    echo $row['you_video']."<br>";
} ?>
                            <div class="card-body">
                                <div class="text-primary"><?php 		
      $result = mysqli_query($getconex, $sqlTitleYou);
while($row = mysqli_fetch_array($result)){
    echo $row['you_title']."<br>";
} ?></div>
                                <h5 class="card-title"><?php 		
      $result = mysqli_query($getconex, $sqlTextYou);
while($row = mysqli_fetch_array($result)){
    echo $row['you_text']."<br>";
} ?></h5>

                                <a href="<?php 		
      $result = mysqli_query($getconex, $sqlGoYou);
while($row = mysqli_fetch_array($result)){
    echo $row['you_go'];
} ?>"  target="_blank" rel="noopener noreferrer" class="btn btn-raised shadow my-button w-xs purple">Ir al video</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">                 
                        <div class="card" style="width: 18rem;">
                                             <?php 		
      $result = mysqli_query($getconex, $sqlVideoYou2);
while($row = mysqli_fetch_array($result)){
    echo $row['you_video']."<br>";
} ?>
                            <div class="card-body">
                                <div class="text-primary"><?php 		
      $result = mysqli_query($getconex, $sqlTitleYou2);
while($row = mysqli_fetch_array($result)){
    echo $row['you_title']."<br>";
} ?></div>
                                <h5 class="card-title"><?php 		
      $result = mysqli_query($getconex, $sqlTextYou2);
while($row = mysqli_fetch_array($result)){
    echo $row['you_text']."<br>";
} ?></h5>

                                <a href="<?php 		
      $result = mysqli_query($getconex, $sqlGoYou2);
while($row = mysqli_fetch_array($result)){
    echo $row['you_go'];
} ?>"  target="_blank" rel="noopener noreferrer" class="btn btn-raised shadow my-button w-xs purple">Ir al video</a>
                            </div>
                        </div>
                    </div>





                </div>
            </div>

            <!-- Footer -->
            <footer
                class="text-center text-lg-start text-white"

                >
                <!-- Grid container -->
                <div class="container p-4 pb-0">

                    <h5 class="text-center">Redes sociales</h5>
                    <!-- Section: Links -->

                    <hr class="mb-4" />

                    <!-- Section: Social media -->
                    <section class="mb-4 text-center">
                        <!-- Facebook -->
                        <a
                            class="btn btn-outline-light btn-floating m-1"
                            href="https://www.facebook.com/dario.salasdiaz.5"
                            role="button"
                            ><i class="fab fa-facebook-f"></i
                            ></a>

                        <!-- Youtube -->
                        <a
                            class="btn btn-outline-light btn-floating m-1"
                            href="https://www.youtube.com/@dariotvelcanaldelvalle9598"
                            role="button"
                            ><i class="fab fa-youtube"></i
                            ></a>

             


                        <!-- Section: Social media -->
                </div>
                <!-- Grid container -->

                <!-- Copyright -->
                <div
                    class="text-center p-3"
                    style="background-color: rgba(0, 0, 0, 0.2)"
                    >

                    Desarrollado por:
                    <!-- Whatsapp -->
                    <a
                        class="btn btn-outline-light btn-floating m-1"
                        href="#!"
                        role="button"
                        ><i class="fab fa-whatsapp"></i
                        ></a>
                </div>
                <!-- Copyright -->

            </footer>
            <!-- Footer -->  

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
            <script src="index.js"></script>
    </body>
</html>
