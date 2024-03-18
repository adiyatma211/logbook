@extends('layouts.base')
@section('headproduct', 'active')
@section('konten')
<div class="page-content"> 
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">
                    E-Logbook
                </h5>
                <div class="card-options">
                    <a href="/tambah/create" id="Detail" class="btn btn-primary me-1 mb-1">Tambah</a>
            </div>
            <div class="card-body">
                <div class="table-responsive datatable-minimal">
                    <table class="table" id="table2">
                       
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nip</th>
                                <th>Unit</th>
                                <th>Tanggal</th>
                                <th>Kejadian</th>
                                <th>Lokasi</th>
                                <th>Resiko</th>
                                <th>Tindakan</th>
                                <th>Status</th>
                                <th>Nama</th>
                                <th>Di Edit Oleh</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($log as $a)
                            <tr>
                                <td>1</td>
                                <td>{{$a->user->nip}}</td>
                                <td>{{$a->modelunit->unit ?? '' }}</td>
                                <td>{{$a->tanggal}}</td>
                                <td>{{$a->kejadian}}</td>
                                <td>{{$a->lokasi}}</td>
                                <td>{{$a->resiko}}</td>
                                <td>{{$a->tindakan}}</td>
                                <td>{{$a->status}}</td>
                                <td>{{$a->user->name}}</td>
                                <td>{{ $a->usereditby ? $a->usereditby->name : '' }}</td>
                                <td>
                                    <a href="/tambah/edit/{{$a->id}}" type="button" class="btn btn-primary me-1 mb-1">Edit</a>
                                    <a href="#" onclick="event.preventDefault(); if(confirm('Apakah Anda yakin ingin menghapus?')) { document.getElementById('delete-form-{{ $a->id }}').submit(); }" type="button" class="btn btn-danger">
                                        Delete
                                    </a>
                                    <form id="delete-form-{{ $a->id }}" action="/tambah/delete/{{ $a->id }}" method="POST" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">
                    E-Logbook Unit
                </h5>
                <div class="card-options">
                    <a href="/tambah/create" id="Detail" class="btn btn-primary me-1 mb-1">Tambah</a>
            </div>
            <div class="card-body">
                <div class="table-responsive datatable-minimal">
                    <table class="table" id="table2">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nip</th>
                                <th>Tanggal</th>
                                <th>Kejadian</th>
                                <th>Lokasi</th>
                                <th>Resiko</th>
                                <th>Tindakan</th>
                                <th>Status</th>
                                <th>Nama</th>
                                <th>Di Edit Oleh</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($unitLogs as $b)
                            <tr>
                                <td>1</td>
                                <td>{{$b->user->nip}}</td>
                                <td>{{$b->modelunit->unit ?? '' }}</td>
                                <td>{{$b->tanggal}}</td>
                                <td>{{$b->kejadian}}</td>
                                <td>{{$b->lokasi}}</td>
                                <td>{{$b->resiko}}</td>
                                <td>{{$b->tindakan}}</td>
                                <td>{{$b->status}}</td>
                                <td>{{$b->user->name}}</td>
                                <td>{{ $a->usereditby ? $a->usereditby->name : '' }}</td>
                                <td>
                                    <a href="/tambah/edit" type="Detail" class="btn btn-primary me-1 mb-1">Edit</a>
                                    <a type="Detail" class="btn btn-primary me-1 mb-1">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </section>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">
                    E-Logbook Unit
                </h5>
                <div class="card-options">
                    <a href="/tambah/create" id="Detail" class="btn btn-primary me-1 mb-1">Tambah</a>
            </div>
            <div class="card-body">
                <div class="table-responsive datatable-minimal">
                    <table class="table" id="table2">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nip</th>
                                <th>Tanggal</th>
                                <th>Kejadian</th>
                                <th>Lokasi</th>
                                <th>Resiko</th>
                                <th>Tindakan</th>
                                {{-- <th>Keterangan</th> --}}
                                <th>Status</th>
                                <th>Nama</th>
                                <th>Diedit Oleh</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($unitLogs1 as $c)
                           
                            <tr>
                                <td>1</td>
                                <td>{{$c->user->nip}}</td>
                                <td>{{$c->modelunit->unit ?? '' }}</td>
                                <td>{{$c->tanggal}}</td>
                                <td>{{$c->kejadian}}</td>
                                <td>{{$c->lokasi}}</td>
                                <td>{{$c->resiko}}</td>
                                <td>{{$c->tindakan}}</td>
                                {{-- <td>{{$c->keterangan}}</td> --}}
                                <td>{{$c->status}}</td>
                                <td>{{$c->user->name}}</td>
                                <td>{{ $a->usereditby ? $a->usereditby->name : '' }}</td>
                                <td>
                                    <a href="/tambah/edit" type="Detail" class="btn btn-primary me-1 mb-1">Edit</a>
                                    <a type="Detail" class="btn btn-primary me-1 mb-1">Delete</a>
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