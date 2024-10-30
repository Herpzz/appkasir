@extends('layout.master')
          @section('tittle', 'detailpenjualan')
          @section('content')
          <div class="content-wrapper">
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    @if(session('success'))
                                    <div class="alert alert-info">
                                        {{ session('success')}}
                                    </div>
                                    @endif
                                <h3>Halaman Data Detail Penjualan</h3>
                                <a class="btn btn-primary" href="/detail_penjualan/tambah">Tambah</a>
                                </div>
                                <div class="card-body">
                                        <table class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Id Penjualan</th>
                                                    <th scope="col">Id Produk</th>
                                                    <th scope="col">Jumlah Produk</th>
                                                    <th scope="col">Subtotal</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($detailpenjualan as $detailpenjualan)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $detailpenjualan->id_penjualan }}</td>
                                                    <td>{{ $detailpenjualan->id_produk }}</td>
                                                    <td>{{ $detailpenjualan->jumlah }}</td>
                                                    <td>{{ $detailpenjualan->subtotal }}</td>
                                                    <td><a class="btn btn-warning" href="/detailpenjualan/{{ $detailpenjualan->id }}/show">Edit</a>
                                                        <a class="btn btn-danger" href="/detailpenjualan/{{ $detailpenjualan->id }}/delete"
                                                        onclick="return confirm('Yakin mau dihapus??')">Hapus</a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
          </div>
          @endsection

          <!-- @extends('layout.master')
@section('title'.'detailpenjualan')
@section('content')

<div class="content-wrapper">
    <div class="section content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            @if(session('succses'))
                                <div class="alert alert-info">
                                    {{ session('succses')}}
                         </div>
                    @endif
                    <h3>Halama Data Detail Transaksi</h3>
                    <a class="btn btn-primary" href="/detailpenjualan/tambah"><i class= "nav-icon fas fa-plus"></i>Tambah</a>
                </div>
                        <div class="card-body">
                         <div
                                class="table-responsive" >
                                <table
                                class="table table-bordered table-striped" id="datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Detail Penjualan</th>
                                            <th scope="col">Produk ID</th>
                                            <th scope="col">Jumlah Produk</th>
                                            <th scope="col">Subtotal</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($detailpenjualan as $detailpenjualan )
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{$detailpenjualan->Transaksi->detailpenjualan}}</td>
                                            <td>{{$detailpenjualan->Produk->id_produk}}</td>
                                            <td>Rp. {{number_format($detailpenjualan->jumlah)}}</td>
                                            <td> {{$detailpenjualan->Subtotal}}</td>
                                            <td><a class="btn btn-warning" href="/detailpenjualan/{{ $detailpenjualan->id}}/show"><i class= "nav-icon fas fa-pen"></i>Edit</a>
                                                <a class="btn btn-danger" href="/detailpenjualan/{{ $detailpenjualan->id}}/delete"
                                                    onclick="return confirm('Yakin mau di hapus ?')"><i class= "nav-icon fas fa-trash"></i>Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection -->
