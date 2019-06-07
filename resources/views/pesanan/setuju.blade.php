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
              <span class="hidden-xs">{{Session::get('name')}}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  {{Session::get('name')}}
                  <small>Selamat datang</small>
                </p>
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="/logout" class="btn btn-default btn-flat">Sign out</a>
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
        Data Bahan Baku
      </h1>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tambah Data Bahan Baku</h3>
            </div>
            <div class="box-body">
              @if (count($errors) > 0)
              <div class="alert alert-danger">
              Upload Validation Error<br><br>
              <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
              </ul>
              </div>
                @endif
                @if ($message = Session::get('success'))
              <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
           <strong>{{ $message }}</strong>
            </div>
              <img src="/images/{{ Session::get('path') }}" width="300" />
              @endif
              <form role="form" method="POST" action="/pesanan/update" enctype="multipart/form-data">
              @foreach ($baru as $b)
              
                {{ csrf_field() }}
                <!-- text input -->
                <div class="form-group">
                  <input type="text" name="id_baku" value="{{$b->id_baku}}" hidden="">
                  <input type="text" name="id" value="{{$b->id}}" hidden="">
                  <label>Nama Bahan</label>
                  <input type="text" name="nama_baku" class="form-control" placeholder="Masukkan Nama Bahan" value="{{$b->nama_baku}}" disabled="">
                </div>
                <div class="form-group">
                  <label>Stok Saat Ini</label>
                  <input type="text" name="stok" class="form-control" placeholder="Masukkan Stok" value="{{$b->stok}}" disabled="">
                  <input type="text" name="stok" placeholder="Masukkan Stok" value="{{$b->stok}}" hidden="">
                </div>
                <div class="form-group">
                  <label>Satuan</label>
                  <input type="text" name="satuan" class="form-control" placeholder="Masukkan Satuan" value="{{$b->satuan}}" disabled="">
                  <input type="text" name="satuan" placeholder="Masukkan Satuan" value="{{$b->satuan}}" hidden="">
                </div>
                <div class="form-group">
                  <label>Upload Gambar Kwitansi</label>
                  <input type="file" name="select_file"/>
                </div>
                <div class="form-group">
                  <label>Tambah Stok</label>
                  <input type="text" name="kuantitas" class="form-control" placeholder="Masukkan Stok" value="{{$b->kuantitas}}" >
                </div>
          </div>
          <div class="box-footer">
                <input type="submit" name="upload" id="upload" class="btn btn-primary" value="Setuju">
              </div>
            </form>  
            @endforeach
            <span id="uploaded_image"></span>
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
