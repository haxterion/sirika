@extends('base')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Laporan Bahan Baku
      </h1>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>ID Baku</th>
                  <th>Harga</th>
                  <th>Nama Suplier</th>
                  <th>Aksi</th>
                </tr> 
                </thead>
                <tbody>
                  @php $no=1; @endphp
                  @foreach($sup as $s)
                <tr>
                  
                  <td>{{$no++}}</td>
                  <td>{{$s->id_baku}}</td>
                  <td>{{$s->hrg_beli}}</td>
                  <td>{{$s->nama_sup}}</td>
                  <td><a class="btn btn-block btn-primary" href="/lapbaku/edit/{{ $s->id_lapbaku }}">Edit</a><a class="btn btn-block btn-danger" href="/lapbaku/hapus/{{ $s->id_lapbaku }}">Hapus</a></td>
                  
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
