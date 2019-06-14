@extends('base')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Bahan Baku {{Auth::user()->name}}
      </h1>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              @if (Auth::user()->name == "admin")
              <a class="btn btn-success" href="/bahanbaku/tambah">Tambah Data BahanBaku</a>
              @else
              Bahan Baku
              @endif
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Nama </th>
                  <th>Stok</th>
                  <th>Satuan</th>
                  <th>Harga</th>
                  <th>Nama Supplier</th>
                  <th>Aksi</th>
                </tr> 
                </thead>
                <tbody>
                  @php $no=1; @endphp
                  @foreach($bahanbaku as $s)
                <tr>
                  
                  <td>{{$no++}}</td>
                  <td>{{$s->nama_baku}}</td>
                  <td>
                    @if ($s->stok <= "20")
                      <span class="badge bg-red">{{$s->stok}}</span>
                    @else
                    {{$s->stok}}
                  @endif
                  </td>
                  
                  <td>{{$s->satuan}}</td>
                  <td>{{$s->hrg_beli}}</td>
                  <td>{{$s->nama_sup}}</td>
                  <td>@if (Auth::user()->name == "operator")
                    <a class="btn btn-block btn-success" href="/bahanbaku/pesan/{{ $s->id_baku }}">Pesan</a><a class="btn btn-block btn-primary" href="/bahanbaku/edit/{{ $s->id_baku }}">Edit</a><a class="btn btn-block btn-danger" href="/bahanbaku/hapus/{{ $s->id_baku }}">Hapus</a>
                    @else
                    <a class="btn btn-block btn-primary" href="/bahanbaku/edit/{{ $s->id_baku }}">Edit</a><a class="btn btn-block btn-danger" href="/bahanbaku/hapus/{{ $s->id_baku }}">Hapus</a>
                    @endif
                  </td>
                  
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
    </section>
      @endsection

