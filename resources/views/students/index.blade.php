@extends('layout/main')
@section('title', 'Daftar Mahasiswa')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="my-3">Daftar Mahasiswa</h1>
            <a href="/students/create" class="btn btn-primary my-3">Tambah data mahasiswa</a>
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
            <ul class="list-group">
                @foreach($students as $student)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{$student->nama}}
                    <a href="/students/{{$student->id}}" class="badge bagde-info">detail</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    @endsection
