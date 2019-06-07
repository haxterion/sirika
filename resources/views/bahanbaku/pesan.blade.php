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
              @foreach ($bahanbaku as $b)
              <form role="form" action="/bahanbaku/kirim" method="post">
                {{ csrf_field() }}
                <!-- text input -->
                <div class="form-group">
                  <input type="text" name="id_baku" value="{{$b->id_baku}}" hidden="">

                  <label>Kuantitas</label>
                  <input type="text" name="kuantitas" class="form-control" placeholder="Masukkan Banyak Barang">
                </div>
                <div class="form-group">
                  <label>Stok</label>
                  <input type="text" name="stok" class="form-control" value="{{$b->stok}}" readonly="">
                </div>
                <div class="form-group">
                  <label>Keterangan</label>
                  <textarea name="keterangan" class="form-control" placeholder="Masukkan Keterangan"></textarea>
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