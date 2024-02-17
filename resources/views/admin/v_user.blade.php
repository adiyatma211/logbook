@extends('layouts.base')
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
                                <th>Email</th>
                                <th>Jabatan</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Ahrul</td>
                                <td>Ahrul@gmail.com</td>
                                <td>Staff</td>
                                <td>Admin</td>
                                <td>
                                    <a href="/tambah/edit" type="Detail" class="btn btn-primary me-1 mb-1">Edit</a>
                                    <a type="Detail" class="btn btn-primary me-1 mb-1">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </section>
</div>
@endsection 