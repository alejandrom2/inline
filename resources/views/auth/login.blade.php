<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title> Login Page</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <link href={{asset("css/now-ui-dashboard.css")}} rel="stylesheet" />
  <link href={{asset("demo/demo.css")}} rel="stylesheet" />
</head>
<body class=" sidebar-mini">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute bg-primary fixed-top">
    <div class="container-fluid">
      <div class="navbar-wrapper">
        <div class="navbar-toggle">
          <button type="button" class="navbar-toggler">
            <span class="navbar-toggler-bar bar1"></span>
            <span class="navbar-toggler-bar bar2"></span>
            <span class="navbar-toggler-bar bar3"></span>
          </button>
        </div>
        <a class="navbar-brand" href="#">Login Page</a>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-bar navbar-kebab"></span>
        <span class="navbar-toggler-bar navbar-kebab"></span>
        <span class="navbar-toggler-bar navbar-kebab"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navigation">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="{{url('/')}}" class="nav-link">
              <i class="now-ui-icons design_app"></i> Dashboard
            </a>
          </li>
          <li class="nav-item ">
            <a href="{{url('register')}}" class="nav-link">
              <i class="now-ui-icons tech_mobile"></i> Register
            </a>
          </li>
          <li class="nav-item  active ">
            <a href="{{url('login')}}" class="nav-link">
              <i class="now-ui-icons users_circle-08"></i> Login
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="wrapper wrapper-full-page ">
    <div class="full-page login-page section-image" filter-color="black" data-image={{asset('img/background.jpg')}}>
      <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
      <div class="content">
        <div class="container">
          <div class="col-md-4 ml-auto mr-auto">
            {{Form::open()}}
              <div class="card card-login card-plain">
                <div class="card-header ">
                  <div class="logo-container">
                    <img src="../../assets/img/now-logo.png" alt="">
                  </div>
                </div>
                <div class="card-body ">
                  <div class="input-group no-border form-control-lg">
                    <span class="input-group-addon">
                      <i class="now-ui-icons users_circle-08"></i>
                    </span>
                    {{Form::text('email','',['class'=>"form-control", 'placeholder'=>"Email..."])}}
                  </div>
                  <div class="input-group no-border form-control-lg">
                    <span class="input-group-addon">
                      <i class="now-ui-icons objects_key-25"></i>
                    </span>
                    {{Form::password('password',['placeholder'=>"Password...", 'class'=>"form-control"])}}
                  </div>
                </div>
                <div class="card-footer ">
                  {{ Form::submit('Login', ['class'=>"btn btn-primary btn-round btn-lg btn-block mb-3"]) }}
                  <div class="pull-left">
                    <h6>
                      <a href="{{url('register')}}" class="link footer-link">Create Account</a>
                    </h6>
                  </div>
                </div>
              </div>
            {{Form::close()}}
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<!--   Core JS Files   -->
<script src={{asset("js/core/jquery.min.js")}}></script>
<script src={{asset("js/core/popper.min.js")}}></script>
<script src={{asset("js/core/bootstrap.min.js")}}></script>
<script src={{asset("js/plugins/perfect-scrollbar.jquery.min.js")}}></script>
<script src={{asset("js/plugins/moment.min.js")}}></script>
<script src={{asset("js/plugins/bootstrap-switch.js")}}></script>
<script src={{asset("js/plugins/sweetalert2.min.js")}}></script>
<script src={{asset("js/plugins/jquery.validate.min.js")}}></script>
<script src={{asset("js/plugins/jquery.bootstrap-wizard.js")}}></script>
<script src={{asset("js/plugins/bootstrap-selectpicker.js")}}></script>
<script src={{asset("js/plugins/bootstrap-datetimepicker.js")}}></script>
<script src={{asset("js/plugins/jquery.dataTables.min.js")}}></script>
<script src={{asset("js/plugins/bootstrap-tagsinput.js")}}></script>
<script src={{asset("js/plugins/jasny-bootstrap.min.js")}}></script>
<script src={{asset("js/plugins/fullcalendar.min.js")}}></script>
<script src={{asset("js/plugins/jquery-jvectormap.js")}}></script>
<script src={{asset("js/plugins/nouislider.min.js")}}></script>
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<script src={{asset("js/plugins/chartjs.min.js")}}></script>
<script src={{asset("js/plugins/bootstrap-notify.js")}}></script>
<script src={{asset("js/now-ui-dashboard.js")}}></script>
<script src={{asset("demo/demo.js")}}></script>
<script>
  $(document).ready(function() {
    demo.checkFullPageBackgroundImage();
  });
</script>
@if ($errors->any())
  <script>
    $(document).ready(function() {
      var message = "";
      @foreach ($errors->all() as $error)
       message += "<p>{{ $error }}</p>"
      @endforeach
    demo.showNotification('top','right',message,'danger');
    });
  </script>
@endif
</html>

