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
              <a class="btn btn-success" href="/pembelian/tambah">Tambah Data Pembelian</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Nama Baku</th>
                  <th>Kuantitas</th>
                  <th>Kwitansi</th>
                  <th>Status Pembayaran</th>
                  <th>Aksi</th>
                </tr> 
                </thead>
                <tbody>
                  @php $no=1; @endphp
                  @foreach($pemb as $s)
                <tr>
                  
                  <td>{{$no++}}</td>
                  <td>{{$s->nama_baku}}</td>
                  <td>{{$s->kuantitas}}</td>
                  <td><img src="/images/{{$s->kwitansi}}" width="50%"></td>
                  <td>@if($s->status_pembayaran == 1) 
                                    <span class="badge badge-danger">Sudah</span>
                                @else
                                    <span class="badge badge-success">Belum</span> 
                                @endif</td>
                  <td><a class="btn btn-block btn-primary" href="/pembelian/edit/{{ $s->id_pemb }}">Edit</a><a class="btn btn-block btn-warning" href="/pembelian/kirim/{{ $s->id_pemb }}">Kirim</a></td>
                  
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
  