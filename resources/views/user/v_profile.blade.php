@extends('layouts.base')
@section('konten')
<div class="page-title">
    <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>Edit User</h3>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Users</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- // Basic multiple Column Form section start -->
<section id="multiple-column-form">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-vertical" action="" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="first-name-icon">Name</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control"
                                                    placeholder="Your Name" id="first-name-icon" name="name" value="">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-person"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="first-name-icon">NIP</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control"
                                                    placeholder="NIPD" id="first-name-icon" name="name" value="">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-person"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="mobile-id-icon">Phone</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control" placeholder="Phone"
                                                    id="mobile-id-icon" name="phone" value="">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-phone"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        
                                            <div class="mb-3">
                                                <label for="formFile" class="form-label">Upload Image Profile </label>
                                                <input class="form-control" type="file" id="formFile">
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>

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