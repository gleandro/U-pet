<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Inicio</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>application/helpers/css/materialize.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>application/helpers/css/principal.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>
  <body class="orange lighten-4">

    <?php $this->load->view('Inicio/header'); ?>

     <div class="container" style="margin-top:3%;">
       <div class="row">
         <div class="col xl3">
           <div class="row" style="min-height: 50px;">
             <a href="#">
               <div class="col xl2">
                 <img src="<?php echo base_url();?>application/helpers/icons/inicio/first/perfil.png" alt="">
               </div>
               <div class="col xl9 offset-xl1 black-text" style="padding-top:10px;">
                 <span>Ryan Sheckler</span>
               </div>
             </a>
           </div>
           <div class="row" style="min-height: 50px;">
             <a href="<?php echo base_url()?>Message">
               <div class="col xl2">
                 <img src="<?php echo base_url();?>application/helpers/icons/inicio/first/noticiasicon.png" alt="">
               </div>
               <div class="col xl9 offset-xl1 black-text" style="padding-top:10px;">
                 <span>Noticias</span>
               </div>
             </a>
           </div>
           <div class="row" style="min-height: 50px;">
             <a href="<?php echo base_url()?>Message">
               <div class="col xl2">
                 <img src="<?php echo base_url();?>application/helpers/icons/inicio/first/chaticon.png" alt="">
               </div>
               <div class="col xl9 offset-xl1 black-text" style="padding-top:10px;">
                 <span>UpetChat</span>
               </div>
             </a>
           </div>
           <div class="row" style="min-height: 50px;">
             <a href="#">
               <div class="col xl2">
                 <img src="<?php echo base_url();?>application/helpers/icons/inicio/first/eventosicon.png" alt="">
               </div>
               <div class="col xl9 offset-xl1 black-text" style="padding-top:10px;">
                 <span>UpetEventos</span>
               </div>
             </a>
           </div>
           <div class="row" style="min-height: 50px;">
             <a href="#">
               <div class="col xl2">
                 <img src="<?php echo base_url();?>application/helpers/icons/inicio/first/grupetsicon.png" alt="">
               </div>
               <div class="col xl9 offset-xl1 black-text" style="padding-top:10px;">
                 <span>Grupets</span>
               </div>
            </a>
           </div>
           <div class="row" style="min-height: 50px;">
             <a href="#">
               <div class="col xl2">
                 <img src="<?php echo base_url();?>application/helpers/icons/inicio/first/tiendasicon.png" alt="">
               </div>
               <div class="col xl9 offset-xl1 black-text" style="padding-top:10px;">
                 <span>PetTiendas</span>
               </div>
              </a>
           </div>
           <div class="row" style="min-height: 50px;">
             <a href="#">
               <div class="col xl2">
                 <img src="<?php echo base_url();?>application/helpers/icons/inicio/first/guardaricon.png" alt="">
               </div>
               <div class="col xl9 offset-xl1 black-text" style="padding-top:10px;">
                 <span>Guardado</span>
               </div>
             </a>
           </div>
         </div>
         <div class="col xl6" style="padding-right: 30px;">
           <div class="row bord_green white">
             <div class="col xl12">
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
                 <div class="col xl12">
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
         <div class="col xl3 " style="text-align:-webkit-center;">
           <div class="row bord_green white">
             <div class="col x12">
               <div class="row">
                 <div class="col x12">
                   <span>Grupets sugeridos</span>
                 </div>
               </div>
               <div class="row bord_green" style="width: 99%;">
                 <div class="">
                   <div class="col x12" style="padding: 0;">
                     <img src="<?php echo base_url();?>application/helpers/icons/inicio/tree/foto1.png" alt="">
                   </div>
                   <div class="col x19">
                     <span>¿Cómo sobrevivir a mi cachorro?</span><br>
                     <span>248464684 miembros</span>
                   </div>
                   <div class="col x13">
                     <button type="submit" name="button"></button>
                   </div>
                 </div>
               </div>
             </div>
           </div>
           <div class="row bord_green white">
             <div class="col xl12">
               <div class="row">
                 <div class="col xl12">
                   <span>Personas que quizás conoscas</span>
                 </div>
               </div>
               <div class="row center_row">
                 <div class="col x12">
                   <img src="<?php echo base_url();?>application/helpers/icons/inicio/tree/perfil.png" alt="">
                 </div>
                 <div class="col x16">
                   <span>Tania Alvarado</span><br>
                   <button type="submit" name="button"></button>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>

     </div>

    <footer class="page-footer black">
        <div class="row">
          <div class="col xl9 offset-xl1" style="padding-top:10px;">
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
    <script src="<?php echo base_url(); ?>application/helpers/js/init.js" charset="utf-8"></script>
  </body>
</html>
