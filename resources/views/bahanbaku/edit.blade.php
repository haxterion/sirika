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
              <form role="form" action="/bahanbaku/update" method="post">
                {{ csrf_field() }}
                <!-- text input -->
                <div class="form-group">
                  <input type="text" name="id" value="{{$b->id_baku}}" hidden="">
                  <label>Nama Bahan</label>
                  <input type="text" name="nama_baku" class="form-control" placeholder="Masukkan Nama Bahan" value="{{$b->nama_baku}}">
                </div>
                <div class="form-group">
                  <label>Stok</label>
                  <input type="text" name="stok" class="form-control" placeholder="Masukkan Stok" value="{{$b->stok}}">
                </div>
                <div class="form-group">
                  <label>Satuan</label>
                  <input type="text" name="satuan" class="form-control" placeholder="Masukkan Satuan" value="{{$b->stok}}">
                </div>
                <div class="form-group">
                  <label>Harga</label>
                  <input type="text" name="hrg_beli" class="form-control" placeholder="Masukkan Harga" value="{{$b->hrg_beli}}">
                </div>
                <div class="form-group">
                  <label>Supplier</label>
                  <select name="id_sup" class="form-control">
                    <option>Pilih Supplier</option>
                    @foreach ($sup as $s)
                    <option value="{{$s->id_sup}}">{{$s->nama_sup}}</option>
                    @endforeach
                  </select>
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