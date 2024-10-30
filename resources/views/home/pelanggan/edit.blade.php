@extends('layout.master')
          @section('tittle', 'pelanggan')
          @section('content')
          <div class="content-wrapper">
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                <h3>Halaman Edit Data Pelanggan</h3>
                                <a class="btn btn_primary" href="/pelanggan">Kembali</a>
                                </div>
                                <div class="card-body">
                            <form action="/pelanggan/{{ $pelanggan->id }}/update" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="" class="form-label">Nama Pelanggan</label>
                                    <input 
                                        type="text"
                                        class="form-control"
                                        name="name"
                                        id=""
                                        value="{{ $pelanggan->name }}"
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                    <small id="helpId" class="form-text text-muted">Help Text</small>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Alamat</label>
                                    <input 
                                        type="text"
                                        class="form-control"
                                        name="alamat"
                                        id=""
                                        value="{{ $pelanggan->alamat }}"
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                    <small id="helpId" class="form-text text-muted">Help Text</small>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">No Telp</label>
                                    <input 
                                        type="number"
                                        class="form-control"
                                        name="no_telp"
                                        id=""
                                        value="{{ $pelanggan->no_telp }}"
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