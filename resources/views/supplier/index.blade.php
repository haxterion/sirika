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
              <a class="btn btn-success" href="/supplier/tambah">Tambah Data Supplier</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>No Hp</th>
                  <th>Aksi</th>
                </tr> 
                </thead>
                <tbody>
                  @php $no=1; @endphp
                  @foreach($supplier as $s)
                <tr>
                  
                  <td>{{$no++}}</td>
                  <td>{{$s->nama_sup}}</td>
                  <td>{{$s->alamat}}</td>
                  <td>{{$s->no_hp}}</td>
                  <td><a class="btn btn-block btn-primary" href="/supplier/edit/{{ $s->id_sup }}">Edit</a><a class="btn btn-block btn-danger" href="/supplier/hapus/{{ $s->id_sup }}">Hapus</a></td>
                  
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