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
                                <th>Keterangan</th>
                                <th>Status</th>
                                <th>Nama</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>198306172004123001</td>
                                <td>TVKU-INTERNAL</td>
                                <td>02/02/2022</td>
                                <td>Jaringan Internet Down</td>
                                <td>Gedung A</td>
                                <td>High</td>
                                <td>ganti indihome</td>
                                <td>Sudah di tindak lanjuti</td>
                                <td>Selesai</td>
                                <td>Hafidz</td>
                                <td>
                                    <a href="/tambah/edit" type="Detail" class="btn btn-primary me-1 mb-1">Edit</a>
                                    <a type="Detail" class="btn btn-primary me-1 mb-1">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
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
                                <th>Keterangan</th>
                                <th>Status</th>
                                <th>Nama</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>198306172004123001</td>
                                <td>TVKU-INTERNAL</td>
                                <td>02/02/2022</td>
                                <td>Jaringan Internet Down</td>
                                <td>Gedung A</td>
                                <td>High</td>
                                <td>ganti indihome</td>
                                <td>Sudah di tindak lanjuti</td>
                                <td>Selesai</td>
                                <td>Hafidz</td>
                                <td>
                                    <a href="/tambah/edit" type="Detail" class="btn btn-primary me-1 mb-1">Edit</a>
                                    <a type="Detail" class="btn btn-primary me-1 mb-1">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
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
                                <th>Keterangan</th>
                                <th>Status</th>
                                <th>Nama</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>198306172004123001</td>
                                <td>TVKU-INTERNAL</td>
                                <td>02/02/2022</td>
                                <td>Jaringan Internet Down</td>
                                <td>Gedung A</td>
                                <td>High</td>
                                <td>ganti indihome</td>
                                <td>Sudah di tindak lanjuti</td>
                                <td>Selesai</td>
                                <td>Hafidz</td>
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