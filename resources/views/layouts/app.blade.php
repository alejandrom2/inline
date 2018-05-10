<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title> Now UI Dashboard PRO by Creative Tim</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href={{asset("/css/bootstrap.min.css")}} rel="stylesheet" />
  <link href={{asset("/css/now-ui-dashboard.css")}} rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href={{asset("/demo/demo.css")}} rel="stylesheet" />
</head>

<body>
  <div class="wrapper ">
    <div class="sidebar" data-color="blue">
      <div class="logo">
        <a href="#" class="simple-text logo-normal">
          Projects Inline
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="active">
            <a href="../examples/dashboard.html">
              <i class="fa fa-list-ul"></i>
              <p>Tasks</p>
            </a>
          </li>
          <li>
            <a href="../examples/dashboard.html">
              <i class="fa fa-th-large"></i>
              <p>Deliverables</p>
            </a>
          </li>
          <li>
            <a href="../examples/dashboard.html">
              <i class="fa fa-inbox"></i>
              <p>Action Items</p>
            </a>
          </li>
          <li>
            <a href="../examples/dashboard.html">
              <i class="fa fa-pencil-alt"></i>
              <p>Changes</p>
            </a>
          </li>
          <li>
            <a href="../examples/dashboard.html">
              <i class="fa fa-exclamation-triangle"></i>
              <p>Issues</p>
            </a>
          </li>
          <li>
            <a href="../examples/dashboard.html">
              <i class="fa fa-users"></i>
              <p>Resources</p>
            </a>
          </li>
          <li>
            <a href="../examples/dashboard.html">
              <i class="fa fa-comments"></i>
              <p>Decisions</p>
            </a>
          </li>
          <li>
            <a href="../examples/dashboard.html">
              <i class="fa fa-asterisk"></i>
              <p>Risks</p>
            </a>
          </li>
          <li>
            <a href="../examples/dashboard.html">
              <i class="fa fa-file-alt"></i>
              <p>Reference Documents</p>
            </a>
          </li>
          <li>
            <a href="../examples/dashboard.html">
              <i class="fa fa-handshake"></i>
              <p>Requirements</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
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
            <a class="navbar-brand" href="#pablo">Regular Forms</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <span class="input-group-addon">
                  <i class="now-ui-icons ui-1_zoom-bold"></i>
                </span>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  @auth
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                  @else
                  <a class="dropdown-item" href="{{ route('login') }}">Login</a>
                  <a class="dropdown-item" href="{{ route('register') }}">Register</a>
                  @endauth
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        @yield('content')
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <nav>
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
                  Creative Tim
                </a>
              </li>
              <li>
                <a href="http://presentation.creative-tim.com">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com">
                  Blog
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, Designed by
            <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by
            <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
          </div>
        </div>
      </footer>
    </div>
  </div>
</body>
<!--   Core JS Files   -->
<script src={{asset("/js/core/jquery.min.js")}}></script>
<script src={{asset("/js/core/popper.min.js")}}></script>
<script src={{asset("/js/core/bootstrap.min.js")}}></script>
<script src={{asset("/js/plugins/perfect-scrollbar.jquery.min.js")}}></script>
<script src={{asset("/js/plugins/moment.min.js")}}></script>
<script src={{asset("/js/plugins/bootstrap-switch.js")}}></script>
<script src={{asset("/js/plugins/sweetalert2.min.js")}}></script>
<script src={{asset("/js/plugins/jquery.validate.min.js")}}></script>
<script src={{asset("/js/plugins/jquery.bootstrap-wizard.js")}}></script>
<script src={{asset("/js/plugins/bootstrap-selectpicker.js")}}></script>
<script src={{asset("/js/plugins/bootstrap-datetimepicker.js")}}></script>
<script src={{asset("/js/plugins/jquery.dataTables.min.js")}}></script>
<script src={{asset("/js/plugins/bootstrap-tagsinput.js")}}></script>
<script src={{asset("/js/plugins/jasny-bootstrap.min.js")}}></script>
<script src={{asset("/js/plugins/fullcalendar.min.js")}}></script>
<script src={{asset("/js/plugins/jquery-jvectormap.js")}}></script>
<script src={{asset("/js/plugins/nouislider.min.js")}}></script>
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<script src={{asset("/js/plugins/chartjs.min.js")}}></script>
<script src={{asset("/js/plugins/bootstrap-notify.js")}}></script>
<script src={{asset("/js/now-ui-dashboard.js")}}></script>
<script src={{asset("/demo/demo.js")}}></script>
<script>
  $(document).ready(function() {
    // Javascript method's body can be found in assets/js/demos.js
    demo.initDashboardPageCharts();

    demo.initVectorMap();

  });
</script>
</html>