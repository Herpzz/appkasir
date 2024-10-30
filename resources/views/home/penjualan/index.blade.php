@extends('layout.master')
          @section('tittle', 'penjualan')
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
                                <h3>Halaman Data Penjualan</h3>
                                <a class="btn btn-primary" href="/penjualan/tambah">Tambah</a>
                                </div>
                                <div class="card-body">
                                        <table class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Tanggal Penjualan</th>
                                                    <th scope="col">Total Harga</th>
                                                    <th scope="col">Id Pelanggan</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($penjualan as $penjualan)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $penjualan->tanggal }}</td>
                                                    <td>{{number_format($penjualan->total) }}</td>
                                                    <td>{{ $penjualan->id_pelanggan }}</td>
                                                    <td><a class="btn btn-warning" href="/detailpenjualan">Detail</a>
                                                        <!-- <a class="btn btn-danger" href="/penjualan/{{ $penjualan->id }}/delete"
                                                        onclick="return confirm('Yakin mau dihapus??')">Hapus</a> -->
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