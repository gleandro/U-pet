<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>application/helpers/css/materialize.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>application/helpers/css/principal.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>
  <body class="orange lighten-4">
    <?php $this->load->view('Inicio/header'); ?>
  <div class="row center-align">
    <div class="col xl8 offset-xl2" style="min-height:800px">
      <div class="row row_0">
        <div class="col xl12">
          <div class="card row_0 vspace_0">
              <div class="card-image">
                <img src="<?php echo base_url()?>application/helpers/images/profile/portada.png">
                <span class="card-title">Ryan Sheckler</span>
                <span class="card-title right">
                  <img class="palote_space" src="<?php echo base_url()?>application/helpers/icons/profile/puntos.png" alt="">
                  <img class="palote_space" src="<?php echo base_url()?>application/helpers/icons/profile/editar.png" alt="">
                </span>
                <a class="btn-floating halfway-fab left">
                  <img class="materialboxed" src="<?php echo base_url()?>application/helpers/images/profile/perfil.png" alt="">
                </a>
              </div>
            </div>
        </div>
      </div>
      <div class="row">
        <div class="col xl12">
          <div class="row row_0 bord_green white vspace">
            <div class="col xl8 offset-xl2 valign-wrapper center_row">
              <span>Perfil</span>
              <img class="palote_space" src="<?php echo base_url()?>application/helpers/icons/inicio/lineavertical.png">
              <span>Fotos</span>
              <img class="palote_space" src="<?php echo base_url()?>application/helpers/icons/inicio/lineavertical.png">
              <span>Seguidores</span>
              <img class="palote_space" src="<?php echo base_url()?>application/helpers/icons/inicio/lineavertical.png">
              <span>Más</span>
              <img class="palote_space" src="<?php echo base_url()?>application/helpers/icons/profile/mas.png">
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col xl5">
          <div class="row bord_green white">
            <div class="col xl10">
              <div class="row row_0">
                <div class="col xl2">

                </div>
                <div class="col xl10">
                  24741BG254G
                </div>
              </div>
              <div class="row row_0">
                <div class="col xl2">

                </div>
                <div class="col xl10">
                  22 de setiembre 2014
                </div>
              </div>
              <div class="row row_0">
                <div class="col xl12">
                  // Mixto ///
                </div>
              </div>
              <div class="row row_0">
                <div class="col xl12">
                  // Macho ///
                </div>
              </div>
              <div class="row row_0">
                <div class="col xl12">
                  // Caramelo y Negro ///
                </div>
              </div>
            </div>
          </div>
          <div class="row bord_green white">
            <div class="col xl12">
              <div class="row">
                <div class="col xl2">
                  <img src="<?php echo base_url() ?>application/helpers/icons/profile/fotos.png" alt="">
                </div>
                <div class="col xl0">
                  <span>Fotos</span>
                </div>
              </div>
              <div class="col xl4">
                <img src="<?php echo base_url() ?>application/helpers/images/profile/fotos1.png" alt="">
              </div>
              <div class="col xl4">
                <img src="<?php echo base_url() ?>application/helpers/images/profile/fotos2.png" alt="">
              </div>
              <div class="col xl4">
                <img src="<?php echo base_url() ?>application/helpers/images/profile/fotos3.png" alt="">
              </div>
              <div class="col xl4">
                <img src="<?php echo base_url() ?>application/helpers/images/profile/fotos3.png" alt="">
              </div>
              <div class="col xl4">
                <img src="<?php echo base_url() ?>application/helpers/images/profile/fotos2.png" alt="">
              </div>
              <div class="col xl4">
                <img src="<?php echo base_url() ?>application/helpers/images/profile/fotos1.png" alt="">
              </div>
            </div>
          </div>
        </div>
        <div class="col xl7">
          <div class="row bord_green white">
            <div class="col xl12" style="padding-left:0;padding-right:0;">
              <div class="row bord_green light-green lighten-4">
                <div class="col xl12 valign-wrapper">
                  <img class="palote_space" src="<?php echo base_url();?>application/helpers/icons/inicio/second/editar.png" alt="">
                  <span id="texto" class="green_black_text">Crear una publicación</span>
                  <img class="palote_space" src="<?php echo base_url();?>application/helpers/icons/inicio/lineavertical.png" alt="">
                  <img class="palote_space" src="<?php echo base_url();?>application/helpers/icons/inicio/second/foto.png" alt="">
                  <a href="#"><span id="album" class="green_black_text">Álbum de foto o video</span></a>
                </div>
              </div>
              <div class="row row_0">
                <div class="input-field col xl11">
                 <i class="material-icons prefix"><img src="<?php echo base_url();?>application/helpers/icons/inicio/tree/perfil.png" alt=""></i>
                 <input id="icon_prefix" type="text" class="validate" style="margin-left: 4rem;">
                 <label for="icon_prefix" style="margin-left: 4rem;">Escribe tu publicación aqui...</label>
               </div>
              </div>
              <div class="row row_0" id="inicio_publicar" style="display:none">
                <div class="input-field col xl5 right-align" style="padding-left: 7%;">
                  <select class="icons">
                    <option value="" class="circle">Público</option>
                    <option value="" class="circle">Mis amigos</option>
                    <option value="" class="circle">Solo yo</option>
                  </select>
                </div>
                <div class="input-field col xl6 right-align">
                   <button class="waves-effect waves-light btn green_black" id="publicar" type="submit" name="button" style="border-radius: 10px;">Publicar</button>
                 </div>
              </div>
              <div class="row row_0" id="imagen" style="display:none">
               <form action="#" id="form1" runat="server">
                <div class="col xl8">
                   <div class="file-field input-field">
                     <div class="btn">
                       <span>File</span>
                       <input type="file" id="imgInp">
                     </div>
                     <div class="file-path-wrapper">
                       <input class="file-path validate" type="text" placeholder="Upload one or more files">
                     </div>
                   </div>
                 </div>
                 <div class="col xl4">
                   <img id="blah" class="materialboxed" style="padding-bottom:5%;border-radius: 10px;" width="100%" src="" alt="" />
                 </div>
                </form>
              </div>
            </div>
          </div>
          <div class="row bord_green white">
            <div class="col xl12">
              <div class="row">
                <div class="col xl12 left-align">
                  <img src="<?php echo base_url();?>application/helpers/icons/inicio/second/perfil.png" alt="">
                  <span>Ryan Sheckler Skate</span>
                </div>
              </div>
              <div class="row">
                <div class="col xl12">
                  <img class="materialboxed" data-caption="#galletas #galletas #galletas" src="<?php echo base_url();?>application/helpers/images/inicio/publicacion.png" alt="" style="width: 100%;">
                </div>
              </div>
              <div class="row center_row">
                <div class="col xl3">
                  <span>30123</span>
                  <img src="<?php echo base_url();?>application/helpers/images/inicio/like.png" alt="">
                </div>
                <div class="col xl3">
                  <span>440123</span>
                  <img src="<?php echo base_url();?>application/helpers/images/inicio/coment.png" alt="">
                </div>
                <div class="col xl3">
                  <span>4123</span>
                  <img src="<?php echo base_url();?>application/helpers/images/inicio/share.png" alt="">
                </div>
              </div>
              <div class="row">
                <div class="col xl12">
                  <span style="font-weight:bold">Ryan</span><span> Sheckler Skate</span>
                  <span> Acaba de comer una galleta</span><br>
                  <span>#galletas</span><span>#galletas</span><span>#galletas</span>
                </div>
              </div>
              <div class="row">
                <div class="col xl12">
                  <span>22hr</span>
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
