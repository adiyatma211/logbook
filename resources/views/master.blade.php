@extends('layouts.base')
@section('konten')
@if (Auth::user()->role == 'Admin')
<div class="page-content"> 
    <section class="row">
        <div class="col-12 col-lg-9">
            <div class="row">
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon purple mb-2">
                                        <i class="iconly-boldShow"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">User</h6>
                                    <h6 class="font-extrabold mb-0">112.000</h6>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card"> 
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon blue mb-2">
                                        <i class="iconly-boldProfile"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Laporan Selesai</h6>
                                    <h6 class="font-extrabold mb-0">183.000</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon green mb-2">
                                        <i class="iconly-boldAdd-User"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Due Date</h6>
                                    <h6 class="font-extrabold mb-0">80.000</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon red mb-2">
                                        <i class="iconly-boldBookmark"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Progress</h6>
                                    <h6 class="font-extrabold mb-0">112</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Grafik Laporan</h4>
                        </div>
                        <div class="card-body">
                            <div id="chart-profile-visit"></div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">
                    Tabel Laporan
                </h5>
            </div>
            <div class="card-body">
                <div class="table-responsive datatable-minimal">
                    <table class="table" id="table2">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>City</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Graiden</td>
                                <td>vehicula.aliquet@semconsequat.co.uk</td>
                                <td>076 4820 8838</td>
                                <td>Offenburg</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                                <td>
                                    <a type="Detail" class="btn btn-primary me-1 mb-1">Detail</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Dale</td>
                                <td>fringilla.euismod.enim@quam.ca</td>
                                <td>0500 527693</td>
                                <td>New Quay</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                                <td>
                                    <a type="Detail" class="btn btn-primary me-1 mb-1">Detail</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Nathaniel</td>
                                <td>mi.Duis@diam.edu</td>
                                <td>(012165) 76278</td>
                                <td>Grumo Appula</td>
                                <td>
                                    <span class="badge bg-danger">Inactive</span>
                                </td>
                                <td>
                                    <a type="Detail" class="btn btn-primary me-1 mb-1">Detail</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Darius</td>
                                <td>velit@nec.com</td>
                                <td>0309 690 7871</td>
                                <td>Ways</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                                <td>
                                    <a type="Detail" class="btn btn-primary me-1 mb-1">Detail</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Oleg</td>
                                <td>rhoncus.id@Aliquamauctorvelit.net</td>
                                <td>0500 441046</td>
                                <td>Rossignol</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                                <td>
                                    <a type="Detail" class="btn btn-primary me-1 mb-1">Detail</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Kermit</td>
                                <td>diam.Sed.diam@anteVivamusnon.org</td>
                                <td>(01653) 27844</td>
                                <td>Patna</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                                <td>
                                    <a type="Detail" class="btn btn-primary me-1 mb-1">Detail</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Jermaine</td>
                                <td>sodales@nuncsit.org</td>
                                <td>0800 528324</td>
                                <td>Mold</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                                <td>
                                    <a type="Detail" class="btn btn-primary me-1 mb-1">Detail</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Ferdinand</td>
                                <td>gravida.molestie@tinciduntadipiscing.org</td>
                                <td>(016977) 4107</td>
                                <td>Marlborough</td>
                                <td>
                                    <span class="badge bg-danger">Inactive</span>
                                </td><td>
                                    <a type="Detail" class="btn btn-primary me-1 mb-1">Detail</a>
                                </td>

                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </section>
</div>
@elseif (Auth::user()->role == 'user')
<div class="page-content"> 
    <section class="row">
        <div class="col-12 col-lg-9">
            <div class="row">
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon purple mb-2">
                                        <i class="iconly-boldShow"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Laporan Baru</h6>
                                    <h6 class="font-extrabold mb-0">{{$newCount}}</h6>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card"> 
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon blue mb-2">
                                        <i class="iconly-boldProfile"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Laporan OnGoing</h6>
                                    <h6 class="font-extrabold mb-0">{{$ongoingCount}}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon green mb-2">
                                        <i class="iconly-boldAdd-User"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Laporan Selesai</h6>
                                    <h6 class="font-extrabold mb-0">{{$doneCount}}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Grafik Laporan</h4>
                            
                        </div>
                        <div class="card-body">
                            <div id="chart-profile-visit"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">
                    Laporan Saya
                </h5>
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
                                @foreach ($master as $a)
                                <td>1</td>
                                <td>{{$a->user->nip}}</td>
                                <td>{{$a->modelunit->unit}}</td>
                                <td>{{$a->tanggal}}</td>
                                <td>{{$a->kejadian}}</td>
                                <td>{{$a->lokasi}}</td>
                                <td>{{$a->resiko}}</td>
                                <td>{{$a->tindakan}}</td>
                                <td>{{$a->keterangan}}</td>
                                <td>{{$a->status}}</td>
                                <td>{{$a->user->name}}</td>
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
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
@endif
@endsection