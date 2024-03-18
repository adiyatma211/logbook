@extends('layouts.base')
@section('konten')
@if (session('success_message'))
        <div class="alert alert-success">
            {{ session('seccess_message') }}
        </div>
    @endif
<div class="col">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Create Unit</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form action="/laporunit/tambah/simpan"  method="post" class="form form-vertical">
                    @csrf
                    <div class="form-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="first-name-vertical">Kode</label>
                                    <input type="text" id="first-name-vertical" class="form-control"
                                        name="kode" placeholder="Masukan Kode">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="email-id-vertical">Unit</label>
                                    <input type="text" id="email-id-vertical" class="form-control"
                                        name="unit" placeholder="Masukan Unit">
                                </div>
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
