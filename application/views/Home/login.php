<html lang="en"><head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">
  <link rel="icon" href="<?php echo base_url(); ?>application/helpers/img/favicon.png">
  <title>DayDay</title>
  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url(); ?>application/helpers/bootstrap.3.3.6/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>application/helpers/font-awesome.4.6.1/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>application/helpers/assets/css/animate.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>application/helpers/assets/css/timeline.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>application/helpers/assets/css/login_register.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>application/helpers/assets/css/forms.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>application/helpers/assets/css/buttons.css" rel="stylesheet">
  <script async="" src="https://www.google-analytics.com/analytics.js"></script>
  <script src="<?php echo base_url(); ?>application/helpers/assets/js/jquery.1.11.1.min.js"></script>
  <script src="<?php echo base_url(); ?>application/helpers/bootstrap.3.3.6/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>application/helpers/bootstrap.3.3.6/js/notify.js"></script>
  <script src="<?php echo base_url(); ?>application/helpers/assets/js/custom.js"></script>
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script type="text/javascript">
  $(document).ready(function () {
    $.notify.defaults({ className: "success" });

    $( "#login_form" ).submit(function( event ) {
      event.preventDefault();
      nc_sistema.login_usuario();
    });

    $( "#registro" ).submit(function( event ) {
      event.preventDefault();
      nc_sistema.registro_usuario();
    });

  });

  nc_sistema =
  {

    limpiar_campos:function(){
      $('#correo').val("");
      $('#pass').val("");
      $('#nombre').val("");
      $('#fecha_nac').val("");
      $('#sexo').val("");
      $('#fono').val("");
      $('#raza').val("");
      $('#dueno').val("");
    },

    login_usuario:function(){
      var correo = $("#email").val();
      var pass = $("#pass").val();
      $.ajax({
        url:'<?php echo base_url(); ?>Usuario/validar_usuario',
        type: 'post',
        dataType: 'json',
        data: {
          correo: correo,
          pass: pass
        },
        success:function(result){
          if (result.status == 1) {
            document.location.href= '<?php echo base_url() ?>Home';
          }
          else{
            $.notify("correo o contraseña incorrecta","error");
          }
        }
      });
    },

    registro_usuario:function(){
      var correo = $('#correo').val();
      var pass = $('#pass').val();
      var nombre = $('#nombre').val();
      var fecha_nac = $('#fecha_nac').val();
      var sexo = $('#sexo').val();
      var fono = $('#fono').val();
      var raza = $('#raza').val();
      var dueno = $('#dueno').val();

      $.ajax({
        url:'<?php echo base_url(); ?>Usuariio/registro_usuario',
        type: 'post',
        dataType: 'json',
        data:
        {
          correo : correo,
          pass : pass,
          nombre : nombre,
          fecha_nac : fecha_nac,
          sexo : sexo,
          fono : fono,
          raza : raza,
          dueno : dueno
        },
        beforeSend:function(){

        },
        success:function(result){
          if (result.status == 0) {
            Materialize.toast('Se produjo un error', 4000);
          }
          if (result.status == 1) {
            Materialize.toast('Registro exitoso', 4000);
            nc_sistema.limpiar_campos();
          }
          if (result.status == 2) {
            Materialize.toast('duplicado', 4000);
          }

        }
      });
    }
  }

  </script>
</head>
<body>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-fixed-top navbar-transparent" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="<?php echo base_url(); ?>">Day-Day</a>
      </div>
    </div>
  </nav>
  <div class="wrapper">
    <div class="parallax filter-black">
      <div class="parallax-image"></div>
      <div class="small-info">
        <div class="col-sm-10 col-sm-push-1 col-md-6 col-md-push-3 col-lg-6 col-lg-push-3">
          <div class="card-group animated flipInX">
            <div class="card">
              <div class="card-block">
                <div class="center">
                  <h4 class="m-b-0"><span class="icon-text">Iniciar sesión</span></h4>
                  <p class="text-muted">Acceder a tu cuenta</p>
                </div>
                <form id="login_form">
                  <div class="form-group">
                    <input id="email" type="email" class="form-control" placeholder="Correo electrónico">
                  </div>
                  <div class="form-group">
                    <input id="pass" type="password" class="form-control" placeholder="Contraseña">
                    <a href="#" class="pull-xs-right">
                      <small>¿Has olvidado tu contraseña?</small>
                    </a>
                    <div class="clearfix"></div>
                  </div>
                  <div class="center">
                    <button class="btn  btn-azure" type="submit" name="button">Entrar</button>
                  </div>
                </form>
              </div>
            </div>
            <div class="card">
              <div class="card-block center">
                <h4 class="m-b-0">
                  <span class="icon-text">Regístrate</span>
                </h4>
                <p class="text-muted">Crea una cuenta nueva</p>
                <form action="index.html" method="get">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Nombre Completo">
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control" placeholder="Correo">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" placeholder="Contraseña">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" placeholder="Confirma Contraseña">
                  </div>
                  <button type="submit" class="btn btn-azure">Registrar</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer class="footer">
      <div class="container">
        <p class="text-muted"> Copyright © Company - All rights reserved </p>
      </div>
    </footer>
    <script type="text/javascript">
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-49755460-1', 'auto', {'allowLinker': true});
    ga('require', 'linker');
    ga('linker:autoLink', ['bootdey.com','www.bootdey.com','demos.bootdey.com'] );
    ga('send', 'pageview');
    </script>
  </div>


</body></html>
