@extends('base')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Pengiriman
      </h1>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Pembelian</h3>

              <div class="box-body no-padding">
              <table class="table table-striped">
                <tr>
                  <th>ID Baku</th>
                  <th>Kuantitas</th>
                  <th style="width: 40px">Tgl Transaksi</th>
                </tr>

                  @foreach($pembelian as $p)
                <tr>
                  <td>{{$p->nama_baku}}</td>
                  <td>{{$p->kuantitas}}</td>
                  <td>{{$p->tgl_transaksi}}</td>
                  
                </tr>
                @endforeach
              </table>
            </div>
            </div>
          </div>
        </div>
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tambah Data Pengiriman</h3>
            </div>
            <div class="box-body">
              <form role="form" action="/pembelian/send" method="post">
                {{ csrf_field() }}
                <!-- text input -->
                @foreach ($pembelian as $p)
                <input type="text" name="id_pemb" value="{{$p->id_pemb}}" hidden="">
                <div class="form-group">
                  <label>Operator</label>
                  <input type="text"  value="{{Session::get('name')}}" class="form-control" placeholder="Operator" disabled="">
                  <input type="text" name="operator" value="{{Session::get('id')}}"  hidden="">
                </select> 
                </div>
                <div class="form-group">
                  <label>Supplier</label>
                  <select name="supplier" class="form-control">
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
              @endforeach
            </form>  
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  @endsection