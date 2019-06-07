<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Supplier</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{url('assets/bower_components/select2/dist/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{url('assets/plugins/iCheck/all.css')}}">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{url('assets/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{url('assets/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{url('assets/bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{url('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('assets/dist/css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{url('assets/dist/css/skins/_all-skins.min.css')}}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        <style>
            #map {
                height: 100%;
            }
            html, body {
                height: 100%;
                margin: 0;
                padding: 0;
            }
        </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>SI</b>RIKA</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>SI</b>RIKA</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
          <li>
          <a href="/">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a></li>
          <li>
          <a href="/supplier">
            <i class="fa fa-truck"></i> <span>Supplier</span>
          </a></li>
          <li>
          <a href="/bahanbaku">
            <i class="fa fa-bank"></i> <span>Bahan Baku</span>
          </a></li>
          <li>
          <a href="/pesanan">
            <i class="fa fa-commenting-o"></i> <span>Pesanan</span>
          </a></li>
          <li>
          <a href="/pembelian">
            <i class="fa fa-money"></i> <span>Pembelian</span>
          </a></li>
          <li>
          <a href="/pengiriman">
            <i class="fa fa-plane"></i> <span>Pengiriman</span>
          </a></li>
        <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Pengiriman
      </h1>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Pembelian</h3>

              <div class="box-body no-padding">
              <table class="table table-striped">
                <tr>
                  <th>ID Baku</th>
                  <th style="width: 40px">Tgl Transaksi</th>
                </tr>

                  @foreach($pengiriman as $p)
                <tr>
                  <td>{{$p->id_pemb}}</td>
                  <td>{{$p->tgl_transaksi}}</td>
                  
                </tr>
                @endforeach
              </table>
            </div>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="box">
            <div id="map"></div>
          </div>
        </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
 
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>
  <script src="{{url('assets/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{url('assets/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- DataTables -->
<script src="{{url('assets/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{url('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<!-- SlimScroll -->
<script src="{{url('assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{url('assets/plugins/iCheck/icheck.min.js')}}"></script>
<!-- FastClick -->
<script src="{{url('assets/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{url('assets/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{url('assets/dist/js/demo.js')}}"></script>
<script src="{{url('assets/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Firebase -->
        <script src="https://www.gstatic.com/firebasejs/4.12.1/firebase.js"></script>
        <script>
            // Replace your Configuration here..
            var config = {
                apiKey: "AIzaSyCbi7jUMJpEFN0RZ3GHXemeECXQ0wXY1-M",
  authDomain: "supirsirent.firebaseapp.com",
  databaseURL: "https://supirsirent.firebaseio.com",
  projectId: "supirsirent",
  storageBucket: "supirsirent.appspot.com",
  messagingSenderId: "79257737129",
  appId: "1:79257737129:web:54c93edb3fd02978"
            };
            firebase.initializeApp(config);
        </script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
            // counter for online cars...
            var cars_count = 0;
            // markers array to store all the markers, so that we could remove marker when any car goes offline and its data will be remove from realtime database...
            var markers = [];
            var map;
            function initMap() { // Google Map Initialization... 
                map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 9,
                    center: new google.maps.LatLng(31.52011, 74.368604),
                    mapTypeId: 'terrain'
                });
            }
            // This Function will create a car icon with angle and add/display that marker on the map
            function AddCar(data) {
                var icon = { // car icon
                    path: 'M29.395,0H17.636c-3.117,0-5.643,3.467-5.643,6.584v34.804c0,3.116,2.526,5.644,5.643,5.644h11.759   c3.116,0,5.644-2.527,5.644-5.644V6.584C35.037,3.467,32.511,0,29.395,0z M34.05,14.188v11.665l-2.729,0.351v-4.806L34.05,14.188z    M32.618,10.773c-1.016,3.9-2.219,8.51-2.219,8.51H16.631l-2.222-8.51C14.41,10.773,23.293,7.755,32.618,10.773z M15.741,21.713   v4.492l-2.73-0.349V14.502L15.741,21.713z M13.011,37.938V27.579l2.73,0.343v8.196L13.011,37.938z M14.568,40.882l2.218-3.336   h13.771l2.219,3.336H14.568z M31.321,35.805v-7.872l2.729-0.355v10.048L31.321,35.805',
                    scale: 0.4,
                    fillColor: "#427af4", //<-- Car Color, you can change it 
                    fillOpacity: 1,
                    strokeWeight: 1,
                    anchor: new google.maps.Point(0, 5),
                    rotation: data.val().angle //<-- Car angle
                };
                var uluru = { lat: data.val().latitude, lng: data.val().longitude };
                var marker = new google.maps.Marker({
                    position: uluru,
                    icon: icon,
                    map: map
                });
                map.panTo(uluru);
                markers[data.key] = marker; // add marker in the markers array...
                document.getElementById("cars").innerHTML = cars_count;

            }
            // get firebase database reference...
            var cars_Ref = firebase.database().ref('/');
            // this event will be triggered when a new object will be added in the database...
            cars_Ref.on('child_added', function (data) {
                cars_count++;
                AddCar(data);
            });
            // this event will be triggered on location change of any car...
            cars_Ref.on('child_changed', function (data) {
                markers[data.key].setMap(null);
                AddCar(data);
            });
            // If any car goes offline then this event will get triggered and we'll remove the marker of that car...  
            cars_Ref.on('child_removed', function (data) {
                markers[data.key].setMap(null);
                cars_count--;
                document.getElementById("cars").innerHTML = cars_count;
            });
        </script>

        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBvFdDDBdLsqO1NYulYBnoSDQWDZ1i1KCA&callback=initMap">
        </script>
<!-- page script -->
<script>
  $(function () {
    $('.select2').select2()
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
     //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })  
  })
</script>
</body>
</html>