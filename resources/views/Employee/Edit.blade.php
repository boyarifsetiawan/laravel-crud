@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Edit Employee') }}</div>
        <div class="card-body">
          <form method="POST" action="{{ route('employee.update',$employee->id) }}">
            @csrf
            @method('put')
            <div class="row mb-3">
              <label class="col-sm-2 col-label-form">Nama</label>
              <div class="col-sm-10">
                <input type="text" name="nama" class="form-control" value="{{ $employee->nama }}" />
                @error('nama')
                <span class="badge bg-danger">{{ $message }}</span>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-label-form">Jabatan</label>
              <div class="col-sm-10">
                <input type="text" name="jabatan" class="form-control" value="{{ $employee->jabatan }}"/>
                @error('jabatan')
                <span class="badge bg-danger">{{ $message }}</span>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-label-form">Umur</label>
              <div class="col-sm-10">
                <input type="number" name="umur" class="form-control" value="{{ $employee->umur }}"/>
                @error('umur')
                <span class="badge bg-danger">{{ $message }}</span>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-label-form">Alamat</label>
              <div class="col-sm-10">
                <input type="text" name="alamat" class="form-control" value="{{ $employee->alamat }}"/>
                @error('alamat')
                <span class="badge bg-danger">{{ $message }}</span>
                @enderror
              </div>
            </div>
            <div class="text-center">
              <input type="submit" class="btn btn-success" value="Update" />
              <a href="{{ route('home') }}" class="btn btn-warning text-white">Cancel</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection