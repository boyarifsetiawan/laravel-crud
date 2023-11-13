@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Employee') }}</div>
                <div class="col m-3">
                    <a href="{{ route('employee.create') }}" class="btn btn-success btn-sm float-end">Add</a>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
