@extends('base')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Pembelian
      </h1>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Update Pembelian</h3>
            </div>
            <div class="box-body">
              <form role="form" action="/pembelian/update" method="post">
                {{ csrf_field() }}
                <!-- text input -->
                @foreach ($pemb as $p)
                <input type="text" name="id" value="{{$p->id_pemb}}" hidden="">
                <div class="form-group">
                  <label>Nama Bahan</label>
                  <input type="text" class="form-control" placeholder="Masukkan Stok" value="{{$p->nama_baku}}" disabled="">
                  <input type="text" name="id_baku" value="{{$p->id_baku}}" hidden="">
                </div>
                <div class="form-group">
                  <label>Kuantitas</label>
                  <input type="text" name="kuantitas" class="form-control" placeholder="Masukkan Stok" value="{{$p->kuantitas}}">
                </div>
                <div class="form-group">
                  <label>Status Pembayaran</label><br/>
                  <label>Belum</label>
                  <input type="radio" name="status_pembayaran" class="flat-red" value="0">
                  <label>Lunas</label>
                  <input type="radio" name="status_pembayaran" class="flat-red" value="1">
                </div>  
          </div>
          <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
              @endforeach
            </form>  
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  @endsection