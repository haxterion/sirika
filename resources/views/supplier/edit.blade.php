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
              @foreach ($supplier as $s)
              <form role="form" action="/supplier/update" method="post">
                {{ csrf_field() }}
                <!-- text input -->
                <input type="hidden" name="id" value="{{ $s->id_sup }}"> <br/>
                <div class="form-group">
                  <label>Nama Supplier</label>
                  <input type="text" name="nama_sup" class="form-control" placeholder="Masukkan Nama Supplier" value="{{$s->nama_sup}}">
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat" value="{{$s->alamat}}">
                </div>
                <div class="form-group">
                  <label>No. Hp</label>
                  <input type="text" name="no_hp" class="form-control" placeholder="Masukkan No HP" value="{{$s->no_hp}}">
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