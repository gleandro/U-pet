<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">
  <link rel="icon" href="<?php echo base_url(); ?>application/helpers/img/favicon.png">
  <title>Day-Day</title>
  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url(); ?>application/helpers/bootstrap.3.3.6/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>application/helpers/font-awesome.4.6.1/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>application/helpers/assets/css/animate.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>application/helpers/assets/css/timeline.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>application/helpers/assets/css/cover.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>application/helpers/assets/css/forms.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>application/helpers/assets/css/buttons.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>application/helpers/assets/css/user_detail.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>application/helpers/assets/css/profile4.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>application/helpers/assets/css/friends.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>application/helpers/assets/css/photos3.css" rel="stylesheet">
  <script src="<?php echo base_url(); ?>application/helpers/assets/js/jquery.1.11.1.min.js"></script>
  <script src="<?php echo base_url(); ?>application/helpers/bootstrap.3.3.6/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>application/helpers/bootstrap.3.3.6/js/notify.js"></script>
  <script type="text/javascript">
  $(document).ready(function() {

    nc_sistema.cargar_publicaciones();

  });

  nc_sistema =
  {
    publicar_publicacion:function(pub,nuevo = 0){

      if (nuevo == 0) {
        $HTML = '<div class="box box-widget">';
      }
      else{
        $HTML = '<div class="box box-widget new_pub" style="display:none">';
      }
      $HTML += '<div class="box-header with-border">';
      $HTML += '<div class="user-block">';
      $HTML += '<img class="img-circle" src="http://localhost/application/helpers/img/Friends/guy-3.jpg" alt="User Image">';
      $HTML += '<span class="username"><a href="#"><?php echo $usuario['nombre']; ?></a></span>';
      $HTML += '<span class="description">'+pub.fecha_crea+'</span>';
      $HTML += '</div>';
      $HTML += '</div>';
      $HTML += '<div class="box-body" style="display: block;">';
      $HTML += '<p>'+pub.descripcion+'</p>';
      $HTML += '<button type="button" class="btn btn-default btn-xs"><i class="fa fa-share"></i> Share</button>';
      $HTML += '<button type="button" class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button>';
      $HTML += '<span class="pull-right text-muted">'+pub.liked+' likes - '+pub.coment+' comments - '+pub.share+' shared</span>';
      $HTML += '</div>';
      $HTML += '<div class="box-footer box-comments" style="display: block;">';
      $HTML += '<div class="box-comment">';
      $HTML += '<img class="img-circle img-sm" src="http://localhost/application/helpers/img/Friends/guy-2.jpg" alt="User Image">';
      $HTML += '<div class="comment-text">';
      $HTML += '<span class="username">Maria Gonzales<span class="text-muted pull-right">8:03 PM Today</span></span>';
      $HTML += 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.';
      $HTML += '</div>';
      $HTML += '</div>';
      $HTML += '<div class="box-comment">';
      $HTML += '<img class="img-circle img-sm" src="http://localhost/application/helpers/img/Friends/guy-3.jpg" alt="User Image">';
      $HTML += '<div class="comment-text">';
      $HTML += '<span class="username">Luna Stark<span class="text-muted pull-right">8:03 PM Today</span></span>';
      $HTML += 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.';
      $HTML += '</div>';
      $HTML += '</div>';
      $HTML += '</div>';
      $HTML += '<div class="box-footer" style="display: block;">';
      $HTML += '<form action="#" method="post">';
      $HTML += '<img class="img-responsive img-circle img-sm" src="http://localhost/application/helpers/img/Friends/guy-3.jpg" alt="Alt Text">';
      $HTML += '<div class="img-push">';
      $HTML += '<input type="text" class="form-control input-sm" placeholder="Escribe un comentario...">';
      $HTML += '</div>';
      $HTML += '</form>';
      $HTML += '</div>';
      $HTML += '</div>';
      if (nuevo == 0) {
        $("#publicaciones").append($HTML);
      }
      else{
        $("#publicaciones").prepend($HTML);
        $(".new_pub").fadeIn(3000);
      }

    },
    cargar_publicaciones:function(){
      var codigo = $("#id_perfil").val();
      $.ajax({
        url: '<?php echo base_url()?>Home/cargar_publicaciones',
        type: 'POST',
        dataType: 'json',
        data: {
          codigo: codigo
        },
        beforeSend:function(){

        },
        success:function(result){
          if (result.status == 1) {
            $.each(result.publicaciones, function(index, pub) {
              nc_sistema.publicar_publicacion(pub);
            });
          }
        }
      });
    },
    guardarpublicacion:function(){

      var codigo = $("#id").val();
      var descripcion = $("#pub_descripcion").val();
      var privacidad = $("#pub_privacidad") .val();

      $.ajax({
        url: '<?php echo base_url() ?>Home/guardarpublicacion',
        type: 'POST',
        dataType: 'json',
        data: {
          codigo: codigo,
          descripcion: descripcion,
          privacidad: privacidad
        },
        success:function(result){
          if (result.status == 1) {
            nc_sistema.publicar_publicacion(result.publicacion,1);
          }else{

          }
        }
      });
    }
  }
  </script>
</head>
<input type="text" id="id_perfil" value="<?php echo $id ?>">
<body>

  <!-- Fixed navbar -->
  <nav class="navbar navbar-white navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo base_url()?>"><b>DayDay</b></a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="actives"><a href="profile.html">Profile</a></li>
          <li><a href="<?php echo base_url()?>">Home</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              Pages <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li><a href="profile2.html">Profile 2</a></li>
              <li><a href="profile3.html">Profile 3</a></li>
              <li><a href="profile4.html">Profile 4</a></li>
              <li><a href="sidebar_profile.html">Sidebar profile</a></li>
              <li><a href="user_detail.html">User detail</a></li>
              <li><a href="edit_profile.html">Edit profile</a></li>
              <li><a href="about.html">About</a></li>
              <li><a href="friends.html">Friends</a></li>
              <li><a href="friends2.html">Friends 2</a></li>
              <li><a href="profile_wall.html">Profile wall</a></li>
              <li><a href="photos1.html">Photos 1</a></li>
              <li><a href="photos2.html">Photos 2</a></li>
              <li><a href="view_photo.html">View photo</a></li>
              <li><a href="messages1.html">Messages 1</a></li>
              <li><a href="messages2.html">Messages 2</a></li>
              <li><a href="group.html">Group</a></li>
              <li><a href="list_users.html">List users</a></li>
              <li><a href="file_manager.html">File manager</a></li>
              <li><a href="people_directory.html">People directory</a></li>
              <li><a href="list_posts.html">List posts</a></li>
              <li><a href="grid_posts.html">Grid posts</a></li>
              <li><a href="forms.html">Forms</a></li>
              <li><a href="buttons.html">Buttons</a></li>
              <li><a href="error404.html">Error 404</a></li>
              <li><a href="error500.html">Error 500</a></li>
              <li><a href="recover_password.html">Recover password</a></li>
              <li><a href="registration_mail.html">Registration mail</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Begin page content -->
  <div class="container page-content">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="row">
          <div class="col-md-12">
            <div class="bg-picture" style="background-image:url('<?php echo base_url(); ?>application/helpers/img/Cover/cover.jpg')">
              <span class="bg-picture-overlay"></span><!-- overlay -->
              <!-- meta -->
              <div class="box-layout meta bottom">
                <div class="col-md-6 clearfix">
                  <span class="img-wrapper pull-left m-r-15">
                    <img src="<?php echo base_url(); ?>application/helpers/img/Friends/guy-3.jpg" alt="" style="width:64px" class="br-radius">
                  </span>
                  <div class="media-body">
                    <h3 class="text-white mb-2 m-t-10 ellipsis"><?php echo $usuario['nombre']; ?></h3>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="pull-right">
                    <div class="dropdown">
                      <a data-toggle="dropdown" class="dropdown-toggle btn btn-azure" href="#" aria-expanded="false"> Following <span class="caret"></span></a>
                      <ul class="dropdown-menu dropdown-menu-right" role="menu">
                        <li><a href="#">Poke</a></li>
                        <li><a href="#">Private message</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Unfollow</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div><!--/ meta -->
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Nav tabs -->
          <ul class="nav nav-pills nav-pills-custom-minimal custom-minimal-bottom profile-tabs">
            <li role="presentation" class="active"><a href="#timeline" aria-controls="timeline" role="tab" data-toggle="tab">Biografia</a></li>
            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Información</a></li>
            <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Amigos</a></li>
            <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Fotos</a></li>
          </ul>

          <!-- Tab panes -->
          <div class="tab-content">
            <!-- Timeline -->
            <div role="tabpanel" class="tab-pane active" id="timeline">
              <div class="row">
                <div class="col-md-5">
                  <div class="widget">
                    <div class="widget-header">
                      <h3 class="widget-caption">Información</h3>
                    </div>
                    <div class="widget-body bordered-top bordered-sky">
                      <ul class="list-unstyled profile-about margin-none">
                        <li class="padding-v-5">
                          <div class="row">
                            <div class="col-sm-4"><span class="text-muted">Fecha de Nacimiento</span></div>
                            <div class="col-sm-8"><?php $date = new DateTime($fecha=$usuario['fecha_nac']); echo $date->format('Y-m-d'); ?></div>
                          </div>
                        </li>
                        <li class="padding-v-5">
                          <div class="row">
                            <div class="col-sm-4"><span class="text-muted">-</span></div>
                            <div class="col-sm-8">-</div>
                          </div>
                        </li>
                        <li class="padding-v-5">
                          <div class="row">
                            <div class="col-sm-4"><span class="text-muted">Genero</span></div>
                            <div class="col-sm-8">Male</div>
                          </div>
                        </li>
                        <li class="padding-v-5">
                          <div class="row">
                            <div class="col-sm-4"><span class="text-muted">Vive en</span></div>
                            <div class="col-sm-8">San Isidro</div>
                          </div>
                        </li>
                        <li class="padding-v-5">
                          <div class="row">
                            <div class="col-sm-4"><span class="text-muted">Dueño</span></div>
                            <div class="col-sm-8"><?php echo $usuario['dueno'] ?></div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="widget widget-friends">
                    <div class="widget-header">
                      <h3 class="widget-caption">Friends</h3>
                    </div>
                    <div class="widget-body bordered-top  bordered-sky">
                      <div class="row">
                        <div class="col-md-12">
                          <ul class="img-grid" style="margin: 0 auto;">
                            <li>
                              <a href="#">
                                <img src="<?php echo base_url(); ?>application/helpers/img/Friends/guy-6.jpg" alt="image">
                              </a>
                            </li>
                            <li>
                              <a href="#">
                                <img src="<?php echo base_url(); ?>application/helpers/img/Friends/woman-3.jpg" alt="image">
                              </a>
                            </li>
                            <li>
                              <a href="#">
                                <img src="<?php echo base_url(); ?>application/helpers/img/Friends/guy-2.jpg" alt="image">
                              </a>
                            </li>
                            <li>
                              <a href="#">
                                <img src="<?php echo base_url(); ?>application/helpers/img/Friends/guy-9.jpg" alt="image">
                              </a>
                            </li>
                            <li>
                              <a href="#">
                                <img src="<?php echo base_url(); ?>application/helpers/img/Friends/woman-9.jpg" alt="image">
                              </a>
                            </li>
                            <li class="clearfix">
                              <a href="#">
                                <img src="<?php echo base_url(); ?>application/helpers/img/Friends/guy-4.jpg" alt="image">
                              </a>
                            </li>
                            <li>
                              <a href="#">
                                <img src="<?php echo base_url(); ?>application/helpers/img/Friends/guy-1.jpg" alt="image">
                              </a>
                            </li>
                            <li>
                              <a href="#">
                                <img src="<?php echo base_url(); ?>application/helpers/img/Friends/woman-4.jpg" alt="image">
                              </a>
                            </li>
                            <li>
                              <a href="#">
                                <img src="<?php echo base_url(); ?>application/helpers/img/Friends/guy-6.jpg" alt="image">
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="widget">
                    <div class="widget-header">
                      <h3 class="widget-caption">Groups</h3>
                    </div>
                    <div class="widget-body bordered-top bordered-sky">
                      <div class="card">
                        <div class="content">
                          <ul class="list-unstyled team-members">
                            <li>
                              <div class="row">
                                <div class="col-xs-3">
                                  <div class="avatar">
                                    <img src="<?php echo base_url(); ?>application/helpers/img/Likes/likes-1.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                  </div>
                                </div>
                                <div class="col-xs-6">
                                  Github
                                </div>

                                <div class="col-xs-3 text-right">
                                  <btn class="btn btn-sm btn-azure btn-icon"><i class="fa fa-user"></i></btn>
                                </div>
                              </div>
                            </li>
                            <li>
                              <div class="row">
                                <div class="col-xs-3">
                                  <div class="avatar">
                                    <img src="<?php echo base_url(); ?>application/helpers/img/Likes/likes-3.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                  </div>
                                </div>
                                <div class="col-xs-6">Css snippets</div>
                                <div class="col-xs-3 text-right">
                                  <btn class="btn btn-sm btn-azure btn-icon"><i class="fa fa-user"></i></btn>
                                </div>
                              </div>
                            </li>
                            <li>
                              <div class="row">
                                <div class="col-xs-3">
                                  <div class="avatar">
                                    <img src="<?php echo base_url(); ?>application/helpers/img/Likes/likes-2.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                  </div>
                                </div>
                                <div class="col-xs-6">Html Action</div>
                                <div class="col-xs-3 text-right">
                                  <btn class="btn btn-sm btn-azure btn-icon"><i class="fa fa-user"></i></btn>
                                </div>
                              </div>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!--============= timeline posts-->
                <div class="col-md-7">
                  <div class="row">
                    <!-- left posts-->
                    <div class="col-md-12">
                      <div class="row">
                        <div class="col-md-12">
                          <!-- post state form -->
                          <div class="box profile-info n-border-top">
                            <form>
                              <textarea class="form-control input-lg p-text-area" rows="2" placeholder="Whats in your mind today?"></textarea>
                            </form>
                            <div class="box-footer box-form">
                              <button type="button" class="btn btn-azure pull-right">Post</button>
                              <ul class="nav nav-pills">
                                <li><a href="#"><i class="fa fa-map-marker"></i></a></li>
                                <li><a href="#"><i class="fa fa-camera"></i></a></li>
                                <li><a href="#"><i class=" fa fa-film"></i></a></li>
                                <li><a href="#"><i class="fa fa-microphone"></i></a></li>
                              </ul>
                            </div>
                          </div><!-- end post state form -->
                          <div class="" id="publicaciones"></div>
                        </div>
                      </div>
                    </div><!-- end left posts-->
                  </div>
                </div><!-- end timeline posts-->
              </div>
            </div><!-- end timeline -->
            <!-- about -->
            <div role="tabpanel" class="tab-pane" id="profile">
              <div class="row container-contact">
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-lg-5 col-md-6 col-xs-12">
                      <div class="row">
                        <div class="col-xs-3">Correo:</div>
                        <div class="col-xs-9"><?php echo $correo; ?></div>
                        <div class="col-xs-3">Celular:</div>
                        <div class="col-xs-9"><?php echo $usuario['telefono'] ?></div>
                        <div class="col-xs-3">Address:</div>
                        <div class="col-xs-9">Sacramento, CA</div>
                        <div class="col-xs-3">Cumpleaños:</div>
                        <div class="col-xs-9"><?php $date = new DateTime($fecha=$usuario['fecha_nac']); echo $date->format('Y-m-d'); ?></div>
                        <div class="col-xs-3">-:</div>
                        <div class="col-xs-9">-</div>
                        <div class="col-xs-3">Vive en:</div>
                        <div class="col-xs-9">San Isidro</div>
                      </div>
                    </div>
                    <div class="col-lg-7 col-md-6 col-xs-12">
                      <p class="contact-description">
                        Descripcion
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- end about -->
            <!-- friends -->
            <div role="tabpanel" class="tab-pane" id="messages">
              <div class="row">
                <div class="col-md-3">
                  <div class="contact-box center-version">
                    <a href="#">
                      <img alt="image" class="img-circle" src="<?php echo base_url(); ?>application/helpers/img/Friends/woman-1.jpg">
                      <h3 class="m-b-xs"><strong>John Doe</strong></h3>

                      <div class="font-bold">Graphics designer</div>
                    </a>
                    <div class="contact-box-footer">
                      <div class="m-t-xs btn-group">
                        <a href="messages1.html" class="btn btn-xs btn-white"><i class="fa fa-envelope"></i>Send Messages</a>
                        <a class="btn btn-xs btn-white"><i class="fa fa-user-plus"></i> Follow</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="contact-box center-version">
                    <a href="#">
                      <img alt="image" class="img-circle" src="<?php echo base_url(); ?>application/helpers/img/Friends/woman-2.jpg">
                      <h3 class="m-b-xs"><strong>John Doe</strong></h3>

                      <div class="font-bold">Graphics designer</div>
                    </a>
                    <div class="contact-box-footer">
                      <div class="m-t-xs btn-group">
                        <a href="messages1.html" class="btn btn-xs btn-white"><i class="fa fa-envelope"></i>Send Messages</a>
                        <a class="btn btn-xs btn-white"><i class="fa fa-user-plus"></i> Follow</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="contact-box center-version">
                    <a href="#">
                      <img alt="image" class="img-circle" src="<?php echo base_url(); ?>application/helpers/img/Friends/woman-3.jpg">
                      <h3 class="m-b-xs"><strong>John Doe</strong></h3>

                      <div class="font-bold">Graphics designer</div>
                    </a>
                    <div class="contact-box-footer">
                      <div class="m-t-xs btn-group">
                        <a href="messages1.html" class="btn btn-xs btn-white"><i class="fa fa-envelope"></i>Send Messages</a>
                        <a class="btn btn-xs btn-white"><i class="fa fa-user-plus"></i> Follow</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="contact-box center-version">
                    <a href="#">
                      <img alt="image" class="img-circle" src="<?php echo base_url(); ?>application/helpers/img/Friends/guy-1.jpg">
                      <h3 class="m-b-xs"><strong>John Doe</strong></h3>

                      <div class="font-bold">Graphics designer</div>
                    </a>
                    <div class="contact-box-footer">
                      <div class="m-t-xs btn-group">
                        <a href="messages1.html" class="btn btn-xs btn-white"><i class="fa fa-envelope"></i>Send Messages</a>
                        <a class="btn btn-xs btn-white"><i class="fa fa-user-plus"></i> Follow</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="contact-box center-version">
                    <a href="#">
                      <img alt="image" class="img-circle" src="<?php echo base_url(); ?>application/helpers/img/Friends/guy-2.jpg">
                      <h3 class="m-b-xs"><strong>John Doe</strong></h3>

                      <div class="font-bold">Graphics designer</div>
                    </a>
                    <div class="contact-box-footer">
                      <div class="m-t-xs btn-group">
                        <a href="messages1.html" class="btn btn-xs btn-white"><i class="fa fa-envelope"></i>Send Messages</a>
                        <a class="btn btn-xs btn-white"><i class="fa fa-user-plus"></i> Follow</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="contact-box center-version">
                    <a href="#">
                      <img alt="image" class="img-circle" src="<?php echo base_url(); ?>application/helpers/img/Friends/guy-3.jpg">
                      <h3 class="m-b-xs"><strong>John Doe</strong></h3>

                      <div class="font-bold">Graphics designer</div>
                    </a>
                    <div class="contact-box-footer">
                      <div class="m-t-xs btn-group">
                        <a href="messages1.html" class="btn btn-xs btn-white"><i class="fa fa-envelope"></i>Send Messages</a>
                        <a class="btn btn-xs btn-white"><i class="fa fa-user-plus"></i> Follow</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="contact-box center-version">
                    <a href="#">
                      <img alt="image" class="img-circle" src="<?php echo base_url(); ?>application/helpers/img/Friends/guy-5.jpg">
                      <h3 class="m-b-xs"><strong>John Doe</strong></h3>

                      <div class="font-bold">Graphics designer</div>
                    </a>
                    <div class="contact-box-footer">
                      <div class="m-t-xs btn-group">
                        <a href="messages1.html" class="btn btn-xs btn-white"><i class="fa fa-envelope"></i>Send Messages</a>
                        <a class="btn btn-xs btn-white"><i class="fa fa-user-plus"></i> Follow</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="contact-box center-version">
                    <a href="#">
                      <img alt="image" class="img-circle" src="<?php echo base_url(); ?>application/helpers/img/Friends/woman-4.jpg">
                      <h3 class="m-b-xs"><strong>John Doe</strong></h3>

                      <div class="font-bold">Graphics designer</div>
                    </a>
                    <div class="contact-box-footer">
                      <div class="m-t-xs btn-group">
                        <a href="messages1.html" class="btn btn-xs btn-white"><i class="fa fa-envelope"></i>Send Messages</a>
                        <a class="btn btn-xs btn-white"><i class="fa fa-user-plus"></i> Follow</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- end friends -->
            <!-- photos -->
            <div role="tabpanel" class="tab-pane" id="settings">
              <div class="row">
                <div class="col-md-12">
                  <ul class="gallery-list">
                    <li>
                      <div class="image-container">
                        <div class="image">
                          <img src="<?php echo base_url(); ?>application/helpers/img/Photos/1.jpg" alt="">
                        </div>
                        <div class="btn-list">
                          <a href="view_photo.html" class="btn btn-white btn-xs"><i class="fa fa-search-plus"></i></a>
                        </div>
                        <div class="info">
                          <h5>Quisque a eleifend est, quis accumsan metus.</h5>
                          <small class="text-muted">24/08/2015</small>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="image-container">
                        <div class="image">
                          <img src="<?php echo base_url(); ?>application/helpers/img/Photos/2.jpg" alt="">
                        </div>
                        <div class="btn-list">
                          <a href="view_photo.html" class="btn btn-white btn-xs"><i class="fa fa-search-plus"></i></a>
                        </div>
                        <div class="info">
                          <h5>Quisque a eleifend est, quis accumsan metus.</h5>
                          <small class="text-muted">24/08/2015</small>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="image-container">
                        <div class="image">
                          <img src="<?php echo base_url(); ?>application/helpers/img/Photos/3.jpg" alt="">
                        </div>
                        <div class="btn-list">
                          <a href="view_photo.html" class="btn btn-white btn-xs"><i class="fa fa-search-plus"></i></a>
                        </div>
                        <div class="info">
                          <h5>Quisque a eleifend est, quis accumsan metus.</h5>
                          <small class="text-muted">24/08/2015</small>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="image-container">
                        <div class="image">
                          <img src="<?php echo base_url(); ?>application/helpers/img/Photos/4.jpg" alt="">
                        </div>
                        <div class="btn-list">
                          <a href="view_photo.html" class="btn btn-white btn-xs"><i class="fa fa-search-plus"></i></a>
                        </div>
                        <div class="info">
                          <h5>Quisque a eleifend est, quis accumsan metus.</h5>
                          <small class="text-muted">24/08/2015</small>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="image-container">
                        <div class="image">
                          <img src="<?php echo base_url(); ?>application/helpers/img/Photos/5.jpg" alt="">
                        </div>
                        <div class="btn-list">
                          <a href="view_photo.html" class="btn btn-white btn-xs"><i class="fa fa-search-plus"></i></a>
                        </div>
                        <div class="info">
                          <h5>Quisque a eleifend est, quis accumsan metus.</h5>
                          <small class="text-muted">24/08/2015</small>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="image-container">
                        <div class="image">
                          <img src="<?php echo base_url(); ?>application/helpers/img/Photos/6.jpg" alt="">
                        </div>
                        <div class="btn-list">
                          <a href="view_photo.html" class="btn btn-white btn-xs"><i class="fa fa-search-plus"></i></a>
                        </div>
                        <div class="info">
                          <h5>Quisque a eleifend est, quis accumsan metus.</h5>
                          <small class="text-muted">24/08/2015</small>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="image-container">
                        <div class="image">
                          <img src="<?php echo base_url(); ?>application/helpers/img/Photos/7.jpg" alt="">
                        </div>
                        <div class="btn-list">
                          <a href="view_photo.html" class="btn btn-white btn-xs"><i class="fa fa-search-plus"></i></a>
                        </div>
                        <div class="info">
                          <h5>Quisque a eleifend est, quis accumsan metus.</h5>
                          <small class="text-muted">24/08/2015</small>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="image-container">
                        <div class="image">
                          <img src="<?php echo base_url(); ?>application/helpers/img/Photos/8.jpg" alt="">
                        </div>
                        <div class="btn-list">
                          <a href="view_photo.html" class="btn btn-white btn-xs"><i class="fa fa-search-plus"></i></a>
                        </div>
                        <div class="info">
                          <h5>Quisque a eleifend est, quis accumsan metus.</h5>
                          <small class="text-muted">24/08/2015</small>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="image-container">
                        <div class="image">
                          <img src="<?php echo base_url(); ?>application/helpers/img/Photos/9.jpg" alt="">
                        </div>
                        <div class="btn-list">
                          <a href="view_photo.html" class="btn btn-white btn-xs"><i class="fa fa-search-plus"></i></a>
                        </div>
                        <div class="info">
                          <h5>Quisque a eleifend est, quis accumsan metus.</h5>
                          <small class="text-muted">24/08/2015</small>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="image-container">
                        <div class="image">
                          <img src="<?php echo base_url(); ?>application/helpers/img/Photos/1.jpg" alt="">
                        </div>
                        <div class="btn-list">
                          <a href="view_photo.html" class="btn btn-white btn-xs"><i class="fa fa-search-plus"></i></a>
                        </div>
                        <div class="info">
                          <h5>Quisque a eleifend est, quis accumsan metus.</h5>
                          <small class="text-muted">24/08/2015</small>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="image-container">
                        <div class="image">
                          <img src="<?php echo base_url(); ?>application/helpers/img/Photos/2.jpg" alt="">
                        </div>
                        <div class="btn-list">
                          <a href="view_photo.html" class="btn btn-white btn-xs"><i class="fa fa-search-plus"></i></a>
                        </div>
                        <div class="info">
                          <h5>Quisque a eleifend est, quis accumsan metus.</h5>
                          <small class="text-muted">24/08/2015</small>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="image-container">
                        <div class="image">
                          <img src="<?php echo base_url(); ?>application/helpers/img/Photos/3.jpg" alt="">
                        </div>
                        <div class="btn-list">
                          <a href="view_photo.html" class="btn btn-white btn-xs"><i class="fa fa-search-plus"></i></a>
                        </div>
                        <div class="info">
                          <h5>Quisque a eleifend est, quis accumsan metus.</h5>
                          <small class="text-muted">24/08/2015</small>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="image-container">
                        <div class="image">
                          <img src="<?php echo base_url(); ?>application/helpers/img/Photos/4.jpg" alt="">
                        </div>
                        <div class="btn-list">
                          <a href="view_photo.html" class="btn btn-white btn-xs"><i class="fa fa-search-plus"></i></a>
                        </div>
                        <div class="info">
                          <h5>Quisque a eleifend est, quis accumsan metus.</h5>
                          <small class="text-muted">24/08/2015</small>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="image-container">
                        <div class="image">
                          <img src="<?php echo base_url(); ?>application/helpers/img/Photos/5.jpg" alt="">
                        </div>
                        <div class="btn-list">
                          <a href="view_photo.html" class="btn btn-white btn-xs"><i class="fa fa-search-plus"></i></a>
                        </div>
                        <div class="info">
                          <h5>Quisque a eleifend est, quis accumsan metus.</h5>
                          <small class="text-muted">24/08/2015</small>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="image-container">
                        <div class="image">
                          <img src="<?php echo base_url(); ?>application/helpers/img/Photos/6.jpg" alt="">
                        </div>
                        <div class="btn-list">
                          <a href="view_photo.html" class="btn btn-white btn-xs"><i class="fa fa-search-plus"></i></a>
                        </div>
                        <div class="info">
                          <h5>Quisque a eleifend est, quis accumsan metus.</h5>
                          <small class="text-muted">24/08/2015</small>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div><!-- end photos -->
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="footer">
    <div class="container">
      <p class="text-muted"> Copyright &copy; Company - All rights reserved </p>
    </div>
  </footer>
</body>

<!-- Mirrored from demos.bootdey.com/dayday/profile4.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Aug 2017 15:44:25 GMT -->
</html>
