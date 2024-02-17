@extends('layouts.base')
@section('konten')
<div class="col">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Edit Unit</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form action="/laporunit/update/{{$unit->id}}"  method="post" class="form form-vertical">
                    @csrf
                    @method('PUT')
                    <div class="form-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="first-name-vertical">Kode</label>
                                    <input type="text" id="first-name-vertical" class="form-control"
                                        name="kode" value="{{$unit->kode}}" placeholder="Masukan Kode">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="email-id-vertical">Unit</label>
                                    <input type="text" id="email-id-vertical" class="form-control"
                                        name="unit" value="{{$unit->unit}}" placeholder="Masukan Nama Unit">
                                </div>
                            </div>
                            <div  class="col-12 d-flex justify-content-end" style="margin-top: 20px" >
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
