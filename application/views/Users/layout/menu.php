<body id="body">

    <header id="header" class=" fixed-top d-flex flex-row align-items-center flex-wrap  col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

        <!-- Logo -->
        <div id="logo" class="d-flex justify-content-center col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12" >
                <a href="<?php base_url()?>cHome"> Learn English Anyway Enws</a>
        </div>
        <!--  -->


        <!-- Navegacion -->
        <div id="nav" class="d-flex flex-row justify-content-around col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
          <?php if($this->session->userdata('s_usuario')!=null){?>
            <div>
                  <a  href="<?php echo base_url(); ?>cHome/LogOut">Cerrar Sesión</a> 
            </div>
          <?php } else{ ?>
            <div>
                  <a  href="<?php echo base_url(); ?>Clogin">Iniciar Sesión</a> 
            </div>
            <div class="d-none d-md-block ">
                   <a class="hidden-sm " href="<?php echo base_url(); ?>Cregister">Registrarse</a>
            </div>            
          <?php } ?>            
        </div>
        <!--  -->

    </header>
    <!--  -->

    <?php if($this->session->userdata('s_usuario')!=null){?>
       <div id="menu" class="fixed-top d-flex col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">


     
        <div class="d-flex flex-row flex-nowrap justify-content-around align-items-center col-xl-5 col-lg-6 col-md-12 col-sm-12 col-12">
            <div  class="d-flex align-items-center">
                <a href="..." target="blank_">Metodología</a>
            </div>
            <div class="d-flex align-items-start">
                <a href="..." target="blank_">Curso</a>
            </div>
            <div class="d-flex align-items-center">
                <a href="..." target="blank_">Units</a>
            </div>
            <div class="d-flex align-items-center">
                <a href="..." target="blank_">Games</a>
            </div>
            <div class="d-flex align-items-center">
                <a href="..." target="blank_">Avance</a>
            </div>
        </div>
     </div>

        <nav class="d-block d-sm-none navbar navbar-light light-blue lighten-4">

            <!-- Navbar brand -->
           
          
            <!-- Collapse button -->

            <div id="menu2" class="fixed-top">
            <button class="navbar-toggler toggler-example" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1"
              aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"><img src="<?php echo base_url();?>assets/imagenes/icono-1.png" alt="" width="30px" height="30px"> <span class="dark-blue-text"><i
                  class="fas fa-bars fa-1x"></i></span></button>
          
            <!-- Collapsible content -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent1">
          
              <!-- Links -->
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#"> Metodología <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Curso</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Units</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="">Games</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="">Avance</a>
                </li>
              </ul>
              <!-- Links -->
          
            </div>
            <!-- Collapsible content -->
            </div>
          </nav>
    <?php }else{ ?>
       <div id="menu" class="fixed-top d-flex col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">


     
        <div class="d-flex flex-row flex-nowrap justify-content-around align-items-center col-xl-5 col-lg-6 col-md-12 col-sm-12 col-12">
            <div  class="d-flex align-items-center">
                <a href="..." target="blank_">Inicio</a>
            </div>
            <div class="d-flex align-items-start">
                <a href="..." target="blank_">Nosotros</a>
            </div>
            <div class="d-flex align-items-center">
                <a href="..." target="blank_">Curso de inglés(A1)</a>
            </div>
            <div class="d-flex align-items-center">
                <a href="..." target="blank_">Contacto</a>
            </div>
        
        </div>
     </div>

        <nav class="d-block d-sm-none navbar navbar-light light-blue lighten-4">

            <!-- Navbar brand -->
           
          
            <!-- Collapse button -->

            <div id="menu2" class="fixed-top">
            <button class="navbar-toggler toggler-example" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1"
              aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"><img src="<?php echo base_url();?>assets/imagenes/icono-1.png" alt="" width="30px" height="30px"> <span class="dark-blue-text"><i
                  class="fas fa-bars fa-1x"></i></span></button>
          
            <!-- Collapsible content -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent1">
          
              <!-- Links -->
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#"> INICO <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">NOSOTROS</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">CURSO DE INGLES A1</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="">CONTACTO</a>
                </li>
              </ul>
              <!-- Links -->
          
            </div>
            <!-- Collapsible content -->
            </div>
          </nav>
    <?php } ?>


            