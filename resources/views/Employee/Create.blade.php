@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
              <div class="card-header">{{ __('Create Employee') }}</div>
              <div class="card-body">
                <form method="post" action="{{ route('employee.store') }}">
                  @csrf
                  <div class="row mb-3">
                    <label class="col-sm-2 col-label-form">Name</label>
                    <div class="col-sm-10">
                      <input type="text" name="name" class="form-control" />
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-2 col-label-form">Jabatan</label>
                    <div class="col-sm-10">
                      <input type="text" name="jabatan" class="form-control" />
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-2 col-label-form">Umur</label>
                    <div class="col-sm-10">
                      <input type="number" name="umur" class="form-control" />
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-2 col-label-form">Alamat</label>
                    <div class="col-sm-10">
                      <input type="text" name="alamat" class="form-control" />
                    </div>
                  </div>
                  <div class="text-center">
                    <input type="submit" class="btn btn-primary" value="Add" />
                  </div>	
                </form>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection