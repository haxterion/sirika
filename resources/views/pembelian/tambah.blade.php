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
              <h3 class="box-title">Tambah Data Bahan Baku</h3>
            </div>
            <div class="box-body">
              <form role="form" action="/pembelian/store" method="post">
                {{ csrf_field() }}
                <!-- text input -->
                <div class="form-group">
                  <label>Nama Bahan</label>
                  
                  <select name="id_baku" class="form-control select2" style="width: 100%;">
                  <option>Pilih Bahan Baku</option>
                  @foreach ($bahanbaku as $b)
                  <option value="{{$b->id_baku}}">{{$b->nama_baku}}</option>
                  @endforeach
                </select>
                </div>
                <div class="form-group">
                  <label>Kuantitas</label>
                  <input type="text" name="kuantitas" class="form-control" placeholder="Masukkan Stok">
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
