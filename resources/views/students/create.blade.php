@extends('layout/main')
@section('title', 'Form Tambah Data Mahasiswa')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="my-3">Form Tambah Data Mahasiswa</h1>
            <form method="post" action="/students">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
                        placeholder="Masukkan nama" name="nama">
                    @error('nama')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="niu">NIU</label>
                    <input type="text" class="form-control @error('niu') is-invalid @enderror" id="niu"
                        placeholder="Masukkan NIU" name="niu">
                </div>
                @error('niu')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email"
                        placeholder="Masukkan email" name="email">
                </div>
                @error('email')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
                <div class="form-group @error('jurusan') is-invalid @enderror">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" class="form-control" id="jurusan" placeholder="Masukkan jurusan" name="jurusan">
                </div>
                @error('jurusan')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
                <button type="submit" class="btn btn-primary">Tambah data</button>
            </form>
        </div>
    </div>
    @endsection
