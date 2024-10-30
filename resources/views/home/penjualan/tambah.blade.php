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
                                <h3>Halaman Tambah Data Penjualan</h3>
                                <a class="btn btn_primary" href="/penjualan">Kembali</a>
                                </div>
                                <div class="card-body">
                            <form action="/penjualan/simpan" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="" class="form-label">Tanggal Penjualan</label>
                                    <input 
                                        type="date"
                                        class="form-control"
                                        name="tanggal"
                                        id=""
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                    @error('tanggal')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Total Harga</label>
                                    <input 
                                        type="number"
                                        class="form-control"
                                        name="total"
                                        id=""
                                        value="{{old ('total') }}"
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                    @error('total')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Id pelanggan</label>
                                    <select name="id_pelanggan" id="" class="form-control">
                                        <option value="">Pilih Id</option>
                                        @foreach($pelanggan as $pelanggan)
                                        <option value="{{ $pelanggan->id}}">{{ $pelanggan-> name}}</option>
                                        @endforeach
                                    </select>
                                    @error('id_pelanggan')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <button class="btn btn-primary" type="submit">Update</button>
                            </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
          </div>
          @endsection