<body id="body">

    <header id="header" class=" fixed-top d-flex flex-row align-items-center flex-wrap  col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

        <!-- Logo -->
        <div id="logo" class="d-flex justify-content-center col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12" >
          <img width="100" height="100" src="<?php base_url()?>assets/imagenes/Logo.jpeg"></img> 
                
                <a href="<?php base_url()?>cHome"> Learn English Anyway Enws</a>
                
                </div>
        </div>

        <!--  -->


        <!-- Navegacion -->
        <div id="nav" class="d-flex flex-row justify-content-around col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
          <?php if($this->session->userdata('s_usuario')!=null){?>
            <div>
                  <a  href="<?php echo base_url(); ?>cHome/LogOut"> Sign off</a> 
            </div>
          <?php } else{ ?>
            <div>
                  <a  href="<?php echo base_url(); ?>Clogin">Log in</a> 
            </div>
            <div class="d-none d-md-block ">
                   <a class="hidden-sm " href="<?php echo base_url(); ?>Cregister">Sing in</a>
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
                <a href="<?php echo base_url()?>cPrueba/metodologia" target="blank_">
Methodology</a>
            </div>
            
            <div class="d-flex align-items-center">
                <a href="<?php echo base_url()?>cPrueba/UnitsDinamica">Units</a>
            </div>
            <div class="d-flex align-items-center">
                <a href="<?php echo base_url()?>cPrueba/getgames" >Games</a>
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
                  <a class="nav-link" href="#"> Menu <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url()?>cPrueba/metodologia">Methodology</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url()?>cPrueba/UnitsDinamica">Units</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url()?>cPrueba/getgames">Games</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href=""></a>
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
                <a href="..." target="blank_"></a>
            </div>
            <div class="d-flex align-items-start">
                <a href="<?php echo base_url()?>cPrueba/nosotros" target="blank_">About us</a>
            </div>
            <div class="d-flex align-items-center">
                <a href="<?php echo base_url()?>cPrueba/curso" target="blank_">English course (A1)
</a>
            </div>
            <div class="d-flex align-items-center">
                <a href="contacto">Contact</a>
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
                  <a class="nav-link" href="#">  <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url()?>cPrueba/nosotros">Abaout us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url()?>cPrueba/curso">English course (A1)</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="">Contact</a>
                </li>
              </ul>
              <!-- Links -->
          
            </div>
            <!-- Collapsible content -->
            </div>
          </nav>
    <?php } ?>


            