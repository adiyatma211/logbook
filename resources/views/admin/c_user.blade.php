@extends('layouts.base')
@section('konten')
<div class="col">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Create User</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form class="form form-vertical">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="first-name-vertical">Nama</label>
                                    <input type="text" id="first-name-vertical" class="form-control"
                                        name="fname" placeholder="Masukan Tanggal">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="first-name-vertical">email</label>
                                    <input type="email" id="first-name-vertical" class="form-control"
                                        name="fname" placeholder="Masukan Tanggal">
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="contact-info-vertical">Unit</label>
                                <select class="form-select form-select-sm" aria-label="Small select example">
                                    <option value="1">TVKU-Internal</option>
                                    <option value="2">TVKU-EXTERNAL</option>
                                    <option value="3">TVKU-MIX</option>
                                  </select>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="first-name-vertical">password</label>
                                    <input type="password" id="first-name-vertical" class="form-control"
                                        name="fname" placeholder="Masukan Tanggal">
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="contact-info-vertical">Role</label>
                                <select class="form-select form-select-sm" aria-label="Small select example">
                                    <option value="1">Admin</option>
                                    <option value="2">Staff</option>
                                    <option value="3">Super Admin</option>
                                  </select>
                            </div>
                            <div class="col-12">
                                <label for="contact-info-vertical">Jabatan</label>
                                <select class="form-select form-select-sm" aria-label="Small select example">
                                    <option value="1">Admin</option>
                                    <option value="2">Staff</option>
                                    <option value="3">Super Admin</option>
                                  </select>
                            </div>
                          
                            
                            <div  class="col-12 d-flex justify-content-end" style="margin-top: 20px" >
                                <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                <button type="reset"
                                    class="btn btn-light-secondary me-1 mb-1">Reset</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</section>
@endsection
