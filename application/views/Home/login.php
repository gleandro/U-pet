<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Inicia sesion</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>application/helpers/css/materialize.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>application/helpers/css/login.css">
  </head>
  <body>
    <nav style="height:100%;">
       <div class="nav-wrapper">
         <form class="" action="<?php echo base_url();?>Home/inicio" method="post">
           <div class="row">
             <div class="col xl2">
               <a href="#" class="brand-logo" style="padding-left: 4%;"><img src="<?php echo base_url();?>application/helpers/icons/login/upetlogoblanco.png" alt=""></a>
             </div>
             <div class="col xl8 offset-xl2">
               <div class="row">
                 <div class="col xl3 offset-xl3">
                   <input class="border" placeholder="Correo electronico" type="text" name="" value="" style="border-radius: 10px; background-color: white;color:gray">
                 </div>
                 <div class="col xl2">
                   <input class="border" placeholder="Contraseña" type="text" name="" value="" style="border-radius: 10px; background-color: white;color:gray">
                   <a class="password" href="#">¿Olvidaste tu contraseña?</a>
                 </div>
                 <div class="col xl4">
                   <button class="waves-effect waves-light btn green_black" type="submit" name="button" style="border-radius: 10px;">Iniciar sesión</button>
                 </div>
               </div>
             </div>
           </div>
         </form>
       </div>
     </nav>

    <div class="row">
      <div class="col xl6" style="padding-left: 3%;padding-top: 3%;">
        <img class="fondo" src="<?php echo base_url();?>application/helpers/images/login/fondo.png" alt="">
        <img class="phone" src="<?php echo base_url();?>application/helpers/images/login/phone.png" alt="">
      </div>
      <div class="col xl6" style="padding-top: 3%;">
        <div class="container">
          <div class="row">
            <div class="col xl12">
              <h1>Registrate gratis</h1>
            </div>
          </div>
          <div class="row">
            <form class="col xl12" action="index.html" method="post">
              <div class="row">
                <div class="col xl12">
                  <div class="input-field col xl12">
                    <input id="last_name" type="text" class="validate">
                    <label for="last_name">Nombres y Apellidos</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col xl12">
                  <div class="input-field col xl12">
                    <input id="last_name" type="text" class="validate">
                    <label for="last_name">Fecha de Nacimiento</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col xl12">
                  <div class="input-field col xl12">
                    <input id="last_name" type="text" class="validate">
                    <label for="last_name">Macho o Hembra</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col xl6">
                  <div class="input-field col xl12">
                    <input id="last_name" type="text" class="validate">
                    <label for="last_name">Telefono</label>
                  </div>
                </div>
                <div class="col xl6">
                  <div class="input-field col xl12">
                    <input id="last_name" type="text" class="validate">
                    <label for="last_name">Raza o Mixto</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col xl12">
                  <div class="input-field col xl12">
                    <input id="last_name" type="text" class="validate">
                    <label for="last_name">Dueño actual</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col xl12" style="text-align:center;">
                  <a class="waves-effect waves-light btn grey_1" style="border-radius: 10px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Crear cuenta&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <footer class="page-footer black">
        <div class="row">
          <div class="col xl9 offset-xl1">
            <h5 class="white-text">Español - Inglés - Frances - Portugués</h5>
          </div>
          <div class="col xl2">
            <img src="<?php echo base_url(); ?>application/helpers/icons/radicallogoicon.png" alt="">
          </div>
        </div>
      <div class="footer-copyright">
        <div class="container">
        © Radical Solutions
        </div>
      </div>
    </footer>

    <script src="<?php echo base_url(); ?>application/helpers/js/jquery-1.11.1.js" charset="utf-8"></script>
    <script src="<?php echo base_url(); ?>application/helpers/js/materialize.js" charset="utf-8"></script>
  </body>
</html>
