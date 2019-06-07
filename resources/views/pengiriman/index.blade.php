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
              <!-- <a class="btn btn-success" href="/pembelian/tambah">Tambah Data Pembelian</a> -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>ID Pembelian</th>    
                  <th>TGL Transaksi</th>
                  <th>Operator</th>
                  <th>Suplier</th>
                  <th>Aksi</th>
                </tr> 
                </thead>
                <tbody>
                  @php $no=1; @endphp
                  @foreach($pengiriman as $s)
                <tr>
                  
                  <td>{{$no++}}</td>
                  <td>{{$s->id_pemb}}</td>
                  <td>{{$s->tgl_transaksi}}</td>
                  <td>{{$s->operator}}</td>
                  <td>{{$s->supplier}}</td>
                  <td><a class="btn btn-block btn-primary" href="/pengiriman/track/{{ $s->id_pemb }}">Track</a>
                  
                </tr>
                @endforeach
              </tbody>
          </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  @endsection
  