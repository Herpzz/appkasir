@extends('layout.master')
          @section('tittle', 'produk')
          @section('content')
          <div class="content-wrapper">
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                <h3>Halaman Edit Data Produk</h3>
                                <a class="btn btn_primary" href="/produk">Kembali</a>
                                </div>
                                <div class="card-body">
                            <form action="/produk/{{ $produk->id }}/update" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="" class="form-label">Nama produk</label>
                                    <input 
                                        type="text"
                                        class="form-control"
                                        name="name"
                                        id=""
                                        value="{{ $produk->name }}"
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                    <small id="helpId" class="form-text text-muted">Help Text</small>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Harga</label>
                                    <input 
                                        type="number"
                                        class="form-control"
                                        name="harga"
                                        id=""
                                        value="{{ $produk->harga }}"
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                    <small id="helpId" class="form-text text-muted">Help Text</small>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Stok</label>
                                    <input 
                                        type="number"
                                        class="form-control"
                                        name="stok"
                                        id=""
                                        value="{{ $produk->stok }}"
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                    <small id="helpId" class="form-text text-muted">Help Text</small>
                                </div>
                                <button class="btn btn-primary" type="submit">Simpan</button>
                            </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
          </div>
          @endsection