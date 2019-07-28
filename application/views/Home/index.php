    <div id="demo" class="carousel slide" data-ride="carousel"  >

            <!-- Indicators -->
            <ul class="carousel-indicators">
              <li data-target="#demo" data-slide-to="0" class="active"></li>
              <li data-target="#demo" data-slide-to="1"></li>
              <li data-target="#demo" data-slide-to="2"></li>
              <li data-target="#demo" data-slide-to="3"></li>
            </ul>
            
            <!-- The slideshow -->
            <div class="carousel-inner" >
              <div class="carousel-item active">
                <img src="<?php echo base_url();?>assets/imagenes/1.jpg" alt="..." width="1100" height="400">
              </div>
              <div class="carousel-item">
                <img src="<?php echo base_url();?>assets/imagenes/2.jpg" alt="..." width="1100" height="400">
              </div>
              <div class="carousel-item">
                <img src="<?php echo base_url();?>assets/imagenes/3.jpg" alt="..." width="1100" height="400">
              </div>
              <div class="carousel-item">
                <img src="<?php echo base_url();?>assets/imagenes/4.jpg" alt="..." width="1100" height="400">
              </div>
            </div>
            
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
          </div>

    <!-- -->

    <!--ARTICLE-->

    <article class="container d-flex  col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

      <div class="container-fluid d-flex flex-row flex-wrap col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 " >

        <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1 ">
          
        </div>

        <div  class="titulo1 col-xl-11 col-lg-11 col-md-11 col-sm-12 col-12">
          <p><b>LEAE</b></p>
          <p id="titulo2"><b> APRENDE INGLÉS </b> </b></p>
        </div>

        <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1 ">

        </div>
        <div id="parrafo" class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-12" >
            <b> Aprende inglés desde cero, con este curso que ofrecemos aprenderas a comunicarte de una manera muy exitosa básica, Learn
            English Anyway Enws ofrece este curso de inglés A1 para que desarrolles tus capacidades comunicativas básicas en inglés
            y de esta manera tu vida empiece a cambiar, debido a que el inglés acutalmente representa un requisito para las personas
            en sus vidas para un pleno desarrolo de su vida en diferentes ambitos. </b>
        </div>
      
      </div>

    </article>


    <!---->
    <div id="cont-formulario" class="d-flex justify-content-center align-items-center-center col-xl-12 col-lg-12 col-md-12 col-ms-12 col-12">

      
      <div id="formulario" class="d-flex flex-wrap flex-row  col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8 " >

        <div id="contacto" class="d-flex col-xl-12 justify-content-center col-lg-12 col-md-12 col-xs-12 col-12">
        Contacto
        </div>
        
        <form action="/action_page.php" class="col-xl-12">
          
          <div class="form-group">
            <label class="datos" for="nombre">Nombre:</label>
            <input type="nombre" class="form-control" id="nombre" placeholder="Ingrese su nombre" name="nombre" >


          </div>


          <div class="form-group">
              <label class="datos" for="apellidos"  >Apellidos:</label>
              <input type="apellidos" class="form-control" id="apellidos" placeholder="Ingrese sus apellidos" name="apellidos">
            </div>

          <div class="form-group">
              <label class="datos " for="email">Email:</label>
              <input type="email" class="form-control col-xl-12" id="email" placeholder="Enter email" name="email">
            </div>

            <div class="form-group">
                <label class="datos" for="mensaje">Mensaje:</label>
                <textarea class="form-control" rows="5" id="mensaje" name="mensaje" placeholder="Dejenos su mensaje"></textarea>
              </div>
          <button style="margin-block-end: 40px;" type="Enviar" class="btn btn-success">Enviar</button>
        </form>

      </div>

    </div>
      <!---->





