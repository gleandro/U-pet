<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Mensajes</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>application/helpers/css/materialize.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>application/helpers/css/principal.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>
  <body>
    <?php $this->load->view('Inicio/header'); ?>
    <div class="row">
      <div class="col xl4 border_right" style="min-height:900px;padding-left: 0; padding-right: 0;">
        <div class="row border_bot center_row valign-wrapper row_1">
          <div class="col xl2">
            <img src="<?php echo base_url(); ?>application/helpers/icons/chat/conf.png" alt="">
          </div>
          <div class="col xl2">
            <img src="<?php echo base_url(); ?>application/helpers/icons/chat/upet.png" alt="">
          </div>
          <div class="col xl5">
            <span>UpetChat</span>
          </div>
          <div class="col xl2">
            <img src="<?php echo base_url(); ?>application/helpers/icons/chat/write.png" alt="">
          </div>
        </div>
        <div class="row border_bot row_2">
          <form class="col xl12">
            <div class="row">
              <div class="input-field col xl10">
                <i class="material-icons prefix">search</i>
                <input id="icon_prefix" type="text" class="validate">
                <label for="icon_prefix" class="active">Buscar en UpetChat</label>
              </div>
            </div>
          </form>
        </div>
        <div class="row border_bot row_2">
          <div class="col xl12 center_row valign-wrapper">
            <span>No se encontraron mensajes</span>
          </div>
        </div>
      </div>
      <!-- COLUMNA 2-->
      <div class="col xl8" style="min-height:900px;padding-left: 0; padding-right: 0;">
        <div class="row border_bot row_1 valign-wrapper">
          <div class="col xl12 center-align">
            <span>Tienda Pets Péts</span><br>
            <span>Upet</span>
          </div>
        </div>
        <!-- BLOQUE IZQUIERDO-->
        <div class="row">
          <div class="col xl8" style="padding-left: 0; padding-right: 0;">
            <div class="row border_bot row_1 valign-wrapper">
              <div class="col xl2 offset-xl1 right-align" style="padding-left: 1%; padding-right: 1%;">
                <img src="<?php echo base_url();?>application/helpers/icons/chat/perfil.png" alt="">
              </div>
              <div class="col xl19 left-align">
                <span>Tienda Pets Péts</span><br>
                <span>23mil personas les gusta esto</span><br>
                <span>Producto/servicio</span>
              </div>
            </div>
            <br>
            <div class="row row_2 border_top border_bot valign-wrapper">
              <div class="input-field col xl7">
                <input id="message" type="text" class="validate">
                <label for="message" class="active">Escribe un mensaje</label>
              </div>
              <div class="col xl4 right-align">
                  <img src="<?php echo base_url();?>application/helpers/icons/chat/images.png" alt="" style="padding-left:2%;padding-right:2%">
                  <img src="<?php echo base_url();?>application/helpers/icons/chat/sticker.png" alt="" style="padding-left:2%;padding-right:2%">
                  <img src="<?php echo base_url();?>application/helpers/icons/chat/shot.png" alt="" style="padding-left:2%;padding-right:2%">
                  <img src="<?php echo base_url();?>application/helpers/icons/chat/like.png" alt="" style="padding-left:2%;padding-right:2%">
              </div>
            </div>
          </div>
          <!-- BLOQUE DERECHO-->
          <div class="col xl4 border_left" style="padding-left: 0; padding-right: 0;">
            <div class="row row_1 border_bot valign-wrapper">
              <div class="col xl3 right-align" style="margin-left: 0;">
                <img src="<?php echo base_url();?>application/helpers/icons/chat/perfil.png" alt="">
              </div>
              <div class="col xl18 left-align">
                <span>Tienda Pets Péts</span><br>
                <span>Upet</span>
              </div>
            </div>
            <div class="row row_3 border_bot">
              <div class="col xl12">
                <div class="row">
                  <div class="col xl8">
                    <span>opciones</span>
                  </div>
                  <div class="col xl4">

                  </div>
                </div>
                <div class="row valign-wrapper">
                  <div class="col xl2 right-align">
                    <img width="50%" src="<?php echo base_url();?>application/helpers/icons/chat/buscar.png" alt="">
                  </div>
                  <div class="col xl10">
                    <span>Buscar en la conversación</span>
                  </div>
                </div>
                <div class="row valign-wrapper">
                  <div class="col xl2 right-align">
                    <img src="<?php echo base_url();?>application/helpers/icons/chat/noti.png" alt="">
                  </div>
                  <div class="col xl10">
                    <span>Notifiicaciones</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="row row_3">
              <div class="col xl12">
                <div class="row row_0">
                  <div class="col xl12">
                    <span>Tienda en Upet</span>
                  </div>
                </div>
                <div class="row">
                  <div class="col xl12">
                    <span>https://upet.com/petpéts/</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="<?php echo base_url(); ?>application/helpers/js/jquery-1.11.1.js" charset="utf-8"></script>
    <script src="<?php echo base_url(); ?>application/helpers/js/materialize.js" charset="utf-8"></script>
    <script src="<?php echo base_url(); ?>application/helpers/js/init.js" charset="utf-8"></script>
  </body>
</html>
