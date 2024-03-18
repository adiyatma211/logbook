@extends('layouts.base')
@section('inputlog','active')
@section('konten')
<div class="col">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Create Laporan</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form action="/tambah/create/simpan" method="post" class="form form-vertical"  enctype="multipart/form-data">
                    @csrf
                    <div class="form-body">
                        <div class="row">
                            <div class="col-12">
                                <label for="contact-info-vertical">Unit</label>
                                <select name="unit" class="form-select form-select-sm" aria-label="Small select example">
                                    @foreach($unit as $b)
                                    <option value="{{ $b->id }}">{{ $b->unit}}</option>
                                    @endforeach
                                </select>
                            </div>
                            {{-- <div class="col-12">
                                <div class="form-group">
                                    <label for="first-name-vertical">Masukan Tanggal</label>
                                    <input type="date" id="first-name-vertical" class="form-control"
                                        name="tanggal" placeholder="Masukan Tanggal">
                                </div>
                            </div> --}}
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="first-name-vertical">Masukan Tanggal dan Waktu</label>
                                    <input type="datetime-local" id="first-name-vertical" class="form-control"
                                        name="tanggal" placeholder="Masukan Tanggal dan Waktu">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="email-id-vertical">Kejadian</label>
                                    <input type="text" id="email-id-vertical" class="form-control"
                                        name="kejadian" placeholder="Masukan Kejadian">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="contact-info-vertical">Lokasi</label>
                                    <input type="text" id="contact-info-vertical" class="form-control"
                                        name="lokasi" placeholder="Masukan Lokasi">
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="contact-info-vertical">Resiko</label>
                                <select name="resiko" class="form-select form-select-sm" aria-label="Small select example">
                                    <option value="Low">Low</option>
                                    <option value="Medium">Medium</option>
                                    <option value="High">High</option>
                                  </select>
                            </div>
                            <div class="col-12" style="margin-top: 20px" >
                                <div class="form-group">
                                    <label for="contact-info-vertical">Tindakan</label>
                                    <textarea name="tindakan" class="form-control" placeholder="Masukan Tindakan" id="floatingTextarea2" style="height: 100px"></textarea>
                                  </div>
                            </div>
                           
                            <div class="col-12">
                                <label for="contact-info-vertical">Status</label>
                                <select name="status" class="form-select form-select-sm" aria-label="Small select example">
                                    <option value="new">New</option>
                                    <option value="onprogress">On Progress</option>
                                    <option value="done">Done</option>
                                  </select>
                            </div>
                            <div  class="col-12 d-flex justify-content-end" style="margin-top: 20px" >
                                <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                <button type="reset"
                                    class="btn btn-light-secondary me-1 mb-1">Reset</button>
                            </div>
                        </div>
                    </div>
                    @include('sweetalert::alert')
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</section>
@endsection
