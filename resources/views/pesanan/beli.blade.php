@extends('base')
@section('content')
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
            	@foreach($pesanan as $p)
              <form role="form" action="/pesanan/kirim" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <!-- text input -->
                <div class="form-group">
                  <label>Nama Bahan</label>
                  <input type="text" class="form-control" placeholder="Masukkan Nama Bahan" value="{{$p->nama_baku}}" disabled="">
                  <input type="text" name="id" value="{{$p->id}}" hidden="">
                  <input type="text" name="id_baku" value="{{$p->id_baku}}" hidden="" >
                </div>
                <div class="form-group">
                  <label>Kuantitas</label>
                  <input type="text" name="kuantitas" class="form-control" placeholder="Masukkan Kuantitas" value="{{$p->kuantitas}}">
                </div>
                <div class="form-group">
                  <label>Keterangan</label>
                  <textarea name="keterangan" class="form-control"></textarea>
                </div>
          </div>
          <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form> 
            @endforeach 
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  @endsection
  