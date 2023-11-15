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
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Umur</th>
                            <th>Alamat</th>
                            <th width="280px">Action</th>
                        </tr>
                        @php
                            $i=0;
                        @endphp
                        @foreach ($employees as $item)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->jabatan }}</td>
                            <td>{{ $item->umur }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>
                                <form action="" method="POST">
                
                                    <a class="btn btn-info" href="">Show</a>
                    
                                    <a class="btn btn-primary" href="">Edit</a>
                
                                    @csrf
                                    @method('DELETE')
                    
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
