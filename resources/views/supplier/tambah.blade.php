@extends('base')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Supplier
      </h1>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tambah Data Supplier</h3>
            </div>
            <div class="box-body">
              <form role="form" action="/supplier/store" method="post">
                {{ csrf_field() }}
                <!-- text input -->
                <div class="form-group">
                  <label>Nama Supplier</label>
                  <input type="text" name="nama_sup" class="form-control" placeholder="Masukkan Nama Supplier">
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat">
                </div>
                <div class="form-group">
                  <label>No. Hp</label>
                  <input type="text" name="no_hp" class="form-control" placeholder="Masukkan No HP">
                </div>
          </div>
          <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>  
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  @endsection