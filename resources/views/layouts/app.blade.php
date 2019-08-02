<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>iPing Data Labs - @yield('title')</title>
    <link rel="shortcut icon" href="new-logo.png" type="image/x-icon">
  </head>
<body class="app sidebar-mini">
    <header class="app-header"><a class="app-header__logo" href="{{url('home')}}" style="background-color: white;">
            <img src="new-logo.png" width="77px"></a>
            <a class="app-sidebar__toggle" href="#" data-toggle="sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
      
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li>
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                     <i class="fa fa-sign-out fa-lg"></i> Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
          </ul>
        </li>
      </ul>
    </header>
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <br/>
    <aside class="app-sidebar">
      <ul class="app-menu">
        <li><a class="app-menu__item <?php if(Request::is('home'))  { ?> active <?php } ?>" href="home"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        <li><a class="app-menu__item <?php if(Request::is('uplaod_quations'))  { ?> active <?php } ?>" href="uplaod_quations"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Upload Question</span></a></li>
        <li><a class="app-menu__item <?php if(Request::is('stud_list'))  { ?> active <?php } ?>" href="stud_list"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Register Student List</span></a></li>
        <li><a class="app-menu__item <?php if(Request::is('stud_mark'))  { ?> active <?php } ?>" href="stud_mark"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Student Marks Details</span></a></li>
        <li><a class="app-menu__item <?php if(Request::is('note'))  { ?> active <?php } ?>" href="note"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Note</span></a></li>
        <li><a class="app-menu__item <?php if(Request::is('program-note'))  { ?> active <?php } ?>" href="program-note"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Program Note</span></a></li>
        <li><a class="app-menu__item <?php if(Request::is('progaming_quetions'))  { ?> active <?php } ?>" href="progaming_quetions"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Programming Questions</span></a></li>
        <li><a class="app-menu__item <?php if(Request::is('activation_link'))  { ?> active <?php } ?>" href="activation_link"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Test Activation</span></a></li>
      </ul>
    </aside>

            @yield('content')
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="js/plugins/chart.js"></script>
   <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
    <script type="text/javascript" src="js/plugins/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="js/plugins/select2.min.js"></script>
    <script type="text/javascript" src="js/plugins/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('div.alert').delay(3000).slideUp(300);
        });
      $('#sl').click(function(){
      	$('#tl').loadingBtn();
      	$('#tb').loadingBtn({ text : "Signing In"});
      });
      
      $('#el').click(function(){
      	$('#tl').loadingBtnComplete();
      	$('#tb').loadingBtnComplete({ html : "Sign In"});
      });
      
      $('.demoDate').datepicker({
      	format: "dd/mm/yyyy",
      	autoclose: true,
      	todayHighlight: true
      });
      
      $('#demoSelect').select2();
    </script>
  </body>
</html>
