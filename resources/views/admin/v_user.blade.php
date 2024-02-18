@extends('layouts.base')
@section('headuser', 'active')
@section('konten')
<div class="page-content"> 
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">
                    Laporan saya
                </h5>
                <div class="card-options">
                    <a href="/user/tambah" id="Detail" class="btn btn-primary me-1 mb-1">Tambah</a>
            </div>
            <div class="card-body">
                <div class="table-responsive datatable-minimal">
                    <table class="table" id="table2">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Gambar</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Jabatan</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $a)
                            <tr>
                                <td>1</td>
                                <td>{{$a->name}}</td>
                                <td><img class="avatar me-3" src="{{ asset('public/Image/' . $a->image) }}" style="width: 250px; height:250px;" alt=""></td>
                                <td>{{$a->username}}</td>
                                <td>{{$a->email}}</td>
                                <td>{{$a->jabatan}}</td>
                                <td>{{$a->role}}</td>
                                <td>
                                    <a href="/user/edit/{{$a->id}}" type="Detail" class="btn btn-primary me-1 mb-1">Edit</a>

                                   <a href="#" onclick="event.preventDefault(); if(confirm('Apakah Anda yakin ingin menghapus?')) { document.getElementById('delete-form-{{ $a->id }}').submit(); }" type="button" class="btn btn-danger">
                                        Delete
                                    </a>
                                    <form id="delete-form-{{ $a->id }}" action="/user/delete/{{ $a->id }}" method="POST" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </section>
</div>
@endsection 